<?php
include("ini.php");

$date = $_POST['date'];

$sql = "select max(time2) as time2 from p_info WHERE dat = '$date'";
$rec = mysql_query($sql);
if($row = mysql_fetch_array($rec)) {
	$time_from = $row['time2'];
}

if(!$time_from) {
	$sql = "select * from set_time where dat='$date'";
	$rec = mysql_query($sql);
	if($row = mysql_fetch_array($rec)) {
		$time_from = $row['time2'];
	}
}

$time_to = date("h:i:s A",strtotime($date." ".$time_from." +30 minutes"));
$time_from = date("h:i:s A",strtotime($date." ".$time_from));

echo "{
	time_from:'$time_from',
	time_to:'$time_to'
}";

?>