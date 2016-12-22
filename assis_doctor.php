<?php
	include("header.php");
	
	$dat = date("Y-m-d");
	$sql = "select * from p_info where dat = '$dat' AND present = 'Y'";
	$rec = mysql_query($sql);
	var_dump($rec);
		echo "<table><tr><td height = '15'></td></tr></table>";
		$tbl  = "<table align = 'center' width = '400' border = '0' bgcolor = '#006666' style = 'text-align:center' cellspacing = '1'>";
			$tbl .= "<tr>";
				$tbl .= "<td style = 'font-size:14px; color:white'>S.L</td>
				<td style = 'font-size:14px; color:white'>Patient ID</td>
				<td style = 'font-size:14px; color:white'>Name</td>
				<td style = 'font-size:14px; color:white'>Location</td>";
			$tbl .= "</tr>";
	$i = 0;
	while($ln = mysql_fetch_array($rec)){
		$id			= $ln['pid'];
		$name		= $ln['name'];
		$loc		= $ln['loc'];
		$i++;
			
			$css = "style='background-color:#FFFFFF; cursor:pointer; font-family:courier new; font-size:13px;'";
			$tbl .= "<tr $css onClick=\"window.location='assis_panel.php?pid=$id'\">";
				$tbl .= "<td bgcolor = 'white'>$i</td>
					<td bgcolor = 'white'>$id</td>
					<td bgcolor = 'white'>$name</td>
					<td bgcolor = 'white'>$loc</td>";
			$tbl .= "</tr>";
	}
	
	$tbl .= "</table>";
	echo $tbl;
?>



<?php
	include("footer.php");
?>