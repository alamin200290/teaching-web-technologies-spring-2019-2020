<?php
	session_start();
	//unset($_SESSION['uname']);
	//session_destroy();
	
	setcookie('username', '', time()-10, '/');
	header("location: login.php");

?>