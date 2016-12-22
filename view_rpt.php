<?php
	include("ini.php");
	include("header.php");
?>
	<form action="view_rpt.php" method="post" name="frm">
	<table align="center" width="300">
		<tr><td colspan="3" height="20"></td></tr>	
		<tr>
			<td colspan="3" style="background-color:#006666; color:white; font-family:'Microsoft JhengHei'; font-size:14px; text-align:center">Serach Treamtent History</td>
		</tr>
		
		<tr>
			<td>Patient ID</td>
			<td>:</td>
			<td><input type="text" name="pid" id="pid" style="background-color:white" /></td>
		</tr>
		
		<tr>
			<td>From Date</td>
			<td>:</td>
			<td><input type="text" name="from" id="from" value="<?php echo date("Y-m-01"); ?>" style="background-color:white" /></td>
		</tr>
		
		<tr>
			<td>To Date</td>
			<td>:</td>
			<td><input type="text" name="to" id="to" value="<?php echo date("Y-m-d"); ?>" style="background-color:white" /></td>
		</tr>
		
		<tr>
			<td align="center" colspan="3"><input type="submit" id="sub" name="sub" value="Submit"/></td>
		</tr>
		
	</table>
	</form>
	
<?php

		
	if(isset($_POST['sub'])){
		$pid 			= $_POST['pid'];
		$name			= $_POST['name'];
		$from			= $_POST['from'];
		$to				= $_POST['to'];
		
		$sql = "SELECT * FROM prs WHERE pid = '$pid' AND dat>='$from' AND dat<='$to' ORDER BY dat";
		$rec = mysql_query($sql);
		while($row = mysql_fetch_array($rec)){
			$p_id 		= $row['pid'];
			$name		= $row['pname'];
			$hist 		= $row['history'];
			$phy_exm 	= $row['phy_exm'];
		}
		
		if($p_id != ''){
			echo "<table align = 'center' width = '300' border = '0' cellspacing = '0'>
					<tr><td colspan = '3' height = '10'></td></tr>
					<tr><td colspan = '3' style = 'font-family:tahoma; font-size:14px; color:white; background-color:#006666; text-align:center'>Sreach Result</td></tr>
					<tr><td align = 'center' style = 'border-right:1px solid black; border-bottom:1px solid black;'>$p_id </td><td align = 'center' style = 'border-right:1px solid black; border-bottom:1px solid black;'>$name</td><td align = 'right' style = 'border-bottom:1px solid black; width:90px'>";
				echo "<a href = '#' onclick = \"window.open('cust_his.php?id=$p_id&name=$name&from=$from&to=$to','','height=900,width=1000')\">Export to Excel</a>";
			echo "</tr></td></table>";
		}
		else{
			echo "<table align = 'center' width = '300'><tr><td align = 'center' style = 'font-size:15px; color:red; font-family:tahoma'>There is no data</td></tr></table>";
		}

	}

	
	include("footer.php");
?>
