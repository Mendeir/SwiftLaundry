

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pay Ticket</title>
	<style>
		.confirm{
			
            padding: 10px;
            background: #0077B6;
            text-decoration: none;
            margin: 10px;
            border-radius: 2px;
            font-size: 15px;
            font-weight: 600;
            color: #fff;
		}
	</style>
	<?php include_once("inc/head.inc") ?>
</head>
<body>
	<?php include_once("inc/header.inc")  ?>
	<center>
	<section>
		
	
		<h1>Pay Ticket</h1>
		
		<form action="rewrite_file.php" class="add-item-form" method="POST">


            <label for="price"> Receipt ID: </label>
            <input type="number" id="price" name="receipt-id" min="0.00" max="10000.00" required>

            <input type="submit" id="add-item-button" name="submit" value="Paid">

        </form>
	</section>
	</center>
	
</body>
</html>