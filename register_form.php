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
        </div>

         <div class = "input-box">
        <span class = "details">
            Contact Number 
        </span> 
        <input type = "text" placeholder ="Enter Your Contact Number" id = "number" name = "number">
        </div>

         <div class = "input-box">
        <span class = "details">
            Password 
        </span> 
        <input type = "text" placeholder ="Enter Your Password" id = "password" name = "password">
        </div>

         <div class = "input-box">
        <span class = "details">
            Confirm Password 
        </span> 
        <input type = "text" placeholder ="Re-Enter Your Password" id = "repassword" name = "repassword">
        </div>
    </div>
    <div class="button">
        <input type = "submit" id = "submit-button" name = "Register" value = "Register">
    </div>
    </form>
</body>
</html>