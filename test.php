<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud operations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$age = $_POST['s_name'];
$countries = $_POST['countries'];

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$fname', '$l_name', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>