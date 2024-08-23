<?php
require_once 'Controller.php';

$controller = new TaskController();

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'add':
        require 'add_task.php';
        break;
    case 'addTask':
        $controller->addTask();
        break;
    case 'delete':
        $controller->deleteTask($_GET['index']);
        break;
    case 'clear':
        $controller->clearAll();
        break;
    default:
        $controller->listTasks();
        break;
}
?>