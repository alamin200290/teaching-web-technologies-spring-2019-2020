<?php	
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
		<h1>Welcome home! <?= $_COOKIE['username']?></h1>
		<a href="logout.php">Logout</a>
</body>
</html>
