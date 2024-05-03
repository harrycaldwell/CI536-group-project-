<?php
// Establish connection to your database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform the database update operation
$sql = "UPDATE tAccounts SET score = 10 WHERE user_id = 1"; // Modify this query according to your database structure
if ($conn->query($sql) === TRUE) {
    echo "Database updated successfully";
} else {
    echo "Error updating database: " . $conn->error;
}

// Close the database connection
$conn->close();
?>