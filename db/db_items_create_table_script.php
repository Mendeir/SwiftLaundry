<?php  

include_once("db_SwiftLaundry_connection_script.php");

$sql_command = "CREATE TABLE items 
    (
        item_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        item_name VARCHAR(50) NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        image_path VARCHAR(255) NOT NULL
    )";

    if ($connection->query($sql_command) === TRUE) {
        echo "Table items created successfully";
    } else {
        echo "Error creating table: ".$connection->error;
    }

    $connection->close();
    /*
    SELECT receipt_date, item_name, price, quantity 
    FROM orders as o 
    INNER JOIN items as i ON o.items_id = i.item_id 
    INNER JOIN receipts as r ON o.receipts_id = r.receipt_id
    WHERE receipts_id = 1;
    */
?>