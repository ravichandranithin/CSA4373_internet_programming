<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }

        .cancel-form {
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .cancel-button {
            padding: 10px 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .cancel-button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="cancel-form">
        <h2>Cancel Ticket</h2>
        <form action="data.php" method="post">
            <label for="ticketNumber">Enter Ticket Number:</label><br>
            <input type="text" id="ticketNumber" name="ticketNumber" required><br><br>
            <input type="submit" class="cancel-button" value="Cancel Ticket">
        </form>
    </div>
</body>
</html>
