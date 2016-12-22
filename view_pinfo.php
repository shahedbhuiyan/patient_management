<?php
	include("assis_panel_head.php");
	$dat = date("Y-m-d");
	$sql_one = "select * from assis_doctor where dat = '$dat' AND pid = '$pid'";
	$rec_one = mysql_query($sql_one);
	while($row_one = mysql_fetch_array($rec_one)){
		$pid 			= $row_one['pid'];
		$pname 			= $row_one['pname'];
		$fname			= $row_one['fname'];
		$mname			= $row_one['mname'];
		$dob			= $row_one['dob'];
		
		$age			= $row_one['age'];
		$age1			= $row_one['age1'];
		$age2			= $row_one['age2'];
		
		$age 			= $age."y-".$age1."m-".$age2."d";
		
		$mstatus		= $row_one['mstatus'];
		$sex			= $row_one['sex'];
		$paddr			= $row_one['paddress'];
		$pcontact		= $row_one['pcontact'];
		$email			= $row_one['email'];
		$reff			= $row_one['reff'];
		
		$gname			= $row_one['guardian'];
		$gcontact		= $row_one['gcontact'];
		$gaddr			= $row_one['gaddress'];
		//$dat 			= date("Y-m-d");
		
		$p				= $row_one['p'];
		$p1				= $row_one['p1'];
		$p2				= $row_one['p2'];
		
		$p 				= $p."/min".$p1.", ".$p2." Volume";
		
		$bp				= $row_one['bp'];
		
		$temp			= $row_one['temp'];
		$weight			= $row_one['weight'];
		
		$h1				= $row_one['h1'];
		$h2				= $row_one['h2'];
		
		$h				= $h1." cm - ".$h2." inch";
		
		$odema			= $row_one['odema'];
		$cyan			= $row_one['cyan'];
		$jaundice		= $row_one['jaundice'];
		$skin			= $row_one['skin'];
		$dehy			= $row_one['dehy'];
		$othr			= $row_one['othrs'];
	}
	echo "<table><tr><td height = '15'></td></tr></table>";
	$tbl = "<table align = 'center' width = '800' border = '0'>";
		$tbl .= "<tr>";
			$tbl .= "<td colspan = '6' style = 'text-align:center; color:white; font-size:16px;' bgcolor = '$006666'>Patinet Info & Physical Examination</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>P_ID</td>
				<td width = '1'>:</td>
				<td>$pid</td>
				<td>Name</td>
				<td width = '1'>:</td>
				<td>$pname</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>Father Name</td>
				<td>:</td>
				<td>$fname</td>
				<td>Mother Name</td>
				<td>:</td>
				<td>$mname</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>Date of Birth</td>
				<td>:</td>
				<td>$dob</td>
				<td>Age</td>
				<td>:</td>
				<td>$age</td>";
		$tbl .= "</tr>";
		
		
		$tbl .= "<tr>";
			$tbl .= "<td>Marital Status</td>
				<td>:</td>
				<td>$mstatus</td>
				<td>Sex</td>
				<td>:</td>
				<td>$sex</td>";
		$tbl .= "</tr>";
		
		
		$tbl .= "<tr>";
			$tbl .= "<td>Pati. Contact</td>
				<td>:</td>
				<td>$pcontact</td>
				<td>Pati. Address</td>
				<td>:</td>
				<td>$paddr</td>";
		$tbl .= "</tr>";
		
		
		$tbl .= "<tr>";
			$tbl .= "<td>E-mail</td>
				<td>:</td>
				<td>$email</td>
				<td>Guardian Name</td>
				<td>:</td>
				<td>$gname</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>Guardian Contact</td>
				<td>:</td>
				<td>$gcontact</td>
				<td>Guardian Address</td>
				<td>:</td>
				<td>$gaddr</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>Pulse</td>
				<td>:</td>
				<td>$p</td>
				<td>B.P</td>
				<td>:</td>
				<td>$bp</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>Temp.</td>
				<td>:</td>
				<td>$temp</td>
				<td>Weight</td>
				<td>:</td>
				<td>$weight</td>";
		$tbl .= "</tr>";
		
		
		$tbl .= "<tr>";
			$tbl .= "<td>Height</td>
				<td>:</td>
				<td>$h</td>
				<td>Odema</td>
				<td>:</td>
				<td>$odema</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>Cyanosis</td>
				<td>:</td>
				<td>$cyan</td>
				<td>Jaundice</td>
				<td>:</td>
				<td>$jaundice</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>Skin Lesion</td>
				<td>:</td>
				<td>$skin</td>
				<td>Dehydration</td>
				<td>:</td>
				<td>$dehy</td>";
		$tbl .= "</tr>";
		
		$tbl .= "<tr>";
			$tbl .= "<td>Other's</td>
				<td>:</td>
				<td>$othr</td>
				<td style = 'font-weight:bold'>Reffered By</td>
				<td style = 'font-weight:bold'>:</td>
				<td style = 'font-weight:bold'>$reff</td>";
		$tbl .= "</tr>";
		
	$tbl .= "</table>";
	$tbl .= "<table><tr><td height = '15'></td></tr></table>";
	
	echo $tbl;
?>

<?php
	include("footer.php");
?>