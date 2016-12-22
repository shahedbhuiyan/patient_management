<?php
	include("ini.php");
	
	$pid = $_GET['id']; 
	$dat = $_GET['dat'];
	
	$sql = "select * from prs where pid = '$pid' AND dat = '$dat'";
	$rec = mysql_query($sql);
	if($row = mysql_fetch_array($rec)){
		$id 			= $row['id'];
		$pid 			= $row['pid'];
		$pname 			= $row['pname'];
		$sex 			= $row['sex'];
		$age			= $row['age'];
		$weight 		= $row['weight'];
		$phy_eaxm 		= $row['phy_exm'];
		$investigation 	= $row['investigation'];
		$group 			= $row['group'];
		$dat 			= $row['dat'];
		$symp			= $row['symp'];
		$pic			= $row['pic'];
		
		if($sex == 'M') $sex = "Male";
		if($sex == 'F') $sex = "Female";
		
		$one			= $row['one'];
		$two			= $row['two'];
		$three			= $row['three'];
		$four			= $row['four'];
		$five			= $row['five'];
		$six			= $row['six'];
		$seven			= $row['seven'];
		$eight			= $row['eight'];
		$nine			= $row['nine'];
		$ten			= $row['ten'];
		$eleven			= $row['eleven'];
		$twelve			= $row['twelve'];
		$thirteen		= $row['thirteen'];
	
	
			echo "
		<table width = '900' border = '0' align = 'center' cellspacing = '0'>
			<tr>
				<td width = '350' align = 'left' height = '150'>
					<img src = 'photo/doctor.jpg' height = '150' width = '370'/>
				</td>
				<td>
					&nbsp;
				</td>
				<td width = '350' style = 'text-align:right' valign = 'top'>
					<a style='text-decoration:none; font-family:calibri; font-size:28px; color:#006633'>Prof. Dr. M.A Samad</a><br>
					<a style='text-decoration:none; font-family:calibri; font-size:13px; color:#000099'>MBBS (DMC), MD (NEPHROLOGY)</a><br>
					<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000; font-weight:bold'>Medicine & Kidney Specialist</a><br>
					<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000; font-weight:bold'>Specially Trained in Diabetes (BIRDEM)</a><br>
					<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000'>Professor, Department of Kidney</a><br>
					<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000'>LABAID Specialized Hospital, Dhaka</a><br>
					<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000'>Moblie : 01711 - 603939</a><br>
					<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000'>E-mail : dr.masamad@gmail.com</a>
				</td>
			</tr>
		</table>
	";
	echo "<table><tr><td height = '6'></td></tr></table>";
	
	echo "<table align = 'center' border = '0' cellspacing = '0' width = '896' style = 'font-family:calibri; font-size:13px; text-align:center; border-bottom:1px solid black; ' bgcolor='#FAFAFA'>
		<tr>
			<td width = '50' align = 'right' style = 'border-right:1px solid black; border-left:1px solid black'>P_ID</td>
			<td width = '1'>:</td>
			<td align = 'left' style = 'border-left:1px solid black'>$pid</td>
			<td width = '50' align = 'right' style = 'border-right:1px solid black'>Name</td>
			<td width = '1'>:</td>
			<td align = 'left' style = 'border-left:1px solid black'>$pname</td>
			
			<td width = '50' align = 'right' style = 'border-right:1px solid black'>Age</td>
			<td width = '1'>:</td>
			<td align = 'left' style = 'border-left:1px solid black'>$age</td>
			
			<td width = '50' align = 'right' style = 'border-right:1px solid black'>Sex</td>
			<td width = '1'>:</td>
			<td align = 'left' style = 'border-left:1px solid black'>$sex</td>
			
			<td width = '50' align = 'right' style = 'border-right:1px solid black'>Weight</td>
			<td width = '1'>:</td>
			<td align = 'left' style = 'border-left:1px solid black; border-right:1px solid black'>$weight kg</td>
		</tr>
	</table>";
	
	echo "<table><tr><td height = '10'></td></tr></table>";
	
	echo "<table align = 'center' width = '900' border = '0' cellspacing = '0'>
		<tr>
			<td width = '250'>
				<table width = '100%'>";
					
					if($pic != ''){
						echo "<tr>
							<td style = 'border-bottom:1px solid black; border-right:1px solid black; border-left:1px solid black; text-align:center; font-family:calibri; font-size:13px; color:$006666; font-weight:bold;'>Patient Image</td>
						</tr>
						
						<tr>
							<td height = '100' valign = 'top' align = 'center' style = 'font-family:calibri; font-size:13px; color:$006666;'><img src = 'photo/$pic' height = '150' width = '150' style = 'border:1px solid black' /></td>
						</tr>";
					}
					
					echo "<tr>
						<td style = 'border-bottom:1px solid black; border-right:1px solid black; border-left:1px solid black; text-align:center; font-family:calibri; font-size:13px; color:$006666; font-weight:bold;'>Symptom's</td>
					</tr>
					
					<tr>
						<td height = '100' valign = 'top' style = 'text-align:justify;  font-family:calibri; font-size:13px; color:$006666;'>$symp</td>
					</tr>
					
					<tr>
						<td style = 'border-bottom:1px solid black; border-right:1px solid black; border-left:1px solid black; text-align:center; font-family:calibri; font-size:13px; color:$006666; font-weight:bold;'>History</td>
					</tr>
					
					<tr>
						<td height = '100' valign = 'top' style = 'text-align:justify;  font-family:calibri; font-size:13px; color:$006666;'>$history</td>
					</tr>
					
					<tr>
						<td style = 'border-bottom:1px solid black; border-right:1px solid black; border-left:1px solid black; text-align:center; font-family:calibri; font-size:13px; color:$006666; font-weight:bold;'>Physical Examination</td>
					</tr>
					
					<tr>
						<td height = '100' valign = 'top'  style = 'text-align:justify;  font-family:calibri; font-size:13px; color:$006666;'>$phy_eaxm</td>
					</tr>
					
					<tr>
						<td style = 'border-bottom:1px solid black; border-right:1px solid black; border-left:1px solid black; text-align:center; font-family:calibri; font-size:13px; color:$006666; font-weight:bold;'>Clinical Diagnosis</td>
					</tr>
					
					<tr>
						<td height = '100' valign = 'top'  style = 'text-align:justify;  font-family:calibri; font-size:13px; color:$006666;'>$clinical_ds</td>
					</tr>
					
					<tr>
						<td style = 'border-bottom:1px solid black; border-right:1px solid black; border-left:1px solid black; text-align:center; font-family:calibri; font-size:13px; color:$006666; font-weight:bold;'>Known case of</td>
					</tr>
					
					<tr>
						<td height = '100' valign = 'top'  style = 'text-align:justify;  font-family:calibri; font-size:13px; color:$006666;'>$diagonscase</td>
					</tr>
					
					<tr>
						<td style = 'border-bottom:1px solid black; border-right:1px solid black; border-left:1px solid black; text-align:center; font-family:calibri; font-size:13px; color:$006666; font-weight:bold;'>Investigation</td>
					</tr>
					
					<tr>
						<td height = '100' valign = 'top'  style = 'text-align:justify;  font-family:calibri; font-size:13px; color:$006666;'>$investigation</td>
					</tr>
					
				</table>
			</td>
		
			<td valign = 'top' align = 'center'>";
				
				//echo "<table width = '100%'><tr><td height = ''></td><td></td></tr></table>";
				
				echo "<table width = '100%' border = '0'><tr><td width = '20'></td><td><font color = 'black' face = 'tahoma' size = '7'><i>R</i></font><font face = 'tahoma' size = '3' color = 'red'><i>X</i></font></td></tr></table>";
				echo $data = drug_data($pid, $dat);
				
				echo "</table>";
				echo "<table border = '0' cellspacing = '0' align = 'left' style = 'padding-left:10px;'>
						<tr>
							<td height = '50' colspan = '3'></td>
						</tr>";
						
						if($one != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/1.jpg'></td>
							</tr>";
						}
						
						if($two != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/2.jpg'></td>
							</tr>";
						}
						
						if($three != ''){
							echo "<tr>
									<td colspan = '3'>
										<table align = 'right'>
											<tr>
												<td style = 'text-align:right' align = 'right'><img src = 'img/17.jpg'></td>
												<td valign = 'bottom'>$three</td>
												<td style = 'text-align:left' align = 'left' valign = 'bottom'><img src = 'img/11.jpg'></td>
											</tr>
										</table>
									</td>
							</tr>";
						}
						
						if($four != ''){
							echo "<tr>
										<td colspan = '3'>
											<table align = 'right'>
												<tr>
													<td style = 'text-align:right' align = 'right'><img src = 'img/4.jpg'></td>
													<td style = 'text-align:left' align = 'left'>$four</td>
												</tr>
											</table>
										</td>
							</tr>";
						}
						
						if($five != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/6.jpg'></td>
							</tr>";
						}
						
						if($six != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/5.jpg'></td>
							</tr>";
						}
						
						if($seven != ''){
							echo "<tr>
									<td colspan = '3'>
										<table align = 'right'>
											<tr>
											<td style = 'text-align:right' align = 'right' valign = 'middle'><img src = 'img/7.jpg'></td>
											<td>$seven</td>
											<td><img src = 'img/8.jpg'></td>
											</tr>
										</table>
									</td>
							</tr>";
						}
						
						if($eight != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/9.jpg'></td>
							</tr>";
						}
						
						if($nine != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/110.jpg'></td>
							</tr>";
						}
						
						if($ten != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/15.jpg'></td>
							</tr>";
						}
						
						if($eleven != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/16.jpg'></td>
							</tr>";
						}
						
						if($twelve != ''){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/14.jpg'></td>
							</tr>";
						}
						
						if($thirteen == '1'){
							echo "<tr>
								<td colspan = '3' style = 'text-align:right' align = 'right'><img src = 'img/18.jpg'></td>
							</tr>";
						}
				echo "</table>";
	
	}
		

			function drug_data($pid, $dat){
				$sql = "select * from prescription where patient_id = '$pid' AND dat = '$dat'";
				$rec = mysql_query($sql);
				while($row = mysql_fetch_array($rec)){
						$id_1 		= $row['id'];
						//$cat		= $row['cat'];
						$pid 		= $row['patient_id'];
						$drug 		= $row['drug'];
						$dose 		= $row['dose'];
							if($dose == '0+0+½'){
								$dose = "0+0+&frac12;";
							}
							else if($dose == '½+0+0'){
								$dose = "&frac12;+0+0";
							}
							else if($dose == '0+½+0'){
								$dose = "0+&frac12;+0";
							}
							else if($dose == '½+½+0'){
								$dose = "&frac12;+&frac12;+0";
							}
							else if($dose == '½+0+½'){
								$dose = "&frac12;+0+&frac12;";
							}
							else if($dose == '0+½+½'){
								$dose = "0+&frac12;+&frac12;";
							}
							else if($dose == '½+½+½'){
								$dose = "&frac12;+&frac12;+&frac12;";
							}
							else{
								$dose = $dose;
							}
						$gap 		= $row['gap'];
						$meal 		= $row['meal'];
						$duration 	= $row['duration'];
						$cat 		= $row['cat'];
						
						echo "<table align = 'center' width = '500' border = '0' cellspacing = '0' style = 'font-family:calibri; font-size:12px; border-bottom:solid 1px #000000; padding-top:5px'>";
						echo "<tr><td colspan = '5'>$cat $drug</td></tr>
							<tr>
								<td width = '30'></td>
								<td>$dose</td>
								<td>$gap</td>
								<td>$meal</td>
								<td>$duration</td>
							</tr>";
				}
			}
			
			echo "</td>
		</tr>
	</table>";
	
	echo "<table align = 'center'><tr><td></td></tr></table>";
	
	echo "<table align = 'center' width = '900'><tr><td style = 'border-top:1px solid black;'><font style = 'font-family:tahoma; font-size:11px; float:left; width:100px;'>Contact : 7115038</font><font style = 'font-family:tahoma; font-size:11px; float:right;'>Patient meeting time : 5.00 PM - 9.00 PM, Friday is closed, Contact for serial : 01817 - 141191, Phone : 7120450, 7120460</font></td></tr></table>";
?>