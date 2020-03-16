<?php
	session_start();
	//print_r($_SESSION['user']);

	require_once('../service/functions.php');
	//require('db.php');
	$result = getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
</head>
<body>

		<a href="home.php"> Back</a> | 
		<a href="logout.php"> logout</a> 
		<br>
		
		<table border=1>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>Email</td>
				<td>TYPE</td>
				<td>Action</td>
			</tr>

	<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		
		<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['username']?></td>
			<td><?=$row['password']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['type']?></td>
			<td>
				<a href="edit.php?id=<?=$row['id']?>">Edit</a> |
				<a href="delete.php?id=<?=$row['id']?>">Delete</a> 
			</td>
		</tr>
	<?php } ?>

	</table>
</body>
</html>