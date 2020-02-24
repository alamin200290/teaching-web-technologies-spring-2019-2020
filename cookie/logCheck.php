<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$password =  $_REQUEST['password'];
		
		if(empty(trim($uname)) || empty(trim($password))){
			echo "Null submission found!";
		}else{

			$file = fopen('user.txt', 'r');
			$user = fread($file, filesize('user.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $uname && trim($data[1]) == $password){
				//$_SESSION['uname'] = $uname;
				//$_SESSION['pass'] = $password;
				setcookie('username', $uname, time()+3600, '/');

				header("location: home.php");
			}else{
				echo "invalid uname/password";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: login.php");
	}
?>