
<!DOCTYPE html>
<html>
<head>

	<style>
		.paid{
			float: left;
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

	<meta charset="utf-8">
	<title>Tickets</title>

	<?php include_once("inc/head.inc") ?>
	<link rel="stylesheet" href="css/dashboard_tickets_style.css" />
</head>
<body>
	<?php include_once("inc/header.inc")  ?>
	<section>
		<div class="header">
			<div class="head">
				<h2>Tickets</h2>
			</div>
			<div class="add">
				<a href="add_ticket.php" class="add-ticket">Add Item +</a>
			</div>
		</div>

		<div class="container">
			<h3>Pending</h3>
			
			<div class="container-pending">
				<?php
				$ticket_file = fopen("tickets.txt","r");
				$ticket_number = 0;
				if ($ticket_file) {
    				while (($line = fgets($ticket_file)) !== false) {
        				$line_arr = explode (", ", $line);
        				
        				echo '<div class="col">';
        					
							echo '<p><b>'.'Ticket #'.$ticket_number.'</b></p>'; 
					  		echo '<p>'.$line_arr[0].'</p>';
					  		echo '<p>'.$line_arr[1].'</p>';
					  		echo '<p>'.$line_arr[2].'</p>';
					  		echo '<p>'.$line_arr[3].'</p>';
					  		echo '<a href="remove_ticket.php" class="paid">Paid</a>';

						echo '</div>';

						$ticket_number += 1;
    				}
    				fclose($ticket_file);
				} else {
    				// error opening the file.
				}

				
				?>


			</div>


		</div>

	</section>
</body>
</html>

