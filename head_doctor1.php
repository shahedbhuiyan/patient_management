<?php
	include("header.php");
	include("ini.php");
	
	if(isset($_POST['pid'])){
		$pid = $_POST['pid'];
	}
	else{
		$pid = $_GET['pid'];
	}
	$dat = date("Y-m-d");

	$sql = "select * from assis_doctor where pid = '$pid' AND dat = '$dat'";
	$rec = mysql_query($sql);
	
	while($row = mysql_fetch_array($rec)){
		$pid = $row['pid'];
		$name = $row['pname'];
		$weight = $row['weight'];
		$sex = $row['sex'];
		
		if($sex == 'M') $sex = "Male";
		if($sex == 'F') $sex = "Female";

	}
?>
<table align="center" border="0" width="700" style="font-family:'Courier New', Courier, monospace; font-size:13px;">
	<tr>
		<td align="left">Patient ID</td>
		<td>:</td>
		<td align="left"><input type="text" name="pid" id="pid" readonly value="<?php echo $pid; ?>" style="background-color:#CCCCCC; color:black"/></td>
		<td align="left">Patient Name</td>
		<td>:</td>
		<td align="left"><input type="text" name="pname" id="pname" readonly value="<?php echo $name; ?>" style="background-color:#CCCCCC; color:black"/></td>
	</tr>
	
	<tr>
		<td align="left">Waight</td>
		<td>:</td>
		<td align="left"><input type="text" name="waight" id="waight" readonly value="<?php echo $weight; ?>" style="background-color:#CCCCCC; color:black"/></td>
		<td align="left">Sex</td>
		<td>:</td>
		<td align="left"><input type="text" name="sex" id="sex" readonly value="<?php echo $sex; ?>" style="background-color:#CCCCCC; color:black"/></td>
	</tr>
</table>

<table><tr><td height="10"></td></tr></table>



<?php
	echo "<table align = 'center' width = '700' bgcolor = '#006666' cellspacing = '1' style = 'text-align:center; font-family:Microsoft JhengHei'>";
		echo "<tr>
			<td bgcolor = 'white' class = 'td'><a href = 'view_ad.php?pid=$pid' style = 'font-family:courier new; font-size:14px;'>View Assis. Doctor</a></td>
			<td bgcolor = 'white' class = 'td'><a href = 'cr_prs.php?pid=$pid' style = 'font-family:courier new; font-size:14px'>Create Prescription</a></td>
			<td bgcolor = 'white' class = 'td'><a href = 'ins_invst.php?pid=$pid' style = 'font-family:courier new; font-size:14px'>Add Investigation</a></td>
			<td bgcolor = 'white' class = 'td'><a href = '#' onclick=\"window.open('treatment_history.php?pid=$pid&name=$name','','width=1100, height=700,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=0,menubar=no,status=no')\" style = 'font-family:courier new; font-size:14px'>Treatment History</a></td> 
		</tr>";
	echo "</table>";
?>