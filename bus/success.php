<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully Created</title>
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

        .success-message {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: changeColor 2s infinite alternate;
        }

        @keyframes changeColor {
            0% { background-color: #3498db; }
            50% { background-color: #2ecc71; }
            100% { background-color: #3498db; }
        }

        .success-text {
            text-align: center;
            color: #fff;
            font-size: 24px;
        }

        .ticket-number {
            font-size: 18px;
            margin-top: 10px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="success-message">
        <p class="success-text">Successfully Created!</p>
        <p class="ticket-number">Ticket Number: <span id="ticketNumber"></span></p>
    </div>

    <script>
        // Generate a random ticket number (for demonstration purposes)
        const ticketNumber = Math.floor(Math.random() * 1000000);

        // Display ticket number
        const ticketNumberElement = document.getElementById('ticketNumber');
        ticketNumberElement.textContent = ticketNumber;
    </script>
</body>
</html>
