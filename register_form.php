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
        <input type = "text" placeholder ="Enter Your Username" id = "username" name = "username">
        </div>

         <div class = "input-box">
        <span class = "details">
            Contact Number
        </span> 
        <input type = "text" placeholder ="Enter Your Number" id = "number" name = "number">
        </div>

        <div class = "input-box">
        <span class = "details">
            Password 
        </span> 
        <input type = "text" placeholder ="Enter your password" id = "password" name = "password">
        </div>

         <div class = "input-box">
        <span class = "details">
            Confirm Password 
        </span> 
        <input type = "text" placeholder ="Re-enter Your password" id = "repassword" name = "repasssword">
        </div>
    </div>
    <div class="button">
        <input type = "submit" id = "submit-button" name = "Register" value = "Register">
    </div>
    </form>
    <article>
        <?php 
           $connection = mysqli_connect("localhost", "root", "", "Registered");
             if (isset($_POST['Register'])) {
              $username = $_POST['username'];
              $password = $_POST['password'];
              $confirm_pass = $_POST['repassword'];
              $number = $_POST['number'];

              $sql_user = "SELECT * FROM Users WHERE username='$username'";
              $res_u = mysqli_query($connection, $sql_user);

              if (empty($username) || empty($password) || empty($confirm_pass) || empty($number))
               {
                 die("<p>Please fill all fields!</p>");
               }

              else if ($password !== $confirm_pass){
                die("<p>Password and Confirm password is not the same</p>");   
               }
              else if (mysqli_num_rows($res_u) > 0) {
                die("<p>Sorry... username already taken</p>");   
              }else{
                echo "<h2> Registration Complete </h2>";
                $query = "INSERT INTO perosons_information VALUES ('$username','$password','$number')";
                $results = mysqli_query($conn, $query);
        ?>
            <p>Username: <?php echo $_POST['username']; ?></p>
            <p>Password: <?php echo $_POST['repassword']; ?></p>
            <p>Contact Number: <?php echo $_POST['number']; ?></p>
    </article>
    
    <?php     
    }
}

    ?>
</body>
</html>