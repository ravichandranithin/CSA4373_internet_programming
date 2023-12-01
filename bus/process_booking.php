<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "daddy"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form data and selected seat
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromLocation = $_POST['fromLocation'];
    $toLocation = $_POST['toLocation'];
    $departOn = $_POST['departOn'];
    $roundTrip = $_POST['roundTrip']; // Assuming this is the return date in a round trip scenario

    // Seat selection data
    $selectedSeat = isset($_POST['selectedSeat']) ? $_POST['selectedSeat'] : '2';

    // SQL query to insert form data and seat selection into a table named 'bookings'
    $sql = "INSERT INTO bookings (fromLocation, toLocation, departOn, roundTrip, selectedSeat) 
            VALUES ('$fromLocation', '$toLocation', '$departOn', '$roundTrip', '$selectedSeat')";

    if ($conn->query($sql) === TRUE) {
        header("Location: success.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
