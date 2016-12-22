<?php
	include("header.php");
	include("ini.php");
	
				//echo "<pre>";
				
				$sql_2 = "select * from p_info";
				$rec = mysql_query($sql_2);
				
				$p_ary = array();
				$nm_ary = array();
				$cont_ary = array();
				$dat_ary = array();
				$loc_ary = array();
				
				while($row = mysql_fetch_array($rec)){
					$pid = $row['pid'];
					$name = $row['name'];
					$contact = $row['contact'];
					$time = $row['time'];
					$loc = $row['loc'];
					$dat = $row['dat'];
					
					$p_ary[$pid] = $pid;
					$nm_ary[$pid] = $name;
					$cont_ary[$pid] = $contact;
					$dat_ary[$pid] = $dat;
					$loc_ary[$pid] = $loc;
				}
			
			//var_dump($p_ary); 	

	
	if(isset($_POST['sub'])){
		$name = $_POST['pid'];
		//echo "<pre>";
		//var_dump($name);
		
		if($name != ''){
				foreach($name as $key=>$value){
					//$sql = "insert into p_present set pid = '$p_ary[$key]', name = '$nm_ary[$key]', contact ='$cont_ary[$key]', dat = '$dat_ary[$key]', loc = '$loc_ary[$key]'";
					$sql = "update p_info set present='Y' where pid='$p_ary[$key]' and dat = '$dat_ary[$key]'";
					//echo $sql;
					mysql_query($sql);
				}
		}
		
		if(mysql_affected_rows() == 1){
			echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '5' color = 'green'>Data Loading Successfully</font></td></tr></table>";
		}
		else{
			echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '5' color = 'red'>Data Loading Failed</font></td></tr></table>";
		}
	}
	
	
	$dat = date("Y-m-d");
	//echo $dat;
	echo "<table><tr><td height = '5'></td></tr></table>";
	
	echo "
	<form action = '$_SERVER[SCRIPT_NAME]' method = 'post'>
	<table align = 'center' width = '600'><tr><td style = 'text-align:right; font-family:tahoma; font-size:13px;'>"; echo $datt = format_date(); echo "</td></tr></table>
	<table border = '0' align = 'center' width = '600' cellspacing = '1' style = 'background:#006666; color:black; font-family:tahoma'>";
	echo "<tr>
			<td colspan='6' align='center' bgcolor = 'white'><input type = 'submit' name = 'sub' value = 'Present'/></td>
		</tr>";
	echo "
	<tr style = 'text-align:center; color:black; font-size:14px;'>
		<td bgcolor = 'white'>Serial No</td>
		<td bgcolor = 'white'>Time Slot</td>
		<td bgcolor = 'white'>Patient ID</td>
		<td bgcolor = 'white'>Name</td>
		<td bgcolor = 'white'>Contact</td>
		<td bgcolor = 'white'>Status</td>
	</tr>";
	$sql = "select * from p_info where dat = '$dat'";
	$rec = mysql_query($sql);
	$i = 0;
	
	while($row = mysql_fetch_array($rec)){
		$i++;
		$pid = $row['pid'];
		$name = $row['name'];
		$contact = $row['contact'];
		$present = $row['present'];
		$time = $row['time'];
		$time2 = $row['time2'];
		
		//$time_ary = explode();
		
		@$time = date("h:i A",strtotime($date." ".$time));
		@$time2 = date("h:i A",strtotime($date." ".$time2));

		
		//$present_text = $present=='N' ? 'Absent' : 'Present';
		$checkbox = "";
		if($present=='N') {
			$checkbox = "<input type = 'checkbox' name = 'pid[$pid]' value = '$name'/>";
			$present_text = "<font color = 'red'>Absent</font>";
		} else {
			$present_text = "<font color = 'green'>Present</font>";
		}
		echo "<tr style = 'font-size:13px;'>
			<td style = 'text-align:center; font-family:courier new; background-color:white'>$i</td>
			<td style = 'text-align:center;' bgcolor = 'white'>$time - $time2</td>
			<td style = 'text-align:center;' bgcolor = 'white'>$pid</td>
			<td bgcolor = 'white' style = 'text-align:left'>&nbsp;&nbsp;$checkbox$name</td>
			<td bgcolor = 'white' style = 'text-align:center'>$contact</td>
			<td style = 'text-align:center;' bgcolor = 'white'>$present_text</td>
		</tr>";
	}
	echo "<tr>
			<td colspan='6' align='center' bgcolor = 'white'><input type = 'submit' name = 'sub' value = 'Present'/></td>
		</tr>";
	echo "</table>";
	echo "</form>";


//how to submit multipale array	
include("footer.php");
	function format_date(){
		
		$mnth_ary = array('01'=>'Jan', '02'=>'Feb', '03'=>'Mar', '04'=>'Apr', '05'=>'May', '06'=>'Jun', '07'=>'Jul', '08'=>'Aug', '09'=>'Sep', '10'=>'Oct', '11'=>'Nov', '12'=>'Dec');
		
		$dat = date("Y-m-d");
		
		$time = date("h:i A");
		
		$dat_ary = explode("-",$dat);
		//var_dump($dat_ary);
		$dd = $dat_ary['2'];
		$mm = $dat_ary['1'];
		$yy = $dat_ary['0'];
		
		//return $dd."/".$mnth_ary[$mm]."/".$yy;
		return $mnth_ary[$mm]." ".$dd. ", ".$yy." | ".$time;
	}
?>
