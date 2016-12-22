<?php
		include("ini.php");
		if(isset($_POST['login'])){
			include("is_admin.php");
			
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
			$sql = "select * from user where user = '$user' AND pass = '$pass'";
			$rec = mysql_query($sql);
			$numRows = mysql_num_rows($rec);
			
			if($numRows == 1){
				$row = mysql_fetch_array($rec);
				$user = $row['user'];
				//echo $user;
				if(!session_id()){
					session_start();
					$_SESSION['seEmpid'] = $user;
				}
				
				if(in_array($user,$assis)){
					$_SESSION['userType'] = 'A';
				}
				
				if(in_array($user,$assis_doctor)){
					$_SESSION['userType'] = 'D';
				}
				
				if(in_array($user,$doctor)){
					$_SESSION['userType'] = 'MD';
				}
				
				
				//session_register('seEmpid');
				header("Location:./home.php");
			}
			else{
				echo "<table width = '900' border = '0' align = 'center'><tr><td align = 'center' style='color:#006666; font-family:tahoma; font-size:18px;'>Invalid Given Information</td></tr></table>";
			}
		}
	?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to eDoctor</title>
</head>
<center>
<body>
<form action="index.php" method="post">
	<table align="center" width="800" bgcolor="#006666" style="color:white"><tr><td style="font-family:'verdana'; font-size:25px; text-align:center"><font color="red">P</font>atient <font color="red">M</font>anagement <font color="red">S</font>ystem</td></tr></table>
	<table><tr><td height="30"></td></tr></table>
	<table border="0" cellspacing="0" width="800" style="text-align:left">
		<tr>
			<td>
			<a style='text-decoration:none; font-family:calibri; font-size:28px; color:#006633'>Prof. Dr. M.A Samad</a><br>
			<a style='text-decoration:none; font-family:calibri; font-size:13px; color:#000099'>MBBS (DMC), MD (NEPHROLOGY)</a><br>
			<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000; font-weight:bold'>Medicine & Kidney Specialist</a><br>
			<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000; font-weight:bold'>Specially Trained in Diabetes (BIRDEM)</a><br>
			<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000'>Professor, Department of Nephrology</a><br>
			<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000'>LABAID Specialized Hospital, Dhaka</a><br>
			<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000'>Moblie : 01711 - 888888</a><br>
			<a style='text-decoration:none; font-family:calibri; font-size:15px; color:#000000'>E-mail : dr.masamad@gmail.com</a>
			</td>
			<td></td>
		</tr>
	</table>
	<table><tr><td height="30"></td></tr></table>
	<table align="center" width="250" style="font-family:verdana; font-size:11px;">
		<tr>
			<td colspan="3" align="center" style="font-family:Verdana; color:white; font-size:16px; background-color:#006666">e<font color="red" style="font-style:italic">D</font>octor Login</td>
		</tr>
		<tr>
			<td align="left">User ID</td>
			<td width="2">:</td>
			<td><input type="text" name="user" id="user" style="background-color:white; text-align:center"/></td>
		</tr>
		
		<tr>
			<td align="left">Password</td>
			<td width="2">:</td>
			<td><input type="password" name="pass" id="pass" style="background-color:white; text-align:center"/></td>
		</tr>
		
		<tr>
			<td align="center" colspan="3"><input type="submit" name="login" value="LogIn" style="background-color:white"/></td>
		</tr>
	</table>
	
	<table><tr><td height="180"></td></tr></table>
	<table align="center" width="800" bgcolor="#006666" style="color:white;"><tr><td style="font:8pt 'Microsoft JhengHei'; text-align:right">developed by e-<font color="red">S</font>oft</td></tr></table>
	</form>
</body>
</center>
</html>
