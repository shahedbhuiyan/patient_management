<?php
	if(!session_id())
		session_start();
		
	include("ini.php");
	$seq 	= $_SESSION['seq'];
	$id		= $_GET['id'];
	$sdate	= $_GET['sdate'];
	$edate	= $_GET['edate'];
	
	$fl_name = $id;
	
	$file_name = $fl_name.".csv";
	
	$fp = fopen($file_name, "w");
	
	$sql1 = "select * from assis_doctor where pid = '$id'";
	$record = mysql_query($sql1);
	if($ln = mysql_fetch_array($record)){
		$id		= $ln['pid'];
		$age	= $ln['age'];
		$sex	= $ln['sex'];
		if($sex == 'M') $sex = "Male";
		if($sex == 'F') $sex = "Female";
	}
	
	$sql2 = "select * from assis_doctor2 where pid = '$id'";
	$record2 = mysql_query($sql2);
	if($ln1 = mysql_fetch_array($record2)){
		$name	= $ln1['pname'];
	}
	
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	
	fwrite($fp,",,Patient ID,,$id,,,,,,,Name,,$name,,,\n");
	fwrite($fp,",,Age,,$age,,,,,,,Sex,,$sex,,,\n");
	
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	//fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	
	
	$sql = "SELECT * FROM test_report WHERE test_id IN($seq) AND pid = '$id' AND rpt_date>='$sdate' AND rpt_date<='$edate'";
	$rec = mysql_query($sql);
	
	//echo "<table align = 'center' width = '500' border = '1'>";
	
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	fwrite($fp,",,Report Date,,,Test Name,,,,,,,Test Value\n");
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	
	while($ln = mysql_fetch_array($rec)){
			$id 			= $ln['pid'];
			$date 			= $ln['rpt_date'];
			
			$invst_name 	= inVstName($ln['test_id']);
			$test_value		= $ln['test_value'];
			
			fwrite($fp,",,$date,,,$invst_name,,,,,,,$test_value,\n");
			fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");	
	}
	
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
	
	fclose($fp);
	
	
	header("Content-Type:text/plain; file=$file_name");
	header("Content-Disposition:attachment; filename=\"$file_name\"");
	readfile($file_name);
	//echo "</table>";

	
function inVstName($invst_id){
	$sql = "select * from investigation_list where invst_id = '$invst_id'";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$invst_name = $row['investigation'];
	}
	return $invst_name;
}

	
?>