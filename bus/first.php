<!DOCTYPE html>
<html>
<head>
  <title>Bus Ticketing System</title>
  <style>
/* Basic styling for the layout */
body {
  margin: 0;
  padding: 0;
  background-image: url('https://wallpapercave.com/wp/wp2120656.jpg'); /* Replace with your background image URL */
  background-size: cover;
  background-position: center;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 100vh;
}

.container {
  width: 80%;
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.left-section {
  flex: 1;
  padding: 20px;
}

.right-section {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

/* Button styling */
.button-container {
  text-align: center;
}

.book-button,
.cancel-button,
.status-button {
  display: block;
  padding: 10px 20px;
  margin: 10px auto;
  text-decoration: none;
  color: #fff;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

.book-button {
  background-color: #3498db;
}

.cancel-button {
  background-color: #e74c3c;
}

.status-button {
  background-color: #2ecc71;
}

/* Slogan styling */
.slogan {
  position: relative;
  cursor: pointer;
  overflow: hidden;
  text-align: center;
}

.slogan span {
  font-size: 20px;
  transition: font-size 0.3s ease-in-out;
}

.slogan::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
  z-index: -1;
}

</style>
</head>
<body>

<div class="container">
  <div class="left-section">
    <h1>Bus Ticketing System</h1>
    <div class="button-container">
      <a href="book_page.php" class="book-button">Book Ticket</a>
      <a href="cancel_ticket.php" class="cancel-button">Cancel Ticket</a>
      <a href="check_ticket_status.php" class="status-button">Check Ticket Status</a>
    </div>
  </div>
  <div class="right-section">
    <div class="slogan" onmouseover="maximizeSlogan()" onmouseout="minimizeSlogan()">
      <span>Have a safe trip with memories</span>
    </div>
  </div>
</div>

<script>
function maximizeSlogan() {
  document.querySelector('.slogan span').style.fontSize = '40px';
}

function minimizeSlogan() {
  document.querySelector('.slogan span').style.fontSize = 'initial';
}
</script>

</body>
</html>
