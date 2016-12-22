<?php
	include("top.php");
	include("ini.php");
	
	if(isset($_POST['sub'])){
		$name = $_POST['drname'];
		
		if(isExist() == false){
			$sql = "insert into doctor_info set name = '$name'";
			mysql_query($sql);
			
			if(mysql_affected_rows() == 1){
				echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '5' color = 'green'>Data Insert Successfully</font></td></tr></table>";
			}
			else{
				echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '5' color = 'red'>Data Insert Failed</font></td></tr></table>";
			}
		}
		else{
			echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '5' color = 'red'>Data Already Exist.</font></td></tr></table>";
		}
	}
	
?>
<form action="add_dr.php" method="post">
<table align="center">
	<tr>
		<td colspan="3" style="font-family:'Microsoft JhengHei'; font-size:16px; text-align:center; background-color:#003300; color:white">Add Dr. Name</td>
	</tr>
	<tr>
		<td style="font-family:'Microsoft JhengHei'; font-size:13px; text-align:left">Name</td>
		<td width="1">:</td>
		<td align="left"><input type="text" name="drname" id="drname" style="background-color:white"/></td>
	</tr>
	
	<tr>
		<td colspan="3" align="center"><input type="submit" name="sub" value="Submit"/></td>
	</tr>
</table>
</form>

<?
	function isExist(){
		$sql = "select * from doctor_info";
		$rec = mysql_query($sql);
		
		$numRows = mysql_num_rows($rec);
		if($numRows>0){
			return true;
		}
		else{
			return false;
		}
	}
	
	include("bottom.php");
?>