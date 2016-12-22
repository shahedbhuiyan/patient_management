<?php
	include("header.php");
	include("ini.php");
	
?>
<form action="view_invst_rpt.php" method="post">
<table align="center" width="350">
	<tr>
		<td colspan="3" align="center" bgcolor="#006666" style="color:white; font-family:tahoma; font-size:15px;">Search Investigation</td>
	</tr>
	<tr>
		<td>Patient ID</td>
		<td>:</td>
		<td><input type="text" name="pid" id="pid" style="background-color:white" /></td>
	</tr>
	
	<tr>
		<td>Date From</td>
		<td>:</td>
		<td><input type="text" name="date_from" id="date_from" style="background-color:white" value="<?php echo date("Y-m-d"); ?>" /></td>
	</tr>
	
	<tr>
		<td>Date To</td>
		<td>:</td>
		<td><input type="text" name="date_to" id="date_to" style="background-color:white" value="<?php echo date("Y-m-d"); ?>" /></td>
	</tr>
	
	<tr>
		<td>Investigation</td>
		<td>:</td>
		<td><select name="invst" id="invst" style="background-color:white">
			<option value="">-------Select-------</option>
			<option value="automated">Automated Blood Culture</option>
			<option value="stool">Stool for C/S</option>
			<option value="throat">Throat swab:*C/S, Gram stain, *KLB stain</option>
			<option value="sputum">Sputum: C/S, *Gram stain: *AFB stain</option>
			<option value="urethral">Urethral discharge: C/S *Gram stain</option>
			<option value="urine">Urine for C/S</option>
			<option value="prostatic">Prostatic smear: C/S *Gram stain</option>
			<option value="hvs">HVS: C/S *Gram stain</option>
			<option value="hvs1">HVS: C/S *Gram stain:*AFB stain</option>
			<option value="all">All</option>
		</select></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" name="sub" value="Submit"/></td>
	</tr>
</table>
</form>

<?php
	if(isset($_POST['sub'])){
		$pid		= $_POST['pid'];
		$date_from	= $_POST['date_from'];
		$date_to	= $_POST['date_to'];
		$invst		= $_POST['invst'];
		
		echo "<table width = '300' align = 'center' style = 'font-weight:bold'>
			<tr>
				<td>PID</td>
				<td>Name</td>
				<td>Date</td>
				<td>View</td>
			</tr>
			</table>";
		//if($invst != ''){
		if($invst == 'automated'){
			$sql = "select * from invst_view where p_id = '$pid' AND automated = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$automated = $row['automated'];
				$auto	= "automated"." = ".$automated;
			}
			
			if($auto != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$auto' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}	
		}
		
		if($invst == 'stool'){
			$sql = "select * from invst_view where p_id = '$pid' AND stollfor = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$stool = $row['stollfor'];
				$stol = "stollfor"." = ".$stool;
			}
			
			if($stol != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$stol' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}
		if($invst == 'throat'){
			$sql = "select * from invst_view where p_id = '$pid' AND throat = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$throat = $row['throat'];
				$thro = "throat"." = ".$throat;
			}
			
			if($thro != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$thro' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}
		if($invst == 'sputum'){
			$sql = "select * from invst_view where p_id = '$pid' AND sputum = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$sputum = $row['sputum'];
				$spu = "sputum"." = ".$sputum;
			}
			if($spu != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$spu' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}
		if($invst == 'urethral'){
			$sql = "select * from invst_view where p_id = '$pid' AND urethral = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);			
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$urethral = $row['urethral'];
				
				$ure = "urethral"." = ".$urethral;
			}
			
			if($ure != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$ure' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}
		if($invst == 'urine'){
			$sql = "select * from invst_view where p_id = '$pid' AND urine = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$urine = $row['urine'];
				
				$uri = "urine"." = ".$urine;
				
			}
			
			if($uri != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$uri' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}
		if($invst == 'prostatic'){
			$sql = "select * from invst_view where p_id = '$pid' AND prostatic = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$prostatic = $row['prostatic'];
				
				$pro = "prostatic"." = ".$prostatic;
			}
			
			if($pro != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$pro' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}
		if($invst == 'hvs'){
			$sql = "select * from invst_view where p_id = '$pid' AND hvs = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$hvs = $row['hvs'];
				
				$hv = "hvs"." = ".$hvs;
			}
			
			if($hv != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$hv' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}

		if($invst == 'hvs1'){
			$sql = "select * from invst_view where p_id = '$pid' AND hvs1 = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$hvs1 = $row['hvs1'];
				
				$hv1 = "hvs1"." = ".$hvs1;
			}
			
			if($hv1 != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$hv1' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}
		if($invst == 'skin'){
			$sql = "select * from invst_view where p_id = '$pid' AND skin = '1' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				$skin = $row['skin'];
				
				$ski = "skin"." = ".$skin;
			}
			
			if($ski != ''){
				echo "<table align = 'center' width = '300'>
					<tr>
						<td>$p_id</td>
						<td>$p_name</td>
						<td>$from</td>
						<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to&status=$ski' target = '_blank'>View</a></td>
					</tr>
				</table>";
			}
			else{
				echo "<table><tr><td>Investigation is not found</td></tr></table>";
			}
		}
		if($invst == 'all'){
			$sql = "select * from invst_view where p_id = '$pid' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
			$rec = mysql_query($sql);
			while($row = mysql_fetch_array($rec)){
				$p_id = $row['p_id'];
				$p_name = $row['name'];
				$from = $date_from;
				$to = $date_to;
				//$hvs = $row['hvs1'];
			}
			
			echo "<table align = 'center' width = '300'>
				<tr>
					<td>$p_id</td>
					<td>$p_name</td>
					<td>$from</td>
					<td><a href = 'view_invst_rpt1.php?id=$p_id&from=$from&to=$to' target = '_blank'>View</a></td>
				</tr>
			</table>";
		}
		//}
		//else{
			//echo "<table><tr><td>Null Investigation</td></tr></table>";
		//}
	}	
	include("footer.php");
?>