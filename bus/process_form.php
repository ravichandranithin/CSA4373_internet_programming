<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name
$dbUsername = "root"; // Replace with your database username
$dbPassword = ""; // Replace with your database password
$dbname = "daddy"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];

// Prepare and execute SQL statement to insert data into a table
$sql = "INSERT INTO users (username, mobile_number, email) VALUES ('$username', '$mobile_number', '$email')";

if ($conn->query($sql) === TRUE) {
    // Redirect to another page upon successful entry
    header("Location: first.php");
    exit(); // Ensure that no further code is executed after the redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
