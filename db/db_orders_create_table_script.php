<?php  

    include_once("db_SwiftLaundry_connection_script.php");

    $sql_command = "CREATE TABLE orders 
    (
        orders_id INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
        receipts_id INT(10) UNSIGNED NOT NULL,
        items_id INT(10) UNSIGNED NOT NULL,
        quantity INT(5) NOT NULL,
        PRIMARY KEY (orders_id),
        FOREIGN KEY (receipts_id) REFERENCES receipts(receipt_id), 
        FOREIGN KEY (items_id) REFERENCES items(item_id)
    )";

        #FOREIGN KEY (receipts_id) REFERENCES receipts(receipt_id), 
        #FOREIGN KEY (items_id) REFERENCES items(item_id)

    if ($connection->query($sql_command) === TRUE) {
        echo "Table orders created successfully";
    } else {
        echo "Error creating table: ".$connection->error;
    }

    $connection->close();


?>