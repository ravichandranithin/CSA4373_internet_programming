<!DOCTYPE html>
<html>
<head>
    <title>Travel Booking</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

form {
    width: 50%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="date"],
input[type="checkbox"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #3498db;
    color: #fff;
    cursor: pointer;
}
       .bus {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            margin: 20px auto;
        }

        .side {
            width: calc(33.33% - 10px); /* Adjust for spacing between sides */
        }

        .row {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .seat {
            width: 30px;
            height: 30px;
            margin: 5px;
            background-color: #ccc;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }
</style>
</head>
<body>


<form action="process_booking.php" method="post">
    <label for="fromLocation">From:</label></br>
    <input type="text" id="fromLocation" name="fromLocation"placeholder="fromlocation"></br>

    <label for="toLocation">To:</label></br>
    <input type="text" id="toLocation" name="toLocation"></br>

    <label for="departOn">Depart On:</label></br>
    <input type="date" id="departOn" name="departOn"></br>

    <label for="roundTrip">Round Trip:</label></br>
    <input type="date" id="roundTrip" name="roundTrip"></br>



<style>
h1{
text align:center;
color:blue;
}
</style>
 <h1>select yours</h1>
<div class="selected-seat" id="selectedSeat"></div>
<div class="bus">
    <div class="side">
        <?php
        // Left side with 2 columns and 6 rows
        $leftColumns = 2;
        $totalRows = 6;

        $seatCount = 1;

        for ($row = 1; $row <= $totalRows; $row++) {
            echo "<div class='row'>";
            for ($seat = 1; $seat <= $leftColumns; $seat++) {
                echo "<div class='seat' onclick='selectSeat($seatCount)'>$seatCount</div>";
                $seatCount++;
            }
            echo "</div>";
        }
        ?>
    </div>

    <div class="side"></div> <!-- Space between sides -->

    <div class="side">
        <?php
        // Right side with 3 columns and 6 rows
        $rightColumns = 3;

        for ($row = 1; $row <= $totalRows; $row++) {
            echo "<div class='row'>";
            for ($seat = 1; $seat <= $rightColumns; $seat++) {
                echo "<div class='seat' onclick='selectSeat($seatCount)'>$seatCount</div>";
                $seatCount++;
            }
            echo "</div>";
        }
        ?>
    </div>
</div>

<!-- Your form section remains the same -->
<!-- ... -->

<script>
    function selectSeat(seat) {
        var selectedSeatDiv = document.getElementById('selectedSeat');
        selectedSeatDiv.innerText = "Selected seat: " + seat;
    }
</script>
<input type="submit" value="Submit">
</form>
</body>
</html>