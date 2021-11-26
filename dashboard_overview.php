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
	<?php include_once("inc/head.inc") ?>
	<title>Overview</title>

	<link rel="stylesheet" href="css/dashboard_overview_style.css" />

</head>

<body>
	<?php include_once("inc/header.inc")  ?>
	
	<section>
        <div class="content">
            <h2 style="color: #0077B6;" >Items</h2>
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
                                    echo '<div class="price"><span>₱</span>'.$row["price"]."</div>";
                                echo "</div>";
                            }
                        }
                    ?>
                    
                </div>
            </div>

        </div>
    </section>

	<section class="row1">
		<h2 style="color: #0077B6;" >Tickets</h2>
		<div class="container-bg">

			<p style="color: #0077B6;" >Recents</p>	
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
						  		echo '<p style="color: #0077B6;" >Total: '.$line_arr[3].'</p>';

							echo '</div>';

							$ticket_number += 1;
	    				}

	    				fclose($ticket_file);
					} else {
	    				// error opening the file.
					}

				
				?>
				
		</div>
	</section>

</body>
</html>



 
