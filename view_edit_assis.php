<?php
	include("header.php");
	include("ini.php");
	
	$dat = date("Y-m-d");
	echo "<table><tr><td height = '5'></td></tr></table>";
	echo "<table align = 'center' border = '0' width = '300' style = 'text-align:center' bgcolor = 'black' cellspacing = '1'>";
		echo "
		<tr>
			<td colspan = '3' style = 'font-size:15px; color:white' bgcolor = '#006666'>Todays Patient List</td>
		</tr>
		<tr style = 'font-weight:bold'>
			<td bgcolor = 'white'>SL</td>
			<td bgcolor = 'white'>ID</td>
			<td bgcolor = 'white'>Name</td>
		</tr>";
	$sql = "select * from assis_doctor where dat = '$dat' ORDER BY pid";
	$rec = mysql_query($sql);
	$i = 0;
	while($row = mysql_fetch_array($rec)){
		$pid 	= $row['pid'];
		$name	= $row['pname'];
		$i++;
		echo "<tr onClick=\"window.location='view_pinfo.php?pid=$pid'\" style = 'cursor:pointer'>
				<td bgcolor = 'white'>$i</td>
				<td bgcolor = 'white'>$pid</td>
				<td bgcolor = 'white'>$name</td>
			</tr>";
	}
	
	echo "</table>";
	
	

	
	include("footer.php");
?>