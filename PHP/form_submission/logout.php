<?php
	session_start();
	//unset($_SESSION['uname']);
	session_destroy();
	
	header("location: login.php");

?>