
<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "mummy"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ticketNumber'])) {
        $ticketNumber = $_POST['ticketNumber'];

        // Check if the ticket number exists in the database
        $sql = "SELECT * FROM booked_tickets WHERE ticket_number = '$ticketNumber'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Ticket found in booked_tickets, cancel the ticket
            $sql_cancel = "INSERT INTO cancelled_tickets (ticket_number) VALUES ('$ticketNumber')";
            if ($conn->query($sql_cancel) === TRUE) {
                echo '<div class="success-message">
                    <h2>Cancelled Successfully!</h2>
                    <p>Your ticket has been cancelled.</p>
                </div>';
            } else {
                echo "Error: " . $sql_cancel . "<br>" . $conn->error;
            }
        } else {
            // Ticket not found in booked_tickets, consider for waiting list or other action
            echo '<div class="waiting-list">
                <h2>Waiting List</h2>
                <p>Your ticket is not booked. Consider for waiting list or other action.</p>
            </div>';
        }

        $conn->close();
    }
}
?>
</body>
</html>
