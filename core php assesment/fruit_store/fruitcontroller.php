<?php
require_once'fruitmodel.php';

class FruitController {
    private $fruitModel;

    public function __construct() {
        $this->fruitModel = new fruitmodel();
    }

    public function addFruit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['fruitname']) && isset($_POST['qty'])) {
            $name = $_POST['fruitname'];
            $quantity = (int)$_POST['qty'];
            $success = $this->fruitModel->addFruit($name, $quantity);
            if ($success) {
                header('Location: index.php?status=added');
            } else {
                echo "Failed to add fruit.";
            }
        }
     }else{
        require_once 'addfruit.php';
     }
    }

    public function viewFruits() {
        $fruits = $this->fruitModel->getFruits();
        require_once 'viewfruit.php';
    }

    public function updateFruit() {
         $fruits = $this->fruitModel->getFruits();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['fruitname']) && isset($_POST['qty'])) {
            $name = $_POST['fruitname'];
            $quantity = (int)$_POST['qty'];
            $success = $this->fruitModel->updateFruit($name, $quantity);
            if ($success) {
                header('Location: index.php?status=updated');
            } else {
                echo "Failed to update fruit.";
            }
        }
    }else{
        require_once 'updatefruit.php';
    }
    }
    
    public function showMenu() {
        require_once'menu.php';
    }
}
?>