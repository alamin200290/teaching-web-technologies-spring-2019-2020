<?php

	//echo $_GET['a'];

//print_r($_GET);

/*	$a = 10;
	$b = 6;
	function sum(){
		global $a;
		global $b;

		return $a+$b;
		//return $GLOBALS['a']+$GLOBALS['b'];
	}*/

	//echo sum();


/*
	$xyz = "value from PHP";

	if($a === $b){
		echo "true";
	}else{
		echo "false";
	}*/
/*	define("GREETING", "Welcome to W3Schools.com!");
	echo GREETING;*/

	//phpinfo();

	//var_dump($a);
	//$val = print($a);
	//echo "<br>". $val;

	//$abc = [4];
	//$xyz = array(4);
	//$student = ['name'=>'alamin', 'id'=> '121111-11'];
	//echo $abc[0];

/*	$students = [ 
					['alamin', 'webtech', 3.6], 
					['Xyz', 'Data Structure', 3.0], 
					['abc', 'atp-3', 2.1], 
					['pgr', 'ICS', 1.5] 
				];

*/
/*	$students = [ 
					's1'=> ['name'=>'alamin', 'course'=> 'webtech', 'cgpa'=>3.6], 
					's2'=> ['name'=>'Xyz', 'course'=> 'Data Structure', 'cgpa'=>3.0], 
					's3'=> ['name'=>'abc', 'course'=> 'atp-3', 'cgpa'=>2.1], 
					's4'=> ['name'=>'pgr', 'course'=> 'ICS', 'cgpa'=>1.5] 
				];*/
	//echo $students['s4']['course'];


/*	function sum($a=0, $b=0){
		return $a+$b;
	}

	for($i=0; $i<5;){
		 $i++;
		//header('content-type: text/plain');
		echo $i.". webtech"."<br>";
	}*/

/*	$data = "<table border='1'>
				<tr>
					<td>ID</td> 
					<td>Name</td> 
					<td>CGPA</td>
				</tr>";

	foreach ($student as $s) {
		$data .= "<tr>
				<td>".$s['id']."</td>
				<td>".$s['name']."</td>
				<td>".$s['cgpa']."</td>
			</tr>";
	}
	$data .= "</table>";
	echo $data;*/
?>



<?php

		$student = 	[
				's1'=>[ 'id'=>'10-11-1', 'name'=>'ABC',  'cgpa'=>3.7 ],
				's2'=>[ 'id'=>'222345', 'name'=>'XYZ',  'cgpa'=>3.4 ],
				's3'=>[ 'id'=>'333567', 'name'=>'CCC',  'cgpa'=>3.6 ]
				];
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>CGPA</td>
			</tr>

			<?php  foreach ($student as $s) { ?>
					
			<tr>
				<td><?= $s['id'] ?></td>
				<td><?= $s['name'] ?></td>
				<td><?= $s['cgpa']?></td>
			</tr>

			<?php	} ?>
			
		</table>
</body>
</html>

