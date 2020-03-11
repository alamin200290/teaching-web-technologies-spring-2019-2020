<?php
	session_start();
	if(isset($_POST['submit'])){

		//echo $_FILES['mypic']['name']."<br>";
		//echo $_FILES['mypic']['size'];

		$filename = $_FILES['mypic']['name'];
		$dest = "upload/".$filename;
		$src = $_FILES['mypic']['tmp_name'];

		if(move_uploaded_file($src, $dest)){
			$_SESSION['pic'] = $filename;
			header('location: home.php');
		}else{
			echo "Error";
		}



	}else{
		echo "invalid";		
	}

?>