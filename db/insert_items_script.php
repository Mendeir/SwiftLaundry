<?php 

    include_once("db_SwiftLaundry_connection_script.php");
    

    if(isset($_POST["submit"])) {
        $item_name = $_POST["item-name"];
        $price = $_POST["price"];
        $image_path = $_POST["image-path"];

        $query = "INSERT INTO items(item_name, price, image_path) VALUES('$item_name', '$price', '$image_path')";
        $run = mysqli_query($connection, $query);

        if($run) {
            header("Location:../input_submitted_successfully.php");
        } else {
            header("Location:../input_submitted_failed.php");
        }
    }

?>