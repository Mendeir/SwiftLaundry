<?php

session_start();
include_once("db/db_SwiftLaundry_connection_script.php");

if(isset($_POST['submit'])){
    $username = $_POST["uname"];
    $user_password = $_POST["pword"];

     $query = "SELECT username, password FROM Users WHERE username='$username' AND password='$user_password'";
     $result = mysqli_query($connection, $query);
        
        if(mysqli_fetch_assoc($result)) {     
            $_SESSION['username'] = $username;
            header("Location:dashboard_overview.php"); 
        } 
    }
    else {
            echo "User Login failed!";
            header("Location:../index.php"); 
        }
?>