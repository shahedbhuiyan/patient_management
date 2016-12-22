<?php
	include("ini.php");
	if(isset($_POST['sub'])){
		
		$pid = $_POST['pid'];
		$name = $_POST['pname'];
		$sign = $_POST['sign'];
		$bp = $_POST['bp'];
		$pls = $_POST['pls'];
		$othr = $_POST['othr'];
		$clinical_ds = $_POST['clinical_ds'];
		$diagnoscase = $_POST['diagnoscase'];
		$dat = date("Y-m-d");
		
		if(isExists($pid, $dat) == false){
			$sql = "insert into assis_doctor2 set pid = '$pid', pname = '$name', sign = '$sign', bp = '$bp', pls = '$pls', othr = '$othr', clinical_ds = '$clinical_ds', diagnoscase = '$diagnoscase', dat = '$dat'";
			
			mysql_query($sql);
			
			if(mysql_affected_rows() == 1){
				//header("Location: ./edit_assis.php?pid=$pid");
			}
			else{
				//echo "<table align = 'center'><tr><td><font color = 'red' face = 'tahoma' style = 'font-size:18px;'>Data Loading Failed.</font></td></tr></table>";
			}
		}
		else{
			echo "<table align = 'center'><tr><td style = 'font-family:tahoma; font-size:16px; color:red'>Data Already Exists</td></tr></table>";	
		}
	}
	
	function isExists($pid, $dat){
		$sql = "select * from assis_doctor2 where pid = '$pid' AND dat = '$dat'";
		$rec = mysql_query($sql);
		$numRows = mysql_num_rows($rec);
		
		if($numRows>0){
			return true;
		}
		else{
			return false;
		}
	}
	
	include("assis_panel_head.php");
	
	$dat = date("Y-m-d");
	$sql = "select * from p_info where pid = '$id' AND dat = '$dat'";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$name		= $row['name'];
	}
	
?>
<table align="center" width="650" border="0">	
	<tr>
		<td height="15"></td>
	</tr>
</table>

<form action="assis_doctor2.php" method="post">
<table align="center" width="650" border="1" cellspacing="0" cellpadding="2" style="font-family:courier new; font-size:13px; background-color:#006666">
	
	<tr>
		<td colspan="6" style="font-family:courier new; font-size:20px; text-align:left; color:white; font-weight:bold">Clinical Sign's</td>
	</tr>
	<tr>
		<td colspan="6" height="2" style="border-top:1px solid #ffffff">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" style="color:white">Patient ID</td>
		<td width="1">:</td>
		<td><input type="text" name="pid" id="pid" value="<?php echo $id; ?>" readonly style="background-color:white; text-align:center"/></td>
		<td align="left" style="color:white">Patient Name</td>
		<td>:</td>
		<td><input type="text" name="pname" id="pname" value="<?php echo $name; ?>" readonly style="background-color:white; text-align:center"/></td>
	</tr>
	
	<tr>
		<td><input type="checkbox" name="nad" id="nad" value="nad"/></td>
		<td>:</td>
		<td align="left" style="color:white">NAD</td>
		<td style="color:white">Pulse</td>
		<td>:</td>
		<td style="color:white"><input type="text" name="p" id="p" style="background-color:white; width:40px;" /> /min <input type="text" name="p1" id="p1" style="background-color:white; width:40px;" /> <input type="text" name="p2" id="p2" style="background-color:white; width:40px;" /> Volume</td>
	</tr>
	
	<tr>
		<td style="color:white">B.P</td>
		<td>:</td>
		<td style="color:white"><input type="text" name="bp" id="bp" style="background-color:white; width:50px;" /> / <input type="text" name="bp1" id="bp1" style="background-color:white; width:50px;" /> mm Hg</td>
		<td style="color:white">Murmur</td>
		<td>:</td>
		<td style="color:white"><input type="text" name="mur" id="mur" style="background-color:white; width:40px;" /> <input type="text" name="mur1" id="mur1" style="background-color:white; width:20px;" /> /6, Over <input type="text" name="mur2" id="mur2" style="background-color:white; width:40px;" />, Radiation <input type="text" name="mur3" id="mur3" style="background-color:white; width:40px;" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Added Sound</td>
		<td>:</td>
		<td><input type="text" name="asound" id="asound" style="background-color:white;" /></td>
		<td style="color:white">Bruit Over</td>
		<td>:</td>
		<td><input type="text" name="burit" id="burit" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td colspan="6" style="color:white">Periph. Pulses : </td>
	</tr>
	
	<tr>
		<td colspan="6">
			<table width="100%" border="0" cellpadding="2" cellspacing="0">
				<tr>
					<td></td>
					<td style="color:white">Radial</td>
					<td style="color:white">Brachial</td>
					<td style="color:white">Carotid</td>
					<td style="color:white">Femoral</td>
					<td style="color:white">Popliteal</td>
					<td style="color:white">Post. Tibial</td>
					<td style="color:white">Dorsalis Pedis</td>
				</tr>
				<tr>
					<td style="color:white">Right : </td>
					<td><input type="text" name="per" id="per" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="per1" id="per1" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="per2" id="per2" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="per3" id="per3" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="per4" id="per4" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="per5" id="per5" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="per6" id="per6" style="background-color:white; width:60px;" /></td>
				</tr>
				
				<tr>
					<td style="color:white">Left : </td>
					<td><input type="text" name="peri" id="peri" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="peri1" id="peri1" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="peri2" id="peri2" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="peri3" id="peri3" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="peri4" id="peri4" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="peri5" id="peri5" style="background-color:white; width:60px;" /></td>
					<td><input type="text" name="peri6" id="peri6" style="background-color:white; width:60px;" /></td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td style="color:white">Breath Sound</td>
		<td>:</td>
		<td><input type="text" name="bsound" id="bsound" style="background-color:white;" /></td>
		<td style="color:white">Rhonchi</td>
		<td>:</td>
		<td><input type="text" name="rho" id="rho" style="background-color:white" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Crepitations</td>
		<td>:</td>
		<td><input type="text" name="crep" id="crep" style="background-color:white;" /></td>
		<td style="color:white">Pleural Rub</td>
		<td>:</td>
		<td><input type="text" name="pleu" id="pleu" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Extra Findings</td>
		<td>:</td>
		<td><input type="text" name="extra" id="extra" style="background-color:white;" /></td>
		<td><input type="checkbox" name="nad1" id="nad1" value="nad1" /></td>
		<td colspan="2" style="color:white">NAD</td>
	</tr>
	
	<tr>
		<td colspan="6">
			<table width="100%">
				<tr>
					<td rowspan="2" valign="top" style="color:white">Hernia : </td>
					<td style="color:white"><input type="checkbox" name="r_ingu" id="r_ingu" value="right inguinal" /> Right Inguinal</td>
					<td style="color:white"><input type="checkbox" name="l_ingu" id="l_ingu" value="left inguinal" /> Left Inguinal</td>
					<td style="color:white"><input type="checkbox" name="para" id="para" value="paraumbilical" /> Paraumbilical</td>
				</tr>
				
				<tr>
					<td style="color:white"><input type="checkbox" name="r_femo" id="r_femo" value="right femoral" /> Right Femoral</td>
					<td style="color:white"><input type="checkbox" name="l_femo" id="l_femo" value="left femoral" /> Left Femoral</td>
					<td style="color:white"><input type="checkbox" name="inci" id="inci" value="incisional" /> Incisional</td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td colspan="6">
			<table width="100%">
				<tr>
					<td valign="top" style="color:white">Tenderness In : </td>
					<td style="color:white"><input type="checkbox" name="ruq" id="ruq" value="RUQ" /> RUQ</td>
					<td style="color:white"><input type="checkbox" name="epig" id="epig" value="epigastrium" /> Epigastrium</td>
					<td style="color:white"><input type="checkbox" name="rif" id="rif" value="rif" /> RIF</td>
					<td style="color:white"><input type="checkbox" name="rt" id="rt" value="rt lumbar area" /> Rt Lumbar Area</td>
					<td style="color:white"><input type="checkbox" name="umbili" id="umbili" value="umbilical" /> Umbilical</td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td style="color:white">Liver</td>
		<td>:</td>
		<td><input type="text" name="liver" id="liver" style="background-color:white;" /></td>
		<td style="color:white">Spleen</td>
		<td>:</td>
		<td><input type="text" name="spleen" id="spleen" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Right Kidney</td>
		<td>:</td>
		<td style="color:white"><input type="checkbox" name="rkidney" id="rkidney" value="ballotable" /> Ballotable</td>
		<td style="color:white">Other Mass</td>
		<td>:</td>
		<td><input type="text" name="mass" id="mass" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Ascites</td>
		<td>:</td>
		<td><input type="text" name="ascites" id="ascites" style="background-color:white;" /></td>
		<td style="color:white">Bowel Sound</td>
		<td>:</td>
		<td><input type="text" name="bsound" id="bsound" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Nervous System</td>
		<td>:</td>
		<td style="color:white"><input type="checkbox" name="nad3" id="nad3" value="nad3" /> NAD</td>
		<td style="color:white">Higher Cerebral Function</td>
		<td>:</td>
		<td style="color:white"><input type="checkbox" name="hcf" id="hcf" value="hcf" /> Intact</td>
	</tr>
	
	<tr>
		<td style="color:white">Cranial Nerves</td>
		<td>:</td>
		<td colspan="4" style="color:white" align="left"><input type="checkbox" name="carnail" id="carnail" value="carnial" /> Intact</td>
	</tr>
	
	
	<tr>
		<td colspan="6">
			<table width="100%" border="0">
				<tr>
					<td style="color:white">Reflexes : </td>
					<td colspan="4" align="left" style="text-align:left; color:white"><input type="checkbox" name="reflexes" id="reflexes" value="reflexes" /> Intact</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td style="color:white">Knee</td>
					<td style="color:white">Ankle</td>
					<td style="color:white">Plantar</td>
				</tr>
				<tr>
					<td></td>
					<td style="color:white">Right</td>
					<td><input type="text" name="knee" id="knee" style="background-color:white; width:70px;" /></td>
					<td><input type="text" name="ankle" id="ankle" style="background-color:white; width:70px;" /></td>
					<td><input type="text" name="plantar" id="plantar" style="background-color:white; width:70px;" /></td>
				</tr>
				
				<tr>
					<td></td>
					<td style="color:white">Left</td>
					<td><input type="text" name="knee1" id="knee1" style="background-color:white; width:70px;" /></td>
					<td><input type="text" name="ankle1" id="ankle1" style="background-color:white; width:70px;" /></td>
					<td><input type="text" name="plantar1" id="plantar1" style="background-color:white; width:70px;" /></td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<td style="font-family:courier new; font-size:20px; text-align:left; color:white; font-weight:bold" colspan="6">Clinical Diagnosis</td>
	</tr>
	<tr>
		<td colspan="6" height="2" style="border-top:1px solid #ffffff">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="6"><textarea name="clinical_ds" id="clinical_ds" style="background-color:white; width:100%; height:100px;"></textarea></td>
	</tr>
	
	<tr>
		<td style="font-family:courier new; font-size:20px; text-align:left; color:white; font-weight:bold" colspan="6">Known case of</td>
	</tr>
	<tr>
		<td colspan="6" height="2" style="border-top:1px solid #ffffff">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="6"><textarea name="diagnoscase" id="diagnoscase" style="background-color:white; width:100%; height:100px;"></textarea></td>
	</tr>
	<tr>
		<td align="center" colspan="6"><input type="submit" value="Submit" name="sub" id="sub"/>&nbsp;&nbsp;&nbsp;<input type="reset"/></td>
	</tr>
</table>
</form>


<?
	include("footer.php");
?>