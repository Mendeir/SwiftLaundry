<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href= "register_style.css">
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
        <input type = "text" placeholder ="Enter Your Fullname" id = "fullname" name = "fullname">
        </div>

         <div class = "input-box">
        <span class = "details">
            Birthday 
        </span> 
        <input type = "text" placeholder ="Enter Your Birthday" id = "birthday" name = "birthday">
        </div>

        <div class = "input-box">
        <span class = "details">
            Gender 
        </span> 
        <input type = "text" placeholder ="Male/Female" id = "gender" name = "gender">
        </div>

         <div class = "input-box">
        <span class = "details">
            Age 
        </span> 
        <input type = "text" placeholder ="Enter Your Age" id = "age" name = "age">
        </div>

        <div class = "input-box">
        <span class = "details">
            Email 
        </span> 
        <input type = "text" placeholder ="Enter Your Email" id = "email" name = "email">
        <input type = "text" placeholder ="Enter Your Username" id = "username" name = "username">
        </div>

         <div class = "input-box">

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