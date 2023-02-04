<?php
$servername = "localhost";
$username = "cpe3377";
$password = "123456";
$dbname = "cpe3377";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};
?>