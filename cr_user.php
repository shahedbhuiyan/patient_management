<?php
	include("top.php");
	include("ini.php");
?>	
	
	<table align="center" cellspacing="0">
		<tr>
			<td colspan="3" style="background-color:#003300; text-align:center; font-family:'Microsoft JhengHei'; font-size:16px; color:white">Create User</td>
		</tr>
		
		<tr>
			<td style="font-family:tahoma; font-size:13px; text-align:left;">User Name</td>
			<td width="1">:</td>
			<td><input type="text" name="user" id="user" style="background-color:white"/></td>
		</tr>
		
		<tr>
			<td style="font-family:tahoma; font-size:13px; text-align:left;">Enter Password</td>
			<td>:</td>
			<td><input type="password" name="pass" id="pass" style="background-color:white;"/></td>
		</tr>
		
		<tr>
			<td style="font-family:tahoma; font-size:13px; text-align:left;">Re-Enter Password</td>
			<td>:</td>
			<td><input type="password" name="re-pass" id="re-pass" style="background-color:white;"/></td>
		</tr>
		
		<tr>
			<td colspan="3" style="text-align:center"><input type="submit" name="sub" value="Enter" style="width:70px;"/></td>
		</tr>
	</table>
	
<?	
	include("bottom.php");
?>