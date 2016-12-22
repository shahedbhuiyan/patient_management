<?php
	include("header.php");
	include("ini.php");
	
	if(isset($_POST['sub'])){
		$date 	= $_POST['dat'];
		$time	= $_POST['time'];
		
		$time_ary 		= explode(" ",$time);
		$time 			= $time_ary[0].":00 ".$time_ary[1];
		//12 hour to 24 hour format time
		$time			= date("H:i:s", strtotime($time));
		
		$sql = "insert into set_time set dat = '$date', time2 = '$time'";
		mysql_query($sql);
		
		if(mysql_affected_rows() == 1){
			echo "<table align = 'center'><tr><td style = 'font-family:tahoma; font-size:14px; color:green'>Data Save Successfully</td></tr></table>";
		}
		else{
			echo "<table align = 'center'><tr><td style = 'font-family:tahoma; font-size:14px; color:red'>Data Loading Failed</td></tr></table>";
		}
	}
	
?>
<table><tr><td height="15"></td></tr></table>
<form action="time_setup.php" method="post" onsubmit="return onSub()">
<table align="center" border="0" width="300" bgcolor="#006666" cellspacing="0" style="font-family:'Microsoft JhengHei'; font-size:13px;">
	<tr>
		<td colspan="3" align="center" style="font-size:15px; text-align:center; color:white">Time Setup</td>
	</tr>
	<tr>
		<td bgcolor="white" width="50" align="left">Date</td>
		<td bgcolor="white">:</td>
		<td align="left" bgcolor="white"><input type="text" name="dat" id="dat" value="<?php echo date("Y-m-d"); ?>" style="background-color:white"/></td>
	</tr>
	<tr>
		<td bgcolor="white" align="left">Time</td>
		<td bgcolor="white">:</td>
		<td align="left" bgcolor="white"><input type="text" id="time" name="time" style="background-color:white"/><span style="font-size:10px">hh:mm am/pm</span></td>
	</tr>
	
	<tr>
		<td colspan="3" align="center" bgcolor="white"><input type="submit" value="Submit" name="sub"/></td>
	</tr>
</table>
</form>

<?
	include("footer.php");
?>

<script type="text/javascript">
	function onSub(){
		var dat = document.getElementById('dat').value;
		if(dat.length == ''){
			alert('Date is null');
			return false
		}
		
		var time = document.getElementById('time').value;
		if(time.length == ''){
			alert('Time is null');
			return false;
		}
		
		return true;
	}
</script>