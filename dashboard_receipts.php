<?php 
    session_start();
    #session_unset();
    #session_destroy();
    include_once("db/db_SwiftLaundry_connection_script.php"); 
    
    if (isset($_POST["add-to-receipt"])) {
        if(isset($_SESSION["receipts"])) {
            $receipts_array_id = array_column($_SESSION["receipts"], "item_id");

            if (!in_array($_GET["item_id"], $receipts_array_id)) {
                $receipts_array = array(
                    "item_id" => $_GET["item_id"],
                    "item_name" => $_POST["item-name"],
                    "price" => $_POST["price"],
                    "quantity" => $_POST["quantity"]
                );
    
                $_SESSION["receipts"][] = $receipts_array;
            } 
            

        } else {
            $receipts_array = array(
                "item_id" => $_GET["item_id"],
                "item_name" => $_POST["item-name"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"]
            );

            $_SESSION["receipts"][] = $receipts_array;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/head.inc") ?>
</head>
<body>
    <?php include_once("inc/header.inc")  ?>

    <section>
        <div class="content">
            <div class="receipt-items">
                <div class="item-container">
                    <?php
                        $sql_command = "SELECT * FROM items";
                        $result = $connection->query($sql_command);

                        if ($result-> num_rows > 0) {
                            while($row = $result-> fetch_assoc()) { ?>
                                <form action="dashboard_receipts.php?item_id=<?= $row['item_id']?>" method="POST">
                                <?php
                                
                                    echo '<div class="card">';
                                        echo '<div class="product-name">'.$row["item_name"]."</div>";
                                        echo ' <div class="image"><img src="'.$row["image_path"].'" alt="Item"></div>';
                                        echo '<div class="price"><span>Php </span>'.$row["price"]."</div>";
                                        ?>
                                        <input type="hidden" name="item-name" value="<?= $row["item_name"]?>">
                                        <input type="hidden" name="price" value="<?= $row["price"]?>">
                                        <input type="number" name="quantity" value="1" min="1" max="999" id="receipt-quantity">
                                        <input type="submit" name="add-to-receipt" id="add-to-receipt" value="Add to Receipt">
                                    <?php
                                    echo "</div>";
                                ?>
                                </form>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>

            <div class="receipt-orders">
                <form action="#" method="POST">
                    <?php 

                            $total_price = 0;
                            $receipts_table = "";
                            $receipts_table .= "
                            <table class='receipts-table'>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th>Commands</th>
                                </tr>
                            ";
                            
                            if(!empty($_SESSION["receipts"])) {

                                foreach($_SESSION["receipts"] as $key => $value) {
                                    $receipts_table .= "
                                        <tr>
                                            <td>".$value['item_name']."</td>
                                            <td>".$value['price']."</td>
                                            <td>".$value['quantity']."</td>
                                            <td>"."Php ".number_format($value['price'] * $value['quantity'], 2)."</td>
                                            <td></td>
                                        </tr>

                                    ";

                                    $total_price = $total_price + $value['price'] * $value['quantity'];
                                }

                                $receipts_table .= "
                                    <tr>
                                        <td colspan=2></td>
                                        <td><b>Total Price</b></td>
                                        <td>".number_format($total_price, 2)."</td>
                                        <td>
                                            <input type='submit' name='clear-all' value='Clear Receipts'>
                                        </td>
                                    </tr>
                                
                                ";

                                $receipts_table .= "
                                    <tr>
                                        <td colspan=4></td>
                                        <td>
                                            <input type='submit' name='save-receipt' value='Save Receipt'>
                                        </td>
                                
                                ";

                            }

                            echo $receipts_table;
                    ?>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>

<?php 

if(isset($_POST["submit"])) {
    unset($_SESSION["receipts"]);
}



?>      
