<?php
	include("top.php");
	include("ini.php");
	
	if(isset($_POST['sub'])){
		$bname = $_POST['bname'];
		$gname = $_POST['gname'];
		$cata = $_POST['cata'];
		$mg = $_POST['mg'];
		
		$sql = "insert into drug_list set brand = '$bname', generic = '$gname', cata = '$cata', mg = '$mg'";
		mysql_query($sql);
		
		if(mysql_affected_rows() == 1){
			echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '4' color = 'green'>Drug Insert Successfully</td></tr></table>";
		}
		else{
			echo "<table align = 'center'><tr><td><font face = 'tahoma' size = '4' color = 'red'>Drug Insert Failed</td></tr></table>";
		}
	}
	
	
	echo "
	<form action = 'add_drug.php' method = 'post'>
	<table align = 'center'>
		<tr>
			<td colspan = '3' style = 'background-color:#006666; text-align:center; font-family:Microsoft JhengHei; font-size:15px; color:white'>Insert Drug</td>
		</tr>
		<tr>
			<td style = 'font-family:Microsoft JhengHei; font-size:13px; text-align:left'>Brand Name</td>
			<td>:</td>
			<td style = 'font-family:Microsoft JhengHei; font-size:13px; text-align:left'><input type = 'text' name = 'bname' id = 'bname' style = 'background-color:white'/></td>
		</tr>
		<tr>
			<td style = 'font-family:Microsoft JhengHei; font-size:13px; text-align:left'>Generic Name</td>
			<td>:</td>
			<td style = 'font-family:Microsoft JhengHei; font-size:13px; text-align:left'><input type = 'text' name = 'gname' id = 'gname' style = 'background-color:white'/></td>
		</tr>
		<tr>
			<td style = 'font-family:Microsoft JhengHei; font-size:13px; text-align:left'>Catagory</td>
			<td>:</td>
			<td style = 'font-family:Microsoft JhengHei; font-size:13px; text-align:left'><select name = 'cata' id = 'cata' style = 'width:150px'>
				<option value = ''>-------Select-------</option>
				<option value = 'Cap'>Capsule</option>
				<option value = 'Tab'>Tablet</option>
				<option value = 'Syrup'>Syrup</option>
			</select></td>
		</tr>
		<tr>
			<td style = 'font-family:Microsoft JhengHei; font-size:13px; text-align:left'>MG</td>
			<td>:</td>
			<td style = 'font-family:Microsoft JhengHei; font-size:13px; text-align:left'><input type = 'text' name = 'mg' id = 'mg' style = 'background-color:white'/></td>
		</tr>
		
		<tr>
			<td colspan = '3' align = 'center'><input type = 'submit' name = 'sub' value = 'Submit'/></td>
		</tr>

	</table>
	</form>
	";
	
	include("bottom.php");
?>