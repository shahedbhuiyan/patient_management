<?php
	include("ini.php");
	$id = $_GET['pid'];
	$name = $_GET['name'];
	
	
	echo "<table align = 'center' width = '900' border = '0' bgcolor = '#006666' cellspacing = '1'>
		<tr>
			<td align = 'right' style = 'background:white'><a href = 'download.php?id=$id&name=$name' style = 'font-family:calibri; font-size:17px; color:black; text-decoration:none'>Export to Excel</a></td>
		</tr>
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
		
		
		echo "<table align = 'center' width = '900'><tr><td style = 'font-family:tahoma; font-size:13px; text-align:right'>Date : $dat</td></tr></table>";
		
		echo "<table width = '900' border = '0' align = 'center' cellspacing = '1' bgcolor = '#006666' style = 'font-family:tahoma; font-size:13px;'>
			<tr>
				<td bgcolor = 'white'>P_ID</td>
				<td bgcolor = 'white' width = '1'>:</td>
				<td bgcolor = 'white'>$pid</td>
				<td bgcolor = 'white'>Name</td>
				<td bgcolor = 'white' width = '1'>:</td>
				<td bgcolor = 'white'>$pname</td>
			</tr>
			
			<tr>
				<td bgcolor = 'white'>Sex</td>
				<td bgcolor = 'white' width = '1'>:</td>
				<td bgcolor = 'white'>$sex</td>
				<td bgcolor = 'white'>Weight</td>
				<td bgcolor = 'white'>:</td>
				<td bgcolor = 'white'>$weight</td>
			</tr>
		</table>";
		
		echo "<table><tr><td height = '5'></td></tr></table>";
		
		echo "<table width = '900' border = '0' align = 'center' cellspacing = '1' bgcolor = '#006666'>
			<tr>
				<td width = '250' bgcolor = 'white' style = 'font-family:tahoma; font-size:14px; text-align:center'>Total Analysis</td>
				<td width = '650' bgcolor = 'white' style = 'font-family:tahoma; font-size:14px; text-align:center'>Drug's Details</td>
			</tr>
		</table>";
		
		echo "<table width = '900' border = '0' align = 'center' cellspacing = '0' style = 'border-bottom:1px solid #006666'>
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
				
				<td valign = 'top' style = 'padding-top:5px'>";
								echo "<table cellspacing = '1' border = '0' align = 'center' width = '100%' bgcolor = '#006666'><tr style = 'font-family:tahoma; font-size:12px; font-weight:bold; text-align:center'>
									<td bgcolor = 'white'>Drug</td>
									<td bgcolor = 'white'>Dose</td>
									<td bgcolor = 'white'>Duration</td>
									<td bgcolor = 'white'>Meal</td>
									<td bgcolor = 'white'>Dose Gap</td>
								</tr>";
									echo $drg = drug($pid,$dat);			
								echo "</td>
								</tr>
							</table>
							
				</td>
			</tr>
		</table>";
		
		echo "<table><tr><td height = '20'></td></tr></table>";

	}


	function drug($pid,$dat){
		$sql1 = "select * from prescription where patient_id = '$pid' AND dat = '$dat'";
		$rec1 = mysql_query($sql1);
		while($row1 = mysql_fetch_array($rec1)){
			$pid = $row1['pid'];
			$drug = $row1['drug'];
			$dose = $row1['dose'];
			$dose_gap = $row1['gap'];
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
	}
?>
