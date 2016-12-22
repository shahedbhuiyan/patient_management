<?php
/*	session_start();
	include('../config.php');
*/	
	
	$id = $_GET['id'];	
	if(trim(strlen($id))==0) {
		//echo "Please select Something";
		die();
	}
	
?>