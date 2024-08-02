<?php
function connectDB() {
    $host = 'localhost'; // Replace with your host
    $db = 'fruit_store'; // Database name
    $user = 'root'; // Replace with your MySQL username
    $pass = ''; // Replace with your MySQL password

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
