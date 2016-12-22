<?php
	include("ini.php");
	$id = $_GET['pid'];
	$name = $_GET['name'];
	
	
	echo "<table align = 'center' width = '900' border = '0' bgcolor = '#006666' cellspacing = '1'>
		<tr>
			<td style = 'background-color:#ffffff; font-family:tahoma; font-size:20px; text-align:center; color:black'>Treatment History of <font color = 'orange'>$name</font></td>
		</tr>
	</table>";
	
	echo "<table><tr><td height = '5'></td></tr></table>";
	
	$sql = "select * from prs where pid = '$id'";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$pid = $row['pid'];
		$pname = $row['pname'];
		$sex = $row['sex'];
		$weight = $row['weight'];
		$history = $row['history'];
		$phy_exm = $row['phy_exm'];
		$clinical_ds = $row['clinical_ds'];
		$diagnoscase = $row['diagnoscase'];
		$investigation = $row['investigation'];
		$group = $row['group'];
		$dat = $row['dat'];
		
		//echo "<table align = 'center' border = '1' height = '900' width = '900'><tr><td>";
		
		
		echo "<table width = '900' border = '0' align = 'center' cellspacing = '1' bgcolor = '#006666'>
			<tr>
				<td width = '250' bgcolor = 'white' style = 'font-family:tahoma; font-size:14px; text-align:center'>Total Analysis</td>
				<td width = '650' bgcolor = 'white' style = 'font-family:tahoma; font-size:14px; text-align:center'>Drug's Details</td>
			</tr>
		</table>";
		
		echo "<table width = '900' border = '0' align = 'center' cellspacing = '0' style = 'padding-bottom:10px; border-bottom:2px solid #006666'>
			<tr>
				<td width = '250' valign = 'top'>
					
					
					
					
					
					<table width = '100%' cellspacing = '0'>
						
						<tr><td style = 'padding-top:5px;'>
							<table width = '100%' align = 'center' bgcolor = '#006666' cellspacing = '1'>
								<tr><td bgcolor = 'white' style = 'font-family:tahoma; font-size:13px; text-align:center'>History</td></tr>
								<tr><td bgcolor = 'white' valign = 'top' height = '100' style = 'font-family:tahoma; font:8pt tahoma; text-align:justify; padding:2px 2px 2px 2px'>$history</td></tr>
							</table>
						</td></tr>
						
						<tr><td style = 'padding-top:5px;'>
							<table width = '100%' align = 'center' bgcolor = '#006666' cellspacing = '1'>
								<tr><td bgcolor = 'white' style = 'font-family:tahoma; font-size:13px; text-align:center'>Physical Examination</td></tr>
								<tr><td bgcolor = 'white' valign = 'top' height = '100' style = 'font-family:tahoma; font:8pt tahoma; text-align:justify; padding:2px 2px 2px 2px''>$phy_exm</td></tr>
							</table>
						</td></tr>
						
						<tr><td style = 'padding-top:5px;'>
							<table width = '100%' align = 'center' bgcolor = '#006666' cellspacing = '1'>
								<tr><td bgcolor = 'white' style = 'font-family:tahoma; font-size:13px; text-align:center'>Clinical Diagnosis</td></tr>
								<tr><td bgcolor = 'white' valign = 'top' height = '100' style = 'font-family:tahoma; font:8pt tahoma; text-align:justify; padding:2px 2px 2px 2px''>$clinical_ds</td></tr>
							</table>
						</td></tr>
						
						<tr><td style = 'padding-top:5px;'>
							<table width = '100%' align = 'center' bgcolor = '#006666' cellspacing = '1'>
								<tr><td bgcolor = 'white' style = 'font-family:tahoma; font-size:13px; text-align:center'>Diagnostics/Diagnoscase of</td></tr>
								<tr><td bgcolor = 'white' valign = 'top' height = '100' style = 'font-family:tahoma; font:8pt tahoma; text-align:justify; padding:2px 2px 2px 2px''>$diagnoscase</td></tr>
							</table>
						</td></tr>
						
						<tr><td style = 'padding-top:5px;'>
							<table width = '100%' align = 'center' bgcolor = '#006666' cellspacing = '1'>
								<tr><td bgcolor = 'white' style = 'font-family:tahoma; font-size:13px; text-align:center'>Investigation</td></tr>
								<tr><td bgcolor = 'white' valign = 'top' height = '100' style = 'font-family:tahoma; font:8pt tahoma; text-align:justify; padding:2px 2px 2px 2px''>$investigation</td></tr>
							</table>
						</td></tr>
						
					</table>
					
					
					
				</td>
				
				
				<td width = '650' valign = 'top' style = 'padding-top:5px;'>"; 
					echo "<table cellspacing = '1' border = '1' align = 'center' width = '100%' bgcolor = '#006666'><tr style = 'font-family:tahoma; font-size:12px; font-weight:bold; text-align:center'>
						<td bgcolor = 'white'>Drug</td>
						<td bgcolor = 'white'>Dose</td>
						<td bgcolor = 'white'>Duration</td>
						<td bgcolor = 'white'>Meal</td>
						<td bgcolor = 'white'>Dose Gap</td>
					</tr>";
					$sql1 = "select * from prs_drug where pid = '$pid' AND dat = '$dat'";
					$rec1 = mysql_query($sql1);
					while($row1 = mysql_fetch_array($rec1)){
						$pid = $row1['pid'];
						$drug = $row1['drug'];
						$dose = $row1['dose'];
						$dose_gap = $row1['dose_gap'];
						$meal = $row1['meal'];
						$duration = $row1['duration'];
					
						echo "<tr style = 'font-family:tahoma; font-size:11px; text-align:center'>
							<td bgcolor = 'white'>$drug</td>
							<td bgcolor = 'white'>$dose</td>
							<td bgcolor = 'white'>$duration</td>
							<td bgcolor = 'white'>$meal</td>
							<td bgcolor = 'white'>$dose_gap</td>
						</tr>";
					}

		echo "</td>
			</tr>
		</table>";
	}
//echo "</td></tr></table>"
?>