
<?php  

	$temp = $_POST['receipt-id'];
	
?>


<!DOCTYPE html>
<html>
<head>
	<style>
		.paid{
			
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
	<title>Paid</title>
	<?php include_once("inc/head.inc") ?>
</head>
<body>
	<?php include_once("inc/header.inc")  ?>
	<section>
		<center>

		<h1>Successfully removed from pending</h1>
		<a href="dashboard_tickets.php" class="paid">Done</a>
		<?php 
			
			echo $temp;
			$ticket_file = fopen("tickets.txt","r+");
			$new_ticket = fopen("new_ticket.txt","w");
			if ($ticket_file) {
    			while (($line = fgets($ticket_file)) !== false) {

        			$line_arr = explode (", ", $line);
        			if($temp == (int)$line_arr[0]){
        				continue;
        			}else{
        				fwrite($new_ticket, $line_arr[0].', '.$line_arr[1].', '.$line_arr[2].', '.$line_arr[3]);
        			}
        			
    			}
    			fclose($ticket_file);
    			fclose($new_ticket);
			} else {
    		// error opening the file.
			}
			
			$ticket_file = fopen("tickets.txt","w");
			$new_ticket = fopen("new_ticket.txt","r");
			if ($ticket_file) {
    			while (($line = fgets($new_ticket)) !== false) {

        			$line_arr = explode (", ", $line);
        			
        				fwrite($ticket_file, $line_arr[0].', '.$line_arr[1].', '.$line_arr[2].', '.$line_arr[3]);
        			
        			
    			}
    			fclose($ticket_file);
    			fclose($new_ticket);
			} else {
    		// error opening the file.
			}
			
    		
		?>
		</center>
	</section>
</body>
</html>