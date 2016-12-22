<?php
if(!session_id())
	session_start();
include("header.php");
include("ini.php");

$id					= $_POST['pid'];
$date_from 			= $_POST['date_from'];
$date_to			= $_POST['date_to'];
$chk 				= $_POST['chk'];

if($chk != ''){
	$seq = "'".implode("','",$chk)."'";
}

$_SESSION['seq'] = $seq;

	
$sql = "SELECT * FROM test_report WHERE test_id IN($seq) AND pid = '$id' AND rpt_date>='$date_from' AND rpt_date<='$date_to'";
$rec = mysql_query($sql);

$numRows = mysql_num_rows($rec);
if($numRows>0){
	echo "<table><tr><td height = '15'></td></tr></table>";
	echo "<table width = '500' border = '0' align ='center'>
			<tr>
				<td style = 'text-align:right'><a href = '#' onclick = \"window.open('exp_to_xls.php?id=$id&sdate=$date_from&edate=$date_to','','height=400,width=500')\">Export to Excel</a></td>
			</tr>
	</table>";

	
}

echo "<table><tr><td height = '20'></td></tr></table>";
echo "<table width='500' border='0' style = 'text-align:center' align = 'center' cellspacing = '1' bgcolor = 'black'>";
echo "<tr>
	<td colspan = '4' style = 'background-color:#006666; color:white; text-align:center; font-size:16px;'>Data Analysis Sheet</td>
</tr>";
echo "<tr style = 'font-weight:bold'>
		<td bgcolor = 'white'>Patient ID</td>
		<td bgcolor = 'white'>Report Date</td>
		<td bgcolor = 'white'>Test Name</td>
		<td bgcolor = 'white'>Test Value</td>
	</tr>";	
while($row=mysql_fetch_array($rec)) {
	echo "<tr>
			<td bgcolor = 'white'>$row[pid]</td>
			<td bgcolor = 'white'>$row[rpt_date]</td>";
			
			$invst_name = inVstName($row['test_id']);
			
			echo "<td bgcolor = 'white'>$invst_name</td>";
			echo "<td bgcolor = 'white'>$row[test_value]</td>
		</tr>";
}
echo "</table>";
include("footer.php");

function inVstName($invst_id){
	$sql = "select * from investigation_list where invst_id = '$invst_id'";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$invst_name = $row['investigation'];
	}
	return $invst_name;
}

?>