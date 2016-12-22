<?php
	include("header.php");
	include("ini.php");
	
	echo $dat = date("Y-m-d");
	
	echo "<table align = 'center' border = '0' width = '300' cellspacing = '1' style = 'background-color:#006666;'>";
		echo "<tr>
			<td colspan = '3' style = 'text-align:center; font-family:Microsoft JhengHei; font-size:15px; color:white'>Patient List</td>
		</tr>";
	$sql = "select * from assis_doctor where dat = '$dat'";
	$rec = mysql_query($sql);
	$i = 0;
	while($row = mysql_fetch_array($rec)){
		$i++;
		$pid = $row['pid'];
		$name = $row['pname'];

		
		$isReader = checkReader($pid);
		if($isReader){
			$css = "style='background-color:#FFFFFF; cursor:pointer; font-family:courier new; font-size:13px;'";
			$onc = "onClick=\"window.location='head_doctor1.php?pid=$pid'\"";
		} else {
			$css = "style='background-color:#EEEEEE; cursor:pointer; font-family:courier new; font-size:13px;'";
			$onc = "onClick=\"window.location='head_doctor1.php?pid=$pid'\"";
		}
		
		
		echo "<tr $css $onc>
				<td>$i</td>
				<td>$pid</td>
				<td style = 'text-align:right'>$name</td>
			</tr>";
	}
	
	echo "</table>";
	
?>	



<?php
	include("footer.php");
	
	function checkReader($pid){
		$sql = "select * from stat where pid = '$pid'";
		$rec = mysql_query($sql);
		while($row = mysql_fetch_array($rec)){
			$status = $row['status'];
		}
		
		if(@$status == 1){
			return true;
		}
		else{
			return false;
		}
	}
?>
<style>
	.t{background:black;}
</style>