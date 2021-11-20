<?php  

include_once("db_SwiftLaundry_connection_script.php");

    $sql_command = "CREATE TABLE receipts 
    (
        receipt_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        receipt_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL
    )";

    if ($connection->query($sql_command) === TRUE) {
        echo "Table receipts created successfully";
    } else {
        echo "Error creating table: ".$connection->error;
    }

    $connection->close();
?>