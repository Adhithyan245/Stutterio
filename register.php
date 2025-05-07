<?php
// Simulate database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];

// Perform SQL query to insert data into the database
$sql = "INSERT INTO users (fullName, email, password) VALUES ('$fullName', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "success";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
