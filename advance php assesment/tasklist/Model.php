<?php
class Task {
    public $tasks = [];

    public function __construct() {
        // Load tasks from session
        if (isset($_SESSION['tasks'])) {
            $this->tasks = $_SESSION['tasks'];
        }
    }

    public function addTask($task) {
        $this->tasks[] = $task;
        $_SESSION['tasks'] = $this->tasks;
    }

    public function deleteTask($index) {
        unset($this->tasks[$index]);
        $_SESSION['tasks'] = $this->tasks;
    }

    public function clearAll() {
        $this->tasks = [];
        unset($_SESSION['tasks']);
    }
}
