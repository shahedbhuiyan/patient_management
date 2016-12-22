<?php
	$host = "localhost";
	$user = "root";
	$pass = "blackmagic";
	$db = "masamad";

	$conn = mysql_connect($host, $user, $pass) or die("Connection Failed!");
	mysql_select_db($db, $conn) or die("Database couldn't select!");

?>