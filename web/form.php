<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$con =mysqli_connect("localhost","root","","company");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone_number = $_POST["phonenumber"];
    $quantity = $_POST["quantity"];
    $item = $_POST["items"];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO orders (name, phone_number, quantity, item) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $phone_number, $quantity, $item);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Order placed successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
