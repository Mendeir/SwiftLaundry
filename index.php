<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title> Swift Laundry </title>

	<link rel="stylesheet" href="css/StyleLoginPage.css" />
	
</head>

<body>

	<center>
		<h1> Swift Laundry</h1>
		
		<form action="session.php" method="post">
			<h2>Log-in</h2>
			<div class='first'>
				<label for="username"> <b> Username:</b> </label>
				<input type="text" placeholder="Enter your username" name="uname" required>
				<br>
				<label for="pass"> <b>Password:</b> </label>
				<input type="password" placeholder="Enter your password" name="pword" required>
				<br>
				<button type="submit" name ="submit"> Login </button>
				<p class="register"><a href="register_form.php">Register</a></p>
			</div>
		</form>

	</center>

</body>
</html>