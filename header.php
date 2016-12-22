<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>eDcotor</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="select/common.js" type="text/javascript"></script>
<script src="select/jquery.editable-select.pack.js"></script>
<link rel="stylesheet" type="text/css" href="select/jquery.editable-select.css">
<link rel="stylesheet" type="text/css" href="select/style.css">

<style type="text/css">
	a{text-decoration:none}
	.td:hover{background-color:#009999}
	a:hover{color:white;}
</style>
</head>
<center>
<body>
<?php
	include("ini.php");
	function get_doctor_name(){
		$sql = "select * from doctor_info";
		$rec = mysql_query($sql);
		if($row = mysql_fetch_array($rec)){
			$dr_name = $row['name'];
		}
		return $dr_name;
	}
?>
<table  height="600" border="0" width="915" bgcolor="#006666" cellspacing="1">
				
			<tr>
					<td colspan="6" height="40" bgcolor="#006665" style="font-family:'Microsoft JhengHei'; font-size:30px; color:white; text-align:center"><? echo $dr_name = get_doctor_name(); ?></td>
				</tr>
				
			<tr>
				
				<td height="110" bgcolor="white" align="center">
					
			<table border="0" cellspacing="0" width="700">
				<tr>
						<td height="90" valign="top" bgcolor="white" style="text-align:center; font-family:'Microsoft JhengHei'">
						<? //if($_SESSION['userType'] = 'A') {?>
							<table align="left" style="background-color:#006666;" cellspacing="1" width="150" border="0">
								<tr><td style="font-size:15px; font-family:'Microsoft JhengHei'; text-align:center; color:white;">Personal Assistant</td></tr>
								<tr><td bgcolor="white" class="td"><a href="new.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">New Appointment</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="old_p.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">Old Patient Appointment</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="time_setup.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">Time Setup</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="view_app.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">View Appointment</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="#" style="font-family:'Microsoft JhengHei'; font-size:12px;" onClick="window.open('payment.php','','width=550,height=450')">Patient Payment</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="#" style="font-family:'Microsoft JhengHei'; font-size:12px;" onClick="window.open('view_payment.php','','width=650,height=550')">Total Payment</a></td></tr>
							</table>
						
						</td>
						<? //} else { ?>
						<td width="130"></td>
						<td align="center" valign="top" bgcolor="white" style="text-align:center; font-family:'Microsoft JhengHei'">
						
							<table style="background-color:#006666;" cellspacing="1" width="150">
								<tr><td style="font-size:15px; font-family:'Microsoft JhengHei'; text-align:center; color:white;">Assistant Doctor</td></tr>
								<tr><td bgcolor="white" class="td"><a href="assis_doctor.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">View Todays Patient</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="view_edit_assis.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">View & Edit Patient</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="#" style="font-family:'Microsoft JhengHei'; font-size:12px;">Print Prescription</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="index.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">Log Out</a></td></tr>
							</table>
						
						</td>
						<td width="130"></td>
						
						<td valign="top" bgcolor="white" style="text-align:center; font-family:'Microsoft JhengHei'">
							<table style="background-color:#006666;" cellspacing="1" width="150">
								<tr><td style="font-size:15px; font-family:'Microsoft JhengHei'; text-align:center; color:white;">Doctor</td></tr>
							<tr><td bgcolor="white" class="td"><a href="view_patient.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">View Assis. Doctor</a></td></tr>
								<tr><td bgcolor="white" class="td"><a href="view_rpt.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">View Report</a></td>
								<tr><td bgcolor="white" class="td"><a href="test_rpt.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">Data Analysis</a></td>
								<tr><td bgcolor="white" class="td"><a href="#" onClick="window.open('payment_01.php','','width=550,height=450')" style="font-family:'Microsoft JhengHei'; font-size:12px;">Patient Payment</a></td>
								<tr><td bgcolor="white" class="td"><a href="view_app.php" style="font-family:'Microsoft JhengHei'; font-size:12px;">View Appointment</a></td></tr>
							</table>
						
						</td>

						<? //} ?>
				</tr>
				</table>
		</td>
	</tr>
	<tr>
		<td valign="top" colspan="3" bgcolor="white">
		