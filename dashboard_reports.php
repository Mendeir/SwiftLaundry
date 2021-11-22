<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include_once("inc/head.inc") ?>
	<title>Reports</title>

	<link rel="stylesheet" href="css/dashboard_reports_style.css" />

</head>

<body>
	<?php 
	include_once("inc/header.inc");
	include_once("db/db_SwiftLaundry_connection_script.php");

	// $sql_users = "SELECT * FROM Users";
	// $mysqliStatus_users = $connection->query($sql_users);
	// $rows_count_value_users = mysqli_num_rows($mysqliStatus_users);

	$sql_items = "SELECT * FROM items";
	$mysqliStatus_items = $connection->query($sql_items);
	$rows_count_value_items = mysqli_num_rows($mysqliStatus_items);

	$sql_receipts = "SELECT * FROM receipts";
	$mysqliStatus_receipts = $connection->query($sql_receipts);
	$rows_count_value_receipts = mysqli_num_rows($mysqliStatus_receipts);    

	$ticket_file = "tickets.txt";
	$all_lines = file($ticket_file);
	$number_of_lines= count($all_lines);

$connection->close();	

	?>
	<section>
		<div class="container">
			<div class="box1">
				<h2>Total Receipts</h2>
				<h1><?php echo $rows_count_value_receipts; ?></h1>
			</div>
			<div class="box2">
				<h2>Total Items</h2>
				<h1><?php echo $rows_count_value_items; ?></h1>
			</div>
			<div class="box3">
				<h2>Total Tickets</h2>
		 		<h1><?php echo $number_of_lines ?></h1>;
			</div>
			<div class="box4">
				<h2>Total Customer</h2>
				<h1><?php echo $rows_count_value_receipts; ?></h1>
			</div>
		</div>
		<?php include_once("graphs/graphs.php") ?>
	</section>


	
</body>
</html>