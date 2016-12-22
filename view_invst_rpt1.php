<?php
	include("ini.php");
	
	$id = $_GET['id'];
	$from = $_GET['from'];
	$to = $_GET['to'];
	$status = $_GET['status'];
	if($status != ''){
		$status = $status." AND ";
	}
	
	$sql1 = "select * from invst_view where p_id = '$id'";
	$rec1 = mysql_query($sql1);
	if($row1 = mysql_fetch_array($rec1)){
		$pid = $row1['p_id'];
		$p_name = $row1['name'];
		
		echo "<table align = 'center' width = '700' border = '0' style = 'font-family:tahoma; font-size:13px; color:black; background-color:black' cellspacing = '1'>
			<tr>
				<td width = '100' bgcolor = 'white'>Patient ID</td>
				<td width = '1' bgcolor = 'white'>:</td>
				<td bgcolor = 'white'>$pid</td>
				<td width = '100' bgcolor = 'white'>Patient Name</td>
				<td width = '1' bgcolor = 'white'>:</td>
				<td width = '100' bgcolor = 'white'>$p_name</td>
			</tr>
		</table>";
	}
	echo "<table><tr><td height = '10'></td></tr></table>";
	echo "<table align = 'center' width = '1300' border = '0' cellspacing = '1' style = 'font-family:tahoma; font-size:13px; text-align:center' bgcolor = 'black'>";
		echo "<tr>
			<td bgcolor = 'white'>Report Date</td>
			<td bgcolor = 'white'>Automated Blood Culture</td>
			<td bgcolor = 'white'>Urine for C/S</td>
			<td bgcolor = 'white'>Stool for CS</td>
			<td bgcolor = 'white'>Throat swab:*C/S, Gram stain, *KLB stain</td>
			<td bgcolor = 'white'>Sputum: C/S, *Gram stain: *AFB stain</td>
			<td bgcolor = 'white'>Urethral discharge: C/S *Gram stain</td>
			<td bgcolor = 'white'>Prostatic smear: C/S *Gram stain</td>
			<td bgcolor = 'white'>HVS: C/S *Gram stain</td>
			<td bgcolor = 'white'>HVS: C/S *Gram stain:*AFB stain</td>
			<td bgcolor = 'white'>Skin Scrapings</td>
		</tr>";
	$sql = "select * from invst_view where p_id = '$id' AND $status rpt_date>='$from' AND rpt_date<='$to'";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$rpt_date = $row['rpt_date'];
		$automated_id	= $row['automated_id'];
		$urine_nm = $row['urine_nm'];
		$stollfor_cs = $row['stollfor_cs'];
		$throat_nm	= $row['throat_nm'];
		$sputum_nm	= $row['sputum_nm'];
		$urethral_nam	= $row['urethral_nam'];
		$prostatic_nam	= $row['prostatic_nam'];
		$hbs_nam = $row['hbs_nam'];
		$hbs1_nam = $row['hbs1_nam'];
		$skin_nam = $row['skin_nam'];
		
		echo "<tr>";
		
		echo "<td bgcolor = 'white'>";
		if($rpt_date != ''){
			echo $rpt_date;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($automated_id != ''){
			echo $automated_id;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($urine_nm != ''){
			echo $urine_nm;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($stollfor_cs != ''){
			echo $stollfor_cs;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($throat_nm != ''){
			echo $throat_nm;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($sputum_nm != ''){
			echo $sputum_nm;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($urethral_nam != ''){
			echo $urethral_nam;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($prostatic_nam != ''){
			echo $prostatic_nam;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($hbs_nam != ''){
			echo $hbs_nam;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($hbs1_nam != ''){
			echo $hbs1_nam;
		}
		echo "</td>";
		
		echo "<td bgcolor = 'white'>";
		if($skin_nam != ''){
			echo $skin_nam; //echo "sdklfj";
		}
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
?>