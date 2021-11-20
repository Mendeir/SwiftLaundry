<?php 

    session_start();

    include_once("db_SwiftLaundry_connection_script.php");

    if(isset($_POST["clear-all"])) {
        unset($_SESSION["receipts"]);
        header("Location: ../dashboard_receipts.php");
    }

    if(isset($_POST["save-receipt"])) {
        $receipts_query = "INSERT INTO receipts(receipt_date) VALUES(CURRENT_TIMESTAMP())";
        $run = mysqli_query($connection, $receipts_query);

        if ($run) {
            $current_receipts_id = $connection->insert_id;
        }

        foreach($_SESSION["receipts"] as $key => $value) {
            $orders_query = "INSERT INTO orders(items_id, receipts_id, quantity) VALUES('$value[item_id]', $current_receipts_id, $value[quantity])";
            $run = mysqli_query($connection, $orders_query);
        }

        unset($_SESSION["receipts"]);
        header("Location: ../dashboard_receipts.php");
    }

?>