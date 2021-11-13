<?php  

include_once("db_SwiftLaundry_connection_script.php");

$sql_command = "CREATE TABLE items 
    (
        item_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        item_name VARCHAR(50) NOT NULL,
        quantity INT(10) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        image_path VARCHAR(255) NOT NULL;
    )";

    if ($connection->query($sql) === TRUE) {
        echo "Table items created successfully";
    } else {
        echo "Error creating table: ".$connection->error;
    }

    $connection->close();
?>