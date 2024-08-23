<?php
require_once 'Model.php';
require_once 'session_start.php';

class TaskController {
    private $taskModel;

    public function __construct() {
        startSession();
        $this->taskModel = new Task();
    }

    public function addTask() {
        if (isset($_POST['task'])) {
            $this->taskModel->addTask($_POST['task']);
            header("Location: index.php?action=list");
        }
    }

    public function listTasks() {
        $tasks = $this->taskModel->tasks;
        require 'task_list.php';
    }

    public function deleteTask($index) {
        $this->taskModel->deleteTask($index);
        header("Location: index.php?action=list");
    }

    public function clearAll() {
        $this->taskModel->clearAll();
        header("Location: index.php?action=list");
    }
}
