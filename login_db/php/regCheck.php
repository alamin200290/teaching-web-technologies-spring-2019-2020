<?php


	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/

		$sql = "insert into users values('','{$username}','{$password}','{$email}', '{$type}')";
		if(mysqli_query($con, $sql)){
			echo "Registration done!";
		}else{
			echo "Error";
		}
	}
	


