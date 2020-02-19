<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
		<h1>Welcome home! <?= $_SESSION['uname']?></h1>
		<a href="logout.php">Logout</a>
</body>
</html>
