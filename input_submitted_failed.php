<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/head.inc")?>
</head>
<body>
    <?php include_once("inc/header.inc")?>

    <section>
        <div class="content">
            <h2 class="message-prompt">Error: Form has not been submitted!</h2>
        </div>

    </section>
</body>
</html>

<?php 
    header("refresh:2;url=dashboard_items.php");
?>

