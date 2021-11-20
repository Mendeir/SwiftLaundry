<?php 

    include_once("db_SwiftLaundry_connection_script.php");
    

    if(isset($_POST["submit"])) {
        $item_name = $_POST["item-name"];
        $price = $_POST["price"];

        $image = $_FILES["image-path"];
        $image_name = $image["name"];
        $image_tmp_name = $image["tmp_name"];
        $image_extension = explode('.', $image_name);
        $final_image_extension = strtolower(end($image_extension));

        $new_filename = uniqid('', true).".".$final_image_extension;
        $database_file_destination = "img/items/".$new_filename;
        $file_destination = "../img/items/".$new_filename;
        move_uploaded_file($image_tmp_name, $file_destination);

        $query = "INSERT INTO items(item_name, price, image_path) VALUES('$item_name', '$price', '$database_file_destination')";
        $run = mysqli_query($connection, $query);

        if($run) {
            header("Location:../input_submitted_successfully.php");
        } else {
            header("Location:../input_submitted_failed.php");
        }
    }
    #INSERT INTO orders(items_id, receipts_id, quantity) VALUES(1, 1, 5)
    
?>

