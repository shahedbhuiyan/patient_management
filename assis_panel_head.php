<?php
	include("header.php");
	if(isset($_GET['pid'])){
		$id 	= $_GET['pid'];
	}
	else{
		$id		= $_POST['pid'];
	}
	$dat = date("Y-m-d");
	$sql = "select * from p_info where dat = '$dat' AND pid = '$id'";
	$rec = mysql_query($sql);
	if($row = mysql_fetch_array($rec)){
		$id			= $row['pid'];
		$name		= $row['name'];
	}
	
	echo "<table align = 'center' width = '450'>
		<tr>
			<td>Patient ID</td>
			<td>:</td>
			<td><input type = 'text' name = 'pid' id = 'pid' readonly value = '$id' style = 'background-color:white;'></td>
			<td>Name</td>
			<td>:</td>
			<td><input type = 'text' name = 'name' id = 'name' readonly value = '$name' style = 'background-color:white;'></td>
		</tr>
	</table>";
	
	echo "<table><tr><td height = '15'></td></tr></table>";
	
	echo "<table align = 'center' width = '600' cellspacing = '1' style = 'text-align:center' bgcolor = '#006666'>
		<tr>
			<td bgcolor = 'white'><a href = 'assis_doctor1.php?pid=$id'>Patient Information</a></td>
			<td bgcolor = 'white'><a href = 'assis_doctor2.php?pid=$id'>Clinical Sign</a></td>
			<td bgcolor = 'white'><a href = 'history.php?pid=$id'>Patient History</a></td>
		</tr>
	</table>";
?>
