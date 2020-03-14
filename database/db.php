<?php

	//mysql_connect();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	
	$sql = "select * from users";
	$result = mysqli_query($con, $sql);

	$data = [];


	echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>Email</td>
				<td>TYPE</td>
			</tr>";

	while($row = mysqli_fetch_assoc($result)){
		//echo "Name: ".$row['username']." Id: ".$row['id']."<br>"". .";
		
		echo "<tr>
				<td>{$row['id']}</td>
				<td>{$row['username']}</td>
				<td>{$row['password']}</td>
				<td>{$row['email']}</td>
				<td>{$row['type']}</td>
		</tr>";
	}

	echo "</table>";
	mysqli_close($con);
?>