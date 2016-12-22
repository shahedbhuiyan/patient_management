 <?php
	include("ini.php");
	
	if(isset($_POST['sub'])){
		$pid = $_POST['pid'];
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$loc = $_POST['location'];
		$dat = $_POST['date'];
		$paymt = $_POST['payment'];
		
		if(isPaied($pid,$dat) == false){
			$qry = "insert into payment set pid = '$pid', name = '$name', loc = '$loc', contact = '$contact', dat = '$dat', taka = '$paymt'";
			mysql_query($qry);
			
			if(mysql_affected_rows() == 1){
				echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '4' color = 'green'>Data Insert Successfylly.</font></td></tr></table>";
			}
			else{
				echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '4' color = 'red'>Data Insert Failed.</font></td></tr></table>";
			}
		}
		else{
			echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '4' color = 'red'>Already Taka Paid.</font></td></tr></table>";
		}
	}

	
	
	$dat = date("Y-m-d");
	
	$sql = "select * from p_info where dat = '$dat' AND present = 'Y' ORDER BY pid";
	$rec = mysql_query($sql);
	$pid_ary = array();
	while($row = mysql_fetch_array($rec)){
		$pid = $row['pid'];
		
		$pid_ary[$pid] = $pid;
	}
	
	if(isset($_POST['pid'])){
		$pid = $_POST['pid'];
	}
		$sql2 = "select * from p_info where pid = '$pid'";
		$rec2 = mysql_query($sql2);
		while($row2 = mysql_fetch_array($rec2)){
			$name = $row2['name'];
			$contact = $row2['contact'];
			$loc = $row2['loc'];
		}
	//}
	
?>
	<table align="center" width="330"><tr><td height="50">&nbsp;</td></tr></table>
	
	<table align="center" border="0" width="330" cellspacing="0" style="font-family:'Microsoft JhengHei'; font-size:13px; text-align:left">
		<tr>
			<td colspan="3" align="center" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:17px; text-align:center; background-color:#006666; color:white">Payment</td>
		</tr>
		
		<tr><td colspan="3" height="5"></td></tr>
		
		<tr>
			<td valign="top" width="100">Select P_ID</td>
			<td valign="top" width="1">:</td>
			<td height="10" valign="top">
			<form action="payment.php" method="post" name="frm">
			<select name="pid" id="pid" onChange="javascript:frm.submit()" style="width:150px;">
				<?php
					foreach($pid_ary as $key=>$value){
						if($pid == $key){
							echo "<option value = '$key' selected>$value</option>";	
						}
						else{
							echo "<option value = '$key'>$value</option>";
						}
					}
				?>
			</select>
			</form>
			
			
			</td>
		</tr>
		</table>
		<form action="payment.php" method="post">
		<input type="hidden" name="pid" id="pid" value="<?php echo $pid; ?>" />
		<table align="center" border="0" width="330" cellspacing="0" style="font-family:'Microsoft JhengHei'; font-size:13px; text-align:left">
		<tr>
			<td width="100">Name</td>
			<td width="1">:</td>
			<td><input type="text" name="name" id="name" value="<?php echo $name; ?>" style="background-color:white"/></td>
		</tr>
		
		<tr>
			<td>Contact</td>
			<td>:</td>
			<td><input type="text" name="contact" id="contact" value="<?php echo $contact; ?>" style="background-color:white"/></td>
		</tr>
		
		<tr>
			<td>Location</td>
			<td>:</td>
			<td><input type="text" name="location" id="location" value="<?php echo $loc; ?>" style="background-color:white"/></td>
		</tr>
		
		<tr>
			<td>Select Payment</td>
			<td>:</td>
			<td><select name="payment" id="payment" style="width:150px; text-align:center">
				<option value="">-------Select-------</option>
				<option value="100">100/=</option>
				<option value="200">200/=</option>
				<option value="300">300/=</option>
				<option value="400">400/=</option>
				<option value="500">500/=</option>
				<option value="600">600/=</option>
				<option value="700">700/=</option>
				<option value="800">800/=</option>
				<option value="900">900/=</option>
				<option value="1000">1000/=</option>
				<option value="0">Free</option>
			</select></td>
		</tr>
		
		<tr>
			<td>Date</td>
			<td>:</td>
			<td><input type="text" name="date" id="date" value="<?php echo date("Y-m-d"); ?>" readonly style="background-color:gray; color:#CCCCCC"/></td>
		</tr>
		
		<tr>
			<td colspan="3" align="center"><input type="submit" name="sub" id="sub" value="Pay" style="width:70px; background:#FFFFFF"/></td>
		</tr>
	</table>
	</form>
	
	<table align="center" border="0" width="520" cellspacing="1" style="font-family:'Microsoft JhengHei'; font-size:13px; background-color:#006666; color:black; text-align:center">
		<tr>
			<td bgcolor="#ffffff">P_ID</td>
			<td bgcolor="#ffffff">Name</td>
			<td bgcolor="#ffffff">Location</td>
			<td bgcolor="#ffffff">Contact</td>
			<td bgcolor="#ffffff">Taka</td>
		</tr>
		<?php
			//if(mysql_affected_rows() == 1){
				echo $sh = showData($pid,$dat);
			//}
		?>
	</table>
	
<?php
	function isPaied($pid,$dat){
		$sql = "select * from payment where pid = '$pid' AND dat = '$dat'";
		$rec = mysql_query($sql);
		
		$numRows = mysql_num_rows($rec);
		
		if($numRows>0){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	function showData($pid,$dat){
		$sql = "select * from payment where pid = '$pid' AND dat = '$dat'";
		$rec = mysql_query($sql);
		
		while($row = mysql_fetch_array($rec)){
			$pid = $row['pid'];
			$name = $row['name'];
			$contact = $row['contact'];
			$loc = $row['loc'];
			$taka = $row['taka'];
		}
		
		echo "<tr style = 'font-size:11px'>
			<td bgcolor = 'white'>$pid</td>
			<td bgcolor = 'white'>$name</td>
			<td bgcolor = 'white'>$contact</td>
			<td bgcolor = 'white'>$loc</td>
			<td bgcolor = 'white'>$taka</td>
		</tr>";
	}
?>