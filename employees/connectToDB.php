<?php
$servername = "your-server-name";
$username = "your-username";
$password = "your-password";


// https://www.w3schools.com/php/php_mysql_connect.asp
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "USE TheHouseCup";
if ($conn->query($sql) === TRUE) {
  // echo "Database opened";
} else {
  // echo "Error opening database: " . $conn->error;
}
?>