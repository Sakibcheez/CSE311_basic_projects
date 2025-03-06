<?php
$host = 'localhost';      // Database host
$dbname = 'food_website'; // Database name
$username = 'root';       // Database username
$password = '';           // Database password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // Optional: For debugging
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>