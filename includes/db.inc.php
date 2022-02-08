<?php
$servername = "localhost";
$username = "tele1";
$password = "";
$dbname = "program";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully<br>";
?>