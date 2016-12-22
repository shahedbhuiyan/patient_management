<?php
	include("ini.php");
	$dat = date("Y-m-d");
	
	$sql = "select * from payment where dat = '$dat'";
	$rec = mysql_query($sql);
	
	echo "<table align = 'center' width = '550' cellspacing = '0' border = '0' style = 'text-align:center; border-bottom:1px solid black'>
			<tr>
				<td colspan = '4' align = 'center' style = 'border-bottom:1px solid black; border-top:1px solid black; font-family:tahoma; font-size:15px; text-align:center'>Payment Details</td>
			</tr>";
	
	echo "<tr><td colspan = '4' style = 'text-align:right; font-family:tahoma; font-size:12px' height = '25' valign = 'middle'>"; echo $dt = formatDat($dat); echo "</td></tr>";		
	
	echo "<tr style = 'font-family:tahoma; font-size:13px;'>
		<td style = 'border-bottom:1px solid black; border-right:1px solid black;'>P_ID</td>
		<td style = 'border-bottom:1px solid black; border-right:1px solid black'>Name</td>
		<td style = 'border-bottom:1px solid black; border-right:1px solid black'>Contact</td>
		<td style = 'border-bottom:1px solid black;'>Taka</td>
	</tr>";
	
	while($row = mysql_fetch_array($rec)){
		$pid = $row['pid'];
		$name = $row['name'];
		$contact = $row['contact'];
		$taka = $row['taka'];
		
		echo "<tr>
			<td><tt>$pid</tt></td>
			<td><tt>$name</tt></td>
			<td><tt>$contact</tt></td>
			<td><tt>$taka</tt></td>
		</tr>";
		
		$tk += $taka;
	}
	
	echo "</table>";
	
	echo "<table align = 'center' width = '550' border = '0' cellspacing = '1' style = 'color:green'><tr><td style = 'text-align:right; width:50%'><tt>Total Taka:</tt></td> <td style = 'text-align:left'><tt>$tk/=</tt></td></tr></table>";
	
	echo "<table align = 'center' width = '550' border = '0' cellspacing = '0'><tr><td style = 'text-align:right;'><a href = '#' onclick = 'JavaScript:window.print()' style = 'font-family:tahoma; font-size:10px;'>Print</a></td></tr></table>";
	
	
	
	function formatDat($dat){
		$dat_ary = explode("-",$dat);
		$day = $dat_ary[2];
		$mnth = $dat_ary[1];
		$yr = $dat_ary[0];
		
		$mnth_ary = array('01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec');
		
		return $day."/".$mnth_ary[$mnth]."/".$yr;
	}
?>
