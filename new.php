<?php
	include("header.php");
	include("ini.php");
	
	function create_cust_id(){
		$sql = "SELECT MAX(pid) as pid FROM p_info";
		$rec = mysql_query($sql);
		var_dump($rec);
		if($row=mysql_fetch_array($rec)) {
			$pid = $row['pid'];
		}
		
		//$pid = substr($pid,-2);
		$pid++;
		
		//$patient = "P"."_".str_pad($pid,2,0,STR_PAD_LEFT);
		return $pid;
	}
	
	
	
	if(isset($_POST['sub'])){
		$pid 			= $_POST['pid'];
		$name 			= $_POST['name'];
		$loc 			= $_POST['loc'];
		$contact 		= $_POST['contact'];
		$time 			= $_POST['time'];
		$time2 			= $_POST['time2'];
		
		$time_ary 		= explode(" ",$time);
		$time 			= $time_ary[0].":00 ".$time_ary[1];
		//12 hour to 24 hour format time
		$time			= date("H:i:s", strtotime($time));
		
		$time2_ary 		= explode(" ",$time2);
		$time2 			= $time2_ary[0].":00 ".$time2_ary[1];
			//12 hour to 24 hour format time
		$time2				= date("H:i:s", strtotime($time2));
		
		$dat 			= $_POST['date'];
		
		//$file_name 		= $_FILES['pic']['name'];
		//$file_path 		= $_FILES['pic']['tmp_name'];
		//$file_type 		= $_FILES['pic']['type'];
		//$file_size 		= $_FILES['pic']['size'];
		
		//if($file_size > 100000){
			//$err = "File Size could not be more than 100 KB";
		//}
		
		//if(empty($err)){
			
			//$ext 			= substr($file_name, -3);
			//$file_name 		= $pid.".".$ext;
			//move_uploaded_file($file_path, "photo/$file_name");
			
			if(isExist($pid) == false){
				$sql = "insert into p_info set pid = '$pid', name = '$name', loc = '$loc', contact = '$contact', time = '$time', dat = '$dat', time2 = '$time2'";
				mysql_query($sql);
				
				if(mysql_affected_rows() == 1){
					echo "<table align = 'center'><tr><td><font size = '5' color = 'green' face = 'tahoma'>Data Insert Successfully</font></td></tr></table>";
				}
				else{
					echo "<table><tr><td><font size = '5' color = 'red' face = 'tahoma'>Data Insert Failed</font></td></tr></table>";
				}
			}
			else{
				echo "Patient is Already Exist";
			}
		//}
			
	}
	
	$id = create_cust_id();
	
?>
<form action="new.php" method="post" enctype="multipart/form-data">
<table align="center" width="400">
	<tr>
		<td align="center" colspan="3" style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white">New Patient Appointment</td>
	</tr>
	
	<tr>
		<td class="td1">Patient ID</td>
		<td>:</td>
		<td align="left"><input type="text" name="pid" id="pid" value="<?php echo $id; ?>" readonly style="background-color:white; text-align:center; background-color:#CCCCCC"/></td>
	</tr>

	<tr>
		<td class="td1">Name</td>
		<td>:</td>
		<td align="left"><input type="text" name="name" id="name" style="background-color:white;"/></td>
	</tr>
	
	<tr>
		<td class="td1">Location</td>
		<td>:</td>
		<td align="left"><input type="text" name="loc" id="loc" style="background-color:white;"/></td>
	</tr>
	
	<tr>
		<td class="td1">Contact No</td>
		<td>:</td>
		<td align="left"><input type="text" name="contact" id="contact" style="background-color:white;"/></td>
	</tr>
		
	<tr>
		<td class="td1">Date</td>
		<td>:</td>
		<td align="left"><input type="text" name="date" id="date" value="<?php echo date("Y-m-d"); ?>" style="background-color:white;"/></td>
	</tr>
	<!-- onfocus="showCalendarControl(this);" -->
	<tr>
		<td class="td1">Time Slot</td>
		<td>:</td>
		<td align="left"><input type="text" name="time" id="time" readonly="true" style="background-color:white; color:#999999; width:80px; text-align:center"/> - <input type="text" name="time2" readonly="true" style="background-color:white; width:80px; text-align:center; color:#999999;" id="time2" /></td>
	</tr>
	
	<tr>
		<td colspan="3" align="center"><input type="submit" name="sub" value="Submit"/></td>
	</tr>
</table>
</form>

<?php
function isExist($pid){
	$sql = "select * from p_info where pid = '$pid'";
	$rec = mysql_query($sql);
	$nuRows = mysql_num_rows($rec);
	
	if($nuRows>0){
		return true;
	}
	else{
		return false;
	}
}

include("footer.php");
?>

<style type="text/css">
	.td1{font-family:"Courier New", Courier, monospace; font-size:13px; text-align:left;}
</style>

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