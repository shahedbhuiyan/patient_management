<?php
include("header.php");
include("ini.php");

$sdate = date("Y-m-01");
$edate = date("Y-m-d");


echo "<table align = 'center' width = '300' border = '0' style = 'text-align:center'>
	<tr>
		<td style = 'font-size:16px; color:white; background-color:#006666'>View Investigation</td>
	</tr>
</table>";

$sql = "SELECT * FROM investigation_catagory";
$rec = mysql_query($sql);
echo "<form action='test_rpt2.php' method='post' onSubmit = 'return formValidation()'>";
	
	echo "<table width = '350' border = '0' align = 'center' style = 'padding-left:50px;'>";
	
	echo "<tr>
		<td>Patient ID : </td>
		<td><input type='text' name='pid' id='pid' style='background-color:white'/></td>
	</tr>";
	
	echo "<tr>
		<td>From Date : </td>
		<td><input type='text' name='date_from' id='date_from' style='background-color:white' value = '$sdate'/></td>
	</tr>";
	
	echo "<tr>
		<td>To Date : </td>
		<td><input type='text' name='date_to' id='date_to' style='background-color:white' value = '$edate'/></td>
	</tr>";
	
	echo "<tr><td colspan = '2'>";
echo "<ul class='parent'>";
while($row=mysql_fetch_array($rec)) {
	$invst_cata_id = $row["invst_cata_id"];
	echo "<li class = 'sister' style = 'font-size:11px; list-style:decimal; cursor:pointer'>$row[cata_of_invst]";
	
		echo getTestName($invst_cata_id);
				//echo "<li>item</li>";
	echo "</li>";
}
echo "</ul>
</form>";
echo "</td></tr>";
echo "<tr>
	<td colspan = '2' align = 'center'><input type='submit' name='submit' value='View' style = 'background-color:white'/></td>
</tr>";
echo "</table>";
function getTestName($type_id) {
	$sql = "SELECT * FROM investigation_list WHERE invst_cata_id = '$type_id'";
	$rec = mysql_query($sql);
	echo "<ol class='child'>";
	while($row = mysql_fetch_array($rec)){
		$invst_id = $row['invst_id'];
		echo "<li><input type='checkbox' name = 'chk[]' value = '$invst_id'>$row[investigation]</li>";
	}
	echo "</ol>";
}

include("footer.php");
?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
$(".parent .sister").click(function() {
	//$(this).find(".child").toggle("slow");
	
	var display = $(this).find(".child").css("display");
	
	if(display == "none") { $(this).find(".child").slideDown("slow"); }
	else { $(this).find(".child").slideUp("slow"); }
	
	//$(this).find(".child").slideDown("slow"); 
	//$(this).find(".child").slideUp("slow");
});

function formValidation(){
	var id = document.getElementById('pid').value;
	
	if(id == ''){
		alert('Patient ID is NULL');
		return false;
	}
	return true;
}
</script>
<style>
.child { display:none; list-style:none; font-size:13px; }
.child1 {display:block; cursor:pointer}
</style>