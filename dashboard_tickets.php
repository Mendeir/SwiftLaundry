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
	<title >Tickets</title>

	<?php include_once("inc/head.inc") ?>
	<link rel="stylesheet" href="css/dashboard_tickets_style.css" />
</head>
<body>
	<?php include_once("inc/header.inc")  ?>
	<section>
		<div class="header">
			<div class="head">
				<h2 style="color: #0077B6;" >Tickets</h2>
			</div>
			<div class="add">
				<a href="add_ticket.php" class="paid">Add Ticket</a>
			</div>
			<div class="add">
				<a href="remove_ticket.php" class="paid">Pay Ticket</a>
			</div>
		</div>

		<div class="container">
			<h3 style="color: #0077B6;">Pending</h3>
			
			<div class="container-pending">
				<?php
				$ticket_file = fopen("tickets.txt","r");
				$ticket_number = 1;
				if ($ticket_file) {
    				while (($line = fgets($ticket_file)) !== false) {
        				$line_arr = explode (", ", $line);
        				
        				echo '<div class="col">';
        					$_SESSION['temp'] = $ticket_number;
							echo '<p style="color: #0077B6;" ><b>'.'Ticket #'.$ticket_number.'</b></p>'; 
					  		echo '<p style="color: #0077B6;" >Receipt ID: '.$line_arr[0].'</p>';
					  		echo '<p style="color: #0077B6;" >Quantity: '.$line_arr[1].'</p>';
					  		echo '<p style="color: #0077B6;" >Date: '.$line_arr[2].'</p>';
					  		echo '<p style="color: #0077B6;" >Total:Php '.$line_arr[3].'</p>';

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

