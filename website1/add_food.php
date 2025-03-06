<?php
include 'db_connect.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $food_name = $_POST['food_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Prepare SQL query
    $sql = "INSERT INTO food_items (food_name, description, price) VALUES (:food_name, :description, :price)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':food_name', $food_name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);

    // Execute the query
    if ($stmt->execute()) {
        echo "Food item added successfully!";
    } else {
        echo "Error adding food item.";
    }
}
?>