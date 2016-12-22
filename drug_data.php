<?php
include("ini.php");
/*
$data = "[";
$data .= "{\"id\":\"1\",\"txt\":\"aaaaaaa\"},";
$data .= "{\"id\":\"2\",\"txt\":\"bbbbbbb\"},";
$data .= "{\"id\":\"3\",\"txt\":\"ccccccc\"},";
$data .= "{\"id\":\"3\",\"txt\":\"aabcccc\"},";
$data .= "{\"id\":\"3\",\"txt\":\"aacccc\"}";
$data .= "]";

echo $data;
*/

$action = isset($_POST["action"]) ? $_POST["action"] : "";


if($action=="drug") {
	$sql = "select * from drug_list";
	$rec = mysql_query($sql);
	$drg_ary = array();
	
	$data = "[";
	while($row = mysql_fetch_array($rec)){
		$id = $row['id'];
		$drug = $row['brand'];
		$mg = $row['mg'];
		
		$drug = $drug." ".$mg;;
		
		$data .= "{\"id\":\"$id\",\"txt\":\"$drug\"},";
	}
	
	$data = trim($data,",");
	$data .= "]";
	
	echo $data;
}
else if($action=="meal") {
	$sql = "select * from meal_list";
	$rec = mysql_query($sql);
	$data = "[";
	
	while($row = mysql_fetch_array($rec)){
		$id		= $row['id'];
		$meal	= $row['meal'];
		
		$data .= "{\"id\":\"$id\",\"txt\":\"$meal\"},";
	}
	$data = trim($data,",");
	$data .= "]";
	
	echo $data;
}
else if($action=="symp") {
	$data = "[";
	$data .= "{\"id\":\"1\",\"txt\":\"aaa Meal\"},";
	$data .= "{\"id\":\"2\",\"txt\":\"bbb Meal\"}";
	$data .= "]";
	
	echo $data;
}

else if($action == "cat"){
	$sql = "select * from drug_cata";
	$rec = mysql_query($sql);
	$data = "[";
	while($row = mysql_fetch_array($rec)){
		$id 			= $row['id'];
		$drug_cata 		= $row['cata_name'];
		
		$data .= "{\"id\":\"$id\",\"txt\":\"$drug_cata\"},";
	}
	
	$data = trim($data,",");
	$data .="]";
	
	echo $data;
}

else if($action == ""){
	$sql = "select * from day_gap";
	$data = "[";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$id			= $row['id'];
		$day_gap	= $row['day_gap'];
		
		$data .= "{\"id\":\"$id\",\"txt\":\"$day_gap\"},";
	}
	
	$data = trim($data,",");
	$data .= "]";
	
	echo $data;
}

else if($action == "group"){
	$sql = "select * from group_list";
	$rec = mysql_query($sql);
	$data = "[";
	while($row = mysql_fetch_array($rec)){
		$id			= $row['id'];
		$g_name		= $row['g_name'];
		
		$data .= "{\"id\":\"$id\",\"txt\":\"$g_name\"},";
	}
	
	$data = trim($data,",");
	$data .= "]";
	
	echo $data;
}

else if($action == "gap"){
	$sql = "select * from day_gap";
	$rec = mysql_query($sql);
	$data = "[";
	while($row = mysql_fetch_array($rec)){
		$id			= $row['id'];
		$day_gap 	= $row['day_gap'];
		
		$data .= "{\"id\":\"$id\",\"txt\":\"$day_gap\"},";
	}
	
	$data = trim($data,",");
	$data .= "]";
	
	echo $data;
}

else if($action == "duration"){
	$sql = "select * from duration";
	$data = "[";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$id 		= $row['id'];
		$duration	= $row['duration'];
		
		$data .= "{\"id\":\"$id\",\"txt\":\"$duration\"},";
	}
	
	$data = trim($data,",");
	$data .= "]";
	
	echo $data;
}
?>