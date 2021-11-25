<?php  
                	
    $item = $_POST['receipt-id'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    $total = $_POST['total'];
                	
    $ticket_file = fopen("tickets.txt", "a");

    fwrite($ticket_file, $item.', '.$quantity.', '.$date.', '.$total);
    fwrite($ticket_file,"\n");

    fclose($ticket_file);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .done{
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
    <title>Done</title>
    <?php include_once("inc/head.inc") ?>
</head>
<body>
    <?php include_once("inc/header.inc") ?>
    <section>
        <center>
            <h1 style="color: #0077B6;" >Successfully Added</h1>
            <a href="dashboard_tickets.php" class="done">Done</a>
        </center>
    </section>
</body>
</html>