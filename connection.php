<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "websecurity";

$conn = new mysqli($server, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>