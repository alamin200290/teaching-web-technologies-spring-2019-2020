<?php
	
	//require_once('db.php');

	$search = $_GET['key'];

	$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	$sql = "select * from users where username like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	//echo $sql;

	if($count > 0){

		$data = "<table border=1>
				<tr>
					<td>ID</td>
					<td>USERNAME</td>
					<td>PASSWORD</td>
					<td>Email</td>
					<td>TYPE</td>
				</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<td>{$row['id']}</td>
					<td>{$row['username']}</td>
					<td>{$row['password']}</td>
					<td>{$row['email']}</td>
					<td>{$row['type']}</td>
			</tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>