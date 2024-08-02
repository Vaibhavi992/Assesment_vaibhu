<?php
require_once'db_connection.php';

class FruitModel {
    private $conn;

    public function __construct() {
        $this->conn = connectDB();
    }

    public function addFruit($name, $quantity) {
        $stmt = $this->conn->prepare("INSERT INTO fruitstock (fruitname, qty) VALUES (?, ?)");
        $stmt->bind_param("si", $name, $quantity);
        return $stmt->execute();
    }

    public function getFruits() {
        $result = $this->conn->query("SELECT * FROM fruitstock");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateFruit($name, $quantity) {
        $stmt = $this->conn->prepare("UPDATE fruitstock SET qty = ? WHERE fruitname = ?");
        $stmt->bind_param("is", $quantity, $name);
        return $stmt->execute();
    }
    
}
?>
