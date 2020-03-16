<?php

	$host = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	$database = "webtech";

	function getConnection(){
		$con = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['database']);
		return $con;
	}

?>