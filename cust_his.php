<?php
	include("ini.php");
	if(isset($_GET['id'])){
		$pid 	= $_GET['id'];
		$from 	= $_GET['from'];
		$to 	= $_GET['to'];
		$name	= $_GET['name'];
		
	}
		
	$fl_name = $name."_".$id;
	
	$file_name = $fl_name.".csv";
	
	$fp = fopen($file_name, "w");

	
	$sql = "SELECT * FROM prs WHERE pid = '$pid' AND dat>='$from' AND dat<='$to'";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$pid = $row['pid']; 
		$name = $row['pname'];
		$sex = $row['sex'];
			if($sex = 'M') $sex = "Male";
			if($sex == 'F') $sex = "Female";
		$weight = $row['weight'];
		$history = $row['history'];
		$phy_exm = $row['phy_exm'];
		$clinical_ds = $row['clinical_ds'];
		$diagnoscase = $row['diagnoscase'];
		$investigation = $row['investigation'];
		$group = $row['group'];
		$dat = $row['dat'];
		
		fwrite($fp,",,,,,,,,,,,,,\n");
		fwrite($fp,"***********,***********,***********,***********,***********,***********,***********,***********,***********,***********,**********,***********,***********,***********,***********\n");
		fwrite($fp,"***********,***********,***********,***********,***********,***********,***********,***********,***********,***********,**********,***********,***********,***********,***********\n");
		
		//fwrite($fp,"*,*,*,*,*,*,*,*,*,*,*,*,*,*,*\n");
		fwrite($fp,",,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,Date,$dat\n");
		fwrite($fp,",,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,\n");
		fwrite($fp,"Patient_ID,$pid,,,,,,,Name,$name\n");
		fwrite($fp,"Sex,$sex,,,,,,,Weight,$weight\n");
		
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,,\n");

		//fwrite($fp,"History,,,,,Physical_Examination,,,,,Clinical_Diagonnosis,,,,,Diagnoscase_Of,,,,,Investigation\n");
		//fwrite($fp,"$history,,,,,$phy_exm,,,,,$clinical_ds,,,,,$diagnoscase,,,,,$investigation\n");
		
		fwrite($fp,"History,,,,,,,,Clinical_Diagonnosis,,,\n");
		fwrite($fp,"$history,,,,,,,,$clinical_ds,,,\n");
		
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
		
		fwrite($fp,"Physical_Examination,,,,,,,,Known_case_of,,,\n");
		fwrite($fp,"$phy_exm,,,,,,$diagnoscase,,,\n");
		
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
		
		fwrite($fp,"Investigation,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,"$investigation,,,,,,,,,,,,,,,,,\n");
		
		
		
		
		
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,\n");
		//fwrite($fp,"Group\n");
		//fwrite($fp,"$group\n");
		
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,\n");
		
		fwrite($fp,"Drug,,Dose,,Gap,,Meal,,Duration\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,\n");

		doNextWork($pid, $dat, $fp);
		
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,"***********,***********,***********,***********,***********,***********,***********,***********,***********,***********,**********,***********,***********,***********,***********\n");	fwrite($fp,"***********,***********,***********,***********,***********,***********,***********,***********,***********,***********,**********,***********,***********,***********,***********\n");
		
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,,,,\n");
	}
	
function doNextWork($pid, $dat, $fp){
	$sql = "SELECT * FROM prescription WHERE patient_id = '$pid' AND dat = '$dat'";
	$rec = mysql_query($sql);
	
	while($row = mysql_fetch_array($rec)){
		$drug = $row['drug'];
		$dose = $row['dose'];
		$gap = $row['gap'];
		$meal = $row['meal'];
		$duration = $row['duration'];
		$dat = $row['dat'];
			
		fwrite($fp,"$drug,,$dose,,$gap,,$meal,,$duration\n");
		fwrite($fp,",,,,,,,,,,,,,,,,,,,,\n");
	}
}


fclose($fp);

header("Content-Type:text/plain; file=$file_name");
header("Content-Disposition:attachment; filename=\"$file_name\"");
readfile($file_name);
?>