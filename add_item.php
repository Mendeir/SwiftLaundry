<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/head.inc") ?>
</head>
<body>
    <?php include_once("inc/header.inc") ?>    

    <section>
        <div class="content">
            <div class="section-name">
                    <h3>Add Items</h3>
                </div>
                <div class="add-item">
                    <a href="dashboard_items.php" class="add-item-button">Back</a>
                </div>

            <div class="content-items">
                <form action="db/insert_items_script.php" class="add-item-form" method="POST">
                    <label for="item-name"> Item Name: </label>
                    <input type="text" id="item-name" name="item-name" required>

                    <label for="price"> Price (Php): </label>
                    <input type="number" id="price" name="price" min="0.00" max="10000.00" required>

                    <label for="image-path"> Image Path: </label>
                    <input type="file" id="image-path" name="image-path" accept="image/png, image/jpeg" required>

                    <input type="submit" id="add-item-button" name="submit" value="Add Item">
                </form>
            </div>
        </div>


        
    </section>


</body>
</html>