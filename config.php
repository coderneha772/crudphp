<?php
$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$dbname1 = "project";
// Create connection
$conn = new mysqli($servername1, $username1, $password1, $dbname1);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>