<?php

include_once("db_SwiftLaundry_connection_script.php");

$sql = "CREATE TABLE Users 
(username VARCHAR(10) PRIMARY KEY NOT NULL,
 password VARCHAR(30) NOT NULL, contact INT(20) NOT NULL)";
if ($connection->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating database: " . $connection->error;
}

$connection->close();


?>