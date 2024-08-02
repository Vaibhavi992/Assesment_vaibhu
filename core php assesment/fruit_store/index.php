<?php
require_once'fruitcontroller.php';

$controller = new fruitcontroller();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add':
            $controller->addFruit();
            break;
        case 'view':
            $controller->viewFruits();
            break;
        case 'update':
            $controller->updateFruit();
            break;
        default:
            $controller->showMenu();
            break;
    }
} else {
    $controller->showMenu();
}
?>
