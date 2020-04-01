<?php

	$xml = "<student>
				<name>Alamin</name>
				<id>12</id>
				<dept>CS</dept>
			</student>";
	//$obj = simplexml_load_string($xml); 
	$obj = simplexml_load_file('abc.xml');
	echo $obj->name;
?>