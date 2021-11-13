<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel = "stylesheet" type = "text/css" href="css/dashboard_style.css">
    <title>Swift Laundry</title>
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
                    <a href="#" class="add-item-button">Add Item +</a>
                </div>

            </div>
            
            <div class="content-items">
                <div class="item-container">
                    <?php 
                        include_once("db/db_SwiftLaundry_connection_script.php");
                        
                        if ($connection->connect_error) {
                            die("Connection failed: ".$connection->connect_error);
                        }
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