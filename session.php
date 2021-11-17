<?php

session_start();
include_once("../db/db_SwiftLaundry_connection_script.php");

if(isset($_POST['submit'])){

	$username = $_POST["uname"];
	$password = $_POST["pword"];

	$sql = mysql_query("SELECT username, password FROM Users WHERE username = '".$username."' AND password = '".$password."'");

    if(mysql_num_rows($sql) > 0 )
    { 
        $_SESSION["username"] = $username; 
        header("dasboard_overview.php"); 
    }
}
?>