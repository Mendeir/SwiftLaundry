<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href= "css/register_style.css">
    <title>Registration Form</title>
</head>
<body>
   <div class = "container">
    <div class = "title"> Registration </div>
   <form action ="" method = "POST" class = "details-form">
    <div class = "user-details">
        <div class = "input-box">
        <span class = "details">
            Username 
        </span> 
        <input type = "text" placeholder ="Enter Your Username" id = "username" name = "username" required>
        </div>

         <div class = "input-box">
        <span class = "details">
            Contact Number
        </span> 
        <input type = "text" placeholder ="Enter Your Number" id = "number" name = "number" required>
        </div>

        <div class = "input-box">
        <span class = "details">
            Password 
        </span> 
        <input type = "password" placeholder ="Enter your password" id = "password" name = "password" required>
        </div>

         <div class = "input-box">
        <span class = "details">
            Confirm Password 
        </span> 
        <input type = "password" placeholder ="Re-enter Your password" id = "repass" name = "repass" required>
        </div>
    </div>
    <div class="button">
        <input type = "submit" id = "submit-button" name = "Register" value = "Register">
        <br><br>
        <p class="login"><a href="index.php">Back</a></p>
    </div>
    </form>
    <article>
        <?php 
           $connection = mysqli_connect("localhost", "root", "", "SwiftLaundry");
             if (isset($_POST['Register'])) {
              $username = $_POST['username'];
              $password = $_POST['password'];
              $confirm_pass = $_POST['repass'];
              $number = $_POST['number'];

              $sql_user = "SELECT * FROM Users WHERE username='$username'";
              $res_u = mysqli_query($connection, $sql_user);
                
              if ($password != $confirm_pass){
                die("<p>Password and Confirm password is not the same</p>");   
               }
              else if(mysqli_num_rows($res_u) > 0){
                die("<p>Sorry... username already taken</p>");   
              }else{
                echo "<h2> Registration Complete </h2>";
                $query = "INSERT INTO Users(username, password, contact) VALUES ('$username','$password','$number')";
                $results = mysqli_query($connection, $query);
        ?>
    </article>
    
    <?php     
    }
}
    ?>
</body>
</html>