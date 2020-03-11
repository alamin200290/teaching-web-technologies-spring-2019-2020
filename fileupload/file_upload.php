<?php
	
	if(isset($_POST['submit'])){

		//echo $_FILES['mypic']['name']."<br>";
		//echo $_FILES['mypic']['size'];

		$filename = $_FILES['mypic']['name'];
		$dest = "upload/"."abc.png";
		$src = $_FILES['mypic']['tmp_name'];

		if(move_uploaded_file($src, $dest)){
			echo " File uploaded at :".$dest;
		}else{
			echo "Error";
		}



	}else{
		echo "invalid";		
	}

?>