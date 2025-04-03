<?php
$conn = include "connect.php";
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO basetest (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<!DOCTYPE html>
<html>
<body>
	<a href = "../Project.html">home</a>
</body>
</html>