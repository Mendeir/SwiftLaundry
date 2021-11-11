<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = new mysqli($servername, $username, $password);
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "Create DATABASE SwiftLaundry";
if ($connection->query($sql) === TRUE) {
  echo " SwiftLaundry Database created successfully";
} else {
  echo "Error creating database: " . $connection->error;
}

$connection->close();
?>