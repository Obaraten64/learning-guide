<?php
// Create connection
$conn = new mysqli("db1.ho.ua", "pll", "gunobaraten64", "pll");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

return $conn
?>