<?php
	include("header.php");
	include("ini.php");
	
	$pid = $_GET['pid'];
	$dat = date("Y-m-d");

	$sql = "select * from assis_doctor2 where pid = '$pid' AND dat = '$dat'";
	$rec = mysql_query($sql);
	
	while($row = mysql_fetch_array($rec)){
		$pid = $row['pid'];
		$name = $row['pname'];
	}
	
	
	$sql1 = "select * from assis_doctor where pid = '$pid' AND dat = '$dat'";
	$rec1 = mysql_query($sql1);
	while($row1 = mysql_fetch_array($rec1)){
		$waight = $row1['waight'];
		$sex = $row1['sex'];
	}
	
	if($sex == 'M') $sex = "Male";
	if($sex == 'F') $sex = "Female";

?>

<table align="center" border="0" width="600" style="font-family:'Courier New', Courier, monospace; font-size:13px;">
	<tr>
		<td align="left">Patient ID</td>
		<td>:</td>
		<td align="left"><input type="text" name="pid" id="pid" readonly value="<? echo $pid; ?>" style="background-color:white"/></td>
		<td align="left">Patient Name</td>
		<td>:</td>
		<td align="left"><input type="text" name="pname" id="pname" readonly value="<? echo $name; ?>" style="background-color:white"/></td>
	</tr>
	
	<tr>
		<td align="left">Waight</td>
		<td>:</td>
		<td align="left"><input type="text" name="waight" id="waight" readonly value="<? echo $waight; ?>" style="background-color:white"/></td>
		<td align="left">Sex</td>
		<td>:</td>
		<td align="left"><input type="text" name="sex" id="sex" readonly value="<? echo $sex; ?>" style="background-color:white"/></td>
	</tr>
</table>
<table><tr><td height="10"></td></tr></table>

<?
	echo "<table align = 'center' width = '700' bgcolor = '#006666' cellspacing = '1'>";
		echo "<tr>
			<td bgcolor = 'white' class = 'td'><a href = '#' style = 'font-family:courier new; font-size:14px;'>View AD</a></td>
			<td bgcolor = 'white' class = 'td'><a href = '#' style = 'font-family:courier new; font-size:14px'>Create Prescription</a></td>
			<td bgcolor = 'white' class = 'td'><a href = '#' style = 'font-family:courier new; font-size:14px'>Treatment History</a></td>
		</tr>";
	echo "</table>";
	
	include("footer.php");
?>