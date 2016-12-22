<?php
	include("header.php");

	$dat = date("Y-m-d");
	
	$sql = "select * from prs where dat = '$dat'";
	$rec = mysql_query($sql);
	echo "<table bgcolor = '#006666' align = 'center' width = '300' border = '0' cellspacing = '1' style = 'text-align:center'>";
		echo "<tr>
			<td style = 'color:white; font-weight:bold'>S.L</td>
			<td style = 'color:white; font-weight:bold'>P_ID</td>
			<td style = 'color:white; font-weight:bold'>Name</td>
		</tr>";
	while($row = mysql_fetch_array($rec)){
		$id = $row['pid'];
		$name	= $row['pname'];
		
		$css = "style='cursor:pointer;'";
		$onc = "onClick=\"window.open('prs_here.php','','height=800,width=800')\"";
		
		echo "<tr $css $onc>
			<td bgcolor = 'white'>$i</td>
			<td bgcolor = 'white'>$id</td>
			<td bgcolor = 'white'>$name</td>
		</tr>";
	}
	
	echo "</table>";
?>
<?php
	include("footer.php");
?>