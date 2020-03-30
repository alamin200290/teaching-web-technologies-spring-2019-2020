<?php
	session_start();
	//print_r($_SESSION['user']);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>
		<h1>Welcome Home!</h1>

		<a href="add.html"> Create User</a> | 
		<a href="view_users.php"> View Users</a> | 
		<a href="logout.php"> logout</a> 
		<br>

		Name: <?=$_SESSION['user']['username']?> <br>
		Type: <?=$_SESSION['user']['type']?> <br>
		Email: <?=$_SESSION['user']['email']?>
</body>
</html>