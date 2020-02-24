<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>
		Login Page  
	</h1>
	<form method="POST" action="logCheck.php">
		Username: <input type="text" name="uname" value=""> <br>
		Password: <input type="password" name="password" value=""><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>