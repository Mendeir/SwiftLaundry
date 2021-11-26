<?php 
	session_start();
	if(!$_SESSION["loggedIn"]) {
		header('Location:index.php');  
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Ticket</title>
	<?php include_once("inc/head.inc") ?>
</head>
<body>
	<?php include_once("inc/header.inc")  ?>
	<section>
		<div class="content">
			<div class="section-name">
				<h2 style="color: #0077B6;" >Add Ticket</h2>
			</div>

            <div class="content-items">

                <form action="write_file.php" class="add-item-form" method="POST">


                	<label for="price" style="color: #0077B6;" > Receipt No: </label>
                    <input type="number" id="price" name="receipt-id" min="0.00" max="10000.00" required>

                    <label for="price" style="color: #0077B6;" > Quantity: </label>
                    <input type="number" id="price" name="quantity" min="0.00" max="10000.00" required>
                    
                    <label for="date" style="color: #0077B6;" > Date: </label>
                    <input type="text" id="date" name="date" required>

                    <label for="image-path" style="color: #0077B6;" > Total (php): </label>
                    <input type="text" id="total" name="total" required>

                    <input type="submit" id="add-item-button" name="submit" value="Add Ticket">

                </form>

                
            </div>
		</div>
	</section>
</body>
</html>