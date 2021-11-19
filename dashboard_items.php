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
                    <h3>ITEMS</h3>
                </div>
                <div class="add-item">
                    <a href="add_item.php" class="add-item-button">Add Item +</a>
                </div>

            </div>
            
            <div class="content-items">
                <div class="item-container">
                    <?php 
                        include_once("db/db_SwiftLaundry_connection_script.php");
                        
                        $sql_command = "SELECT item_name, price, image_path FROM items";
                        $result = $connection->query($sql_command);

                        if ($result-> num_rows > 0) {
                            while($row = $result-> fetch_assoc()) {
                                echo '<div class="card">';
                                    echo '<div class="product-name">'.$row["item_name"]."</div>";
                                    echo ' <div class="image"><img src="'.$row["image_path"].'" alt="Item"></div>';
                                    echo '<div class="price">'.$row["price"]."</div>";
                                echo "</div>";
                            }
                        }
                    ?>
                    <!--div class="card">
                        <div class="product-name">Test 1</div>
                        
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div>

                    <div class="card">
                        <div class="product-name">Test 1</div>
                        <div class="image"><img src="img/items/test.jpg" alt="Item"></div>
                        <div class="price">Php 1000</div>
                    </div-->
                </div>
            </div>

        </div>
    </section>
</body>
</html>