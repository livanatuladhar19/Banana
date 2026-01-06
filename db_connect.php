<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "hotel_booking";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
?>
