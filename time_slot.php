<?php
	include("header.php");
	include("ini.php");
	
	
	
	
?>

<table align="center" width="300" border="0">
	<tr>
		<td colspan="3" style="text-align:center; font-family:'Microsoft JhengHei'; font-size:15px; background:#006666; color:white">Set Time Slot</td>
	</tr>
	<tr>
		<td style="font-family:'Courier New', Courier, monospace; text-align:left; font-size:13px; width:100px">Time</td>
		<td>:</td>
		<td><input type="text" name="tm" id="tm" style="background-color:white; text-align:center;" /></td>
	</tr>
	
	<tr>
		<td style="font-family:'Courier New', Courier, monospace; text-align:left; font-size:13px;">Date</td>
		<td>:</td>
		<td><input type="text" name="dat" id="dat" style="background-color:white; text-align:center"/></td>
	</tr>	
	
	<tr>
		<td colspan="3" align="center"><input type="submit" name="sub" value="Accept"/></td>
	</tr>
</table>

<?
	include("footer.php");

?>