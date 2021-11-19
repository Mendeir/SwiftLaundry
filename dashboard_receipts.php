<?php include_once("db/db_SwiftLaundry_connection_script.php"); ?>

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
                <div class="receipt-structure">
                    <div class="item-container">
                        <?php
                            $sql_command = "SELECT item_name, price, image_path FROM items";
                            $result = $connection->query($sql_command);

                            if ($result-> num_rows > 0) {
                                while($row = $result-> fetch_assoc()) {
                                    echo '<div class="card">';
                                        echo '<div class="product-name">'.$row["item_name"]."</div>";
                                        echo ' <div class="image"><img src="'.$row["image_path"].'" alt="Item"></div>';
                                        echo '<div class="price">'.$row["price"]."</div>";
                                        ?>
                                        <input type="number" name="quantity" min="1" max="999">
                                        <input type="submit" name="add-to-receipt" id="add-to-receipt" value="Add to Receipt">
                                    <?php
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="receipt-orders">
                <p>
                    dasdsadas
                </p>
            </div>
        </div>
    </section>
    
</body>
</html>