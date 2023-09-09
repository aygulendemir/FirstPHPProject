<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kitaplarim";

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=kitaplarim", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
