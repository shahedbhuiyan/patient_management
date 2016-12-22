<?php
	include("top.php");
	include("ini.php");
	
	if(isset($_POST['sub'])){
		$gr_name = $_POST['gr_name'];
		$drugs = $_POST['drugs'];
		
		$sql = "insert into gr set g_name = '$gr_name', drug = '$drugs'";
		mysql_query($sql);
		
		if(mysql_affected_rows() == 1){
			echo "<table align = 'center'><tr><td><font color = 'green' face = 'tahoma' size = '4'>Data Insert Succcessfully.</font></td></tr></table>";
		}
		else{
			echo "<table align = 'center'><tr><td><font color = 'red' face = 'tahoma' size = '4'>Data Insert Failed.</font></td></tr></table>";
		}
	}
?>
	
<form action="cr_group.php" method="post">
	<table align="center" border="0" width="300" style="font-family:courier new; font-size:13px;" cellspacing="0">
		<tr>
			<td colspan="3" style="background-color:#006666; font-family:'Microsoft JhengHei'; text-align:center; font-size:16px; color:white;">Create Group</td>
		</tr>
		
		<tr>
			<td align="left">Group Name</td>
			<td width="1">:</td>
			<td align="left"><input type="text" name="gr_name" id="gr_name" style="background-color:white" /></td>
		</tr>
		
		<tr>
			<td align="left">Drug's</td>
			<td>:</td>
			<td align="left"><textarea id="drugs" name="drugs" style="background-color:white"></textarea></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" name="sub" value="Submit"/></td>
		</tr>
	</table>	
</form>

<?
	include("bottom.php");
?>