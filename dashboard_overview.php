<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include_once("inc/head.inc") ?>
	<title>Overview</title>

	<link rel="stylesheet" href="css/dashboard_overview_style.css" />

</head>

<body>
	<?php include_once("inc/header.inc")  ?>

	<section class="row1">
		<h2>Items</h2>
		<p>Recents</p>
		<div class="container">
			<div class="col">
				<p>items</p>
			</div>
			<div class="col">
				<p>items</p>
			</div>
			<div class="col">
				<p>items</p>
			</div>
			<div class="col">
				<p>items</p>
			</div>
			<div class="col">
				<p>items</p>
			</div>
		</div>

	</section>

	<section class="row1">
		<h2>Receipts</h2>
		<p>Recents</p>
		<div class="container">
			<div class="col">
				<p>Receipt</p>
			</div>
			<div class="col">
				<p>Receipt</p>
			</div>
			<div class="col">
				<p>Receipt</p>
			</div>
			<div class="col">
				<p>Receipt</p>
			</div>
			<div class="col">
				<p>Receipt</p>
			</div>
		</div>
	</section>

	<section class="row1">
		<h2>Tickets</h2>
		<p>Recents</p>
		<div class="container">
			<div class="col">
				<p>Ticket</p>
			</div>
			<div class="col">
				<p>Ticket</p>
			</div>
			<div class="col">
				<p>Ticket</p>
			</div>
			<div class="col">
				<p>Ticket</p>
			</div>
			<div class="col">
				<p>Ticket</p>
			</div>
		</div>
	</section>

</body>
</html>


<?php
	/*
	include_once("db/db_SwiftLaundry_connection_script.php");
	if ($connection->connect_error) {
		die("Connection failed: ".$connection->connect_error);
	}

	$sql_command = "SELECT item_name, price, image_path FROM items";
	$result = $connection->query($sql_command);
	*/
?>
 
