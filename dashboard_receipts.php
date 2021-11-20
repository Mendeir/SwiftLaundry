<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/head.inc") ?>
</head>
<body>
    <?php include_once("inc/header.inc") ?>

    <section>
        <div class="content">
            <div class="content-header">
                <div class="section-name">
                    <h3>RECEIPTS</h3>
                </div>
                <div class="add-item">
                    <a href="add_receipts.php" class="add-item-button">Add Receipts +</a>
                </div>

            </div>

            <div class="content-items">
                <div class="receipt-container">
                    <?php 
                    
                        include_once("db/db_SwiftLaundry_connection_script.php");
                        
                        $sql_command = "SELECT receipt_id, receipt_date FROM receipts";
                        $result = $connection->query($sql_command);

                        if ($result-> num_rows > 0) {
                            while($row = $result-> fetch_assoc()) {
                                $receipt_id = $row["receipt_id"];
                                $total_price = 0;

                                echo '<div class="card">';
                                    echo '<div class="receipt-id">Receipt No: <span class="receipts-span">'.$row["receipt_id"].'</span></div>';
                                    echo '<div class="receipt-id">Receipt Date: <span class="receipts-span">'.$row["receipt_date"].'</span></div>';
                                    echo '<table class="card-table">';
                                        echo '<tr>';
                                            echo '<th>Item Name</th>';
                                            echo '<th>Price</th>';
                                            echo '<th>Quantity</th>';
                                            echo '<th>Total Price</th>';
                                            
                                        echo '<tr>';
                                        $retrieve_orders =  "SELECT item_name, price, quantity
                                                            FROM orders as o  
                                                            INNER JOIN items as i ON o.items_id = i.item_id 
                                                            INNER JOIN receipts as r ON o.receipts_id = r.receipt_id
                                                            WHERE receipts_id = '$receipt_id'
                                        ";
                                        $orders_result = $connection->query($retrieve_orders);

                                        if ($orders_result-> num_rows > 0) {
                                            while($orders_row = $orders_result->fetch_assoc()) {
                                                echo '<tr>';
                                                    echo '<td>'.$orders_row["item_name"].'</td>';
                                                    echo '<td>₱'.$orders_row["price"].'</td>';
                                                    echo '<td>'.$orders_row["quantity"].'</td>';
                                                    echo '<td>₱'.number_format($orders_row['price'] * $orders_row['quantity'], 2).'</td>';
                                                echo '</tr>';

                                                $total_price = $total_price + $orders_row['price'] * $orders_row['quantity'];
                                            }
                                        }

                                        echo '<tr>';
                                            echo '<td colspan=2></td>';
                                            echo '<td><b>Total Price: </b></td>';
                                            echo '<td>₱'.number_format($total_price, 2).'</td>';
                                        echo '</tr>';

                                    echo '</table>';
                                echo '</div>';
                            }
                                
                        }
                    
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>