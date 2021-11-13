<?php 

    include_once("db_SwiftLaundry_connection_script.php");

    $sql_command = "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 1', '100', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 2', '200', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 3', '300', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 4', '400', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 5', '500', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 6', '600', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 7', '700', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 8', '800', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 9', '900', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 10', '1000', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 11', '1100', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 12', '1200', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 13', '1300', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 14', '1400', 'img/items/test.jpg');";

    $sql_command .= "INSERT INTO items(item_name, price, image_path)
    VALUES ('Item 15', '1500', 'img/items/test.jpg');";


    if ($connection->multi_query($sql_command) === TRUE) {
        $last_id = $connection->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();

?>