<?php
	include("ini.php");
	$id = $_GET['id'];
	$name = $_GET['name'];
	
	$fl_name = $name."_".$id;
	
	$file_name = $fl_name.".csv";

	$fp = fopen($file_name, "w");


	fwrite($fp,"Patient ID,Drug,Dose,Gap,Meal,Duration\n");

	$sql = "SELECT * FROM prescription where patient_id = '$id'";
	$rec = mysql_query($sql);


	while($row = mysql_fetch_array($rec)) {
		$pid = $row['patient_id'];
		$drug = $row['drug'];
		$dose = $row['dose'];
		$gap = $row['gap'];
		$meal = $row['meal'];
		$duration = $row['duration'];
		
		fwrite($fp,",,,GAP,,\n");
		fwrite($fp,",,,,,,,,,,\n");
		fwrite($fp,"$pid,$drug,$dose,$gap,$meal,$duration\n");
		
	}


	fclose($fp);
	
	readfile($file_name);
	header("Content-Type:text/plain; file=$file_name");
	header("Content-Disposition:attachment; filename=\"$file_name\"");
?>