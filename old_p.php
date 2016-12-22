<?php
	include("header.php");
	include("ini.php");
	
	$sql = "select * from p_info";
	$rec = mysql_query($sql);
	$p_ary = array('---select---');
	while($row = mysql_fetch_array($rec)){
		$pid = $row['pid'];
		
		$p_ary[$pid] = $pid;
	}
	
	
	if(isset($_POST['sub'])){
		$pid = $_POST['pid'];
		$name = $_POST['name'];
		$loc = $_POST['loc'];
		$contact = $_POST['contact'];
		$time = $_POST['time'];
		$time2 = $_POST['time2'];
		
		$time_ary 		= explode(" ",$time);
		$time 			= $time_ary[0].":00 ".$time_ary[1];
		//12 hour to 24 hour format time
		$time			= date("H:i:s", strtotime($time));
		
		$time2_ary 		= explode(" ",$time2);
		$time2 			= $time2_ary[0].":00 ".$time2_ary[1];
			//12 hour to 24 hour format time
		$time2				= date("H:i:s", strtotime($time2));
		
		$dat 			= $_POST['date'];
		
		$date = $_POST['date'];
		
		$sql = "insert into p_info set pid = '$pid', name = '$name', contact = '$contact', loc = '$loc', time = '$time', time2 = '$time2', dat = '$date'";
		mysql_query($sql);
		
		if(mysql_affected_rows() == 1){
			echo "<table align = 'center'><tr><td><font size = '5' color = 'green' face = 'tahoma'>Data Insert Successfully</font></td></tr></table>";
		}
		else{
			echo "<table align = 'center'><tr><td><font size = '5' color = 'red' face = 'tahoma'>Data Insert Failed</font></td></tr></table>";
		}
	}
	
	
	//for view patient value
	if(isset($_POST['pid'])){
		$pid = $_POST['pid'];
		
		$sql = "select * from p_info where pid = '$pid'";
		$rec = mysql_query($sql);
		
		while($row = mysql_fetch_array($rec)){
			$pid = $row['pid'];
			$name = $row['name'];
			$contact = $row['contact'];
			$loc = $row['loc'];
		}
	}
	
?>
<form action="old_p.php" method="post" name="frm">
<table align="center" border="0" width="400" cellspacing="0">
	<tr>
		<td colspan="3"  style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white">Old Patient Appointment</td>
	</tr>
	
	<tr>
		<td width="130" style="font-family:courier new; font-size:13px; text-align:left">Select P_ID</td>
		<td width="1">:</td>
		<td align="left"><select id="pid" name="pid" onChange="JavaScript:frm.submit()" style="width:130px; text-align:center">
			<?php
				foreach($p_ary as $key=>$value){
					if($pid == $key){
						echo "<option value = '$key' selected>$value</option>";
					}
					else{
						echo "<option value = '$key'>$value</option>";
					}
				}
			?>
		</select>
		</td>
	</tr>
</table>
</form>

<form action="old_p.php" method="post">
<input type="hidden" name="pid" value="<?php echo $pid; ?>"/>
<table width="400" border="0" cellspacing="0" align="center">
	<tr>
		<td width="130" style="font-family:courier new; font-size:13px; text-align:left">Name</td>
		<td>:</td>
		<td align="left"><input type="text" name="name" value="<?php echo $name; ?>" style="background-color:white;"/></td>
	</tr>
	
	<tr>
		<td style="font-family:courier new; font-size:13px; text-align:left">Location</td>
		<td>:</td>
		<td align="left"><input type="text" name="loc" value="<?php echo $loc; ?>" style="background-color:white;"/></td>
	</tr>
	
	<tr>
		<td style="font-family:courier new; font-size:13px; text-align:left">Contact No</td>
		<td>:</td>
		<td align="left"><input type="text" name="contact" value="<?php echo $contact; ?>" style="background-color:white;"/></td>
	</tr>
	
	<tr>
		<td style="font-family:courier new; font-size:13px; text-align:left">Date</td>
		<td>:</td>
		<td align="left"><input type="text" name="date" id="date"  value="<?php echo date("Y-m-d"); ?>" style="background-color:white;"/></td>
	</tr>
	<!-- onfocus="showCalendarControl(this);" -->
	<tr>
		<td style="font-family:courier new; font-size:13px; text-align:left">Time Slot</td>
		<td>:</td>
		<td align="left"><input type="text" name="time" id="time" readonly style="background-color:white; text-align:center; width:80px; color:#999999;"/> - <input type="text" readonly name="time2" id="time2" style="background-color:white; text-align:center; width:80px; color:#999999;"/></td>
	</tr>
	
	<tr>
		<td colspan="3" align="center"><input type="submit" name="sub" value="Submit"/></td>
	</tr>
</table>
</form>
<?php
	include("footer.php");
?>


<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
	//$("#time").focus(function(){
		var date = $("#date").val();
		$.ajax({
			type:"post",
			url:"service.php",
			data:{date:date},
			dataType:"json",
			success:function(resp) {
				//alert(resp);
				//var resp_ary = resp.split("|");
				$("#time").val(resp.time_from.replace(":00",""));
				$("#time2").val(resp.time_to.replace(":00",""));
			}
		});
	//});
});
</script>