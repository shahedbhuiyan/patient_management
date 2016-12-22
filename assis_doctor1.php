<?php
	include("ini.php");
	if(isset($_POST['sub'])){
		$pid 			= $_POST['pid'];
		$pname 			= $_POST['pname'];
		$fname			= $_POST['fname'];
		$mname			= $_POST['mname'];
		$dob			= $_POST['dob'];
		
		$age			= $_POST['age'];
		$age1			= $_POST['age1'];
		$age2			= $_POST['age2'];
		
		$mstatus		= $_POST['mstatus'];
		$sex			= $_POST['sex'];
		$paddr			= $_POST['paddr'];
		$pcontact		= $_POST['pcontact'];
		$email			= $_POST['email'];
		$reff			= $_POST['reff'];
		
		$gname			= $_POST['gname'];
		$gcontact		= $_POST['gcontact'];
		$gaddr			= $_POST['gaddr'];
		$dat 			= date("Y-m-d");
		
		$p				= $_POST['p'];
		$p1				= $_POST['p1'];
		$p2				= $_POST['p2'];
		
		$bp				= $_POST['bp'];
		
		
		$temp			= $_POST['temp'];
		$weight			= $_POST['weight'];
		
		$h1				= $_POST['h1'];
		$h2				= $_POST['h2'];
		
		$odema			= $_POST['odema'];
		$cyan			= $_POST['cyan'];
		$jaundice		= $_POST['jaundice'];
		$skin			= $_POST['skin'];
		$dehy			= $_POST['dehy'];
		$othr			= $_POST['othr'];
		
		
		$file_name 		= $_FILES['pic']['name'];
		$file_path 		= $_FILES['pic']['tmp_name'];
		$file_type 		= $_FILES['pic']['type'];
		$file_size 		= $_FILES['pic']['size'];
		
		if($file_size > 620000){
			$err = "File Size could not be more than 500 KB";
		}
		
		if(empty($err)){
			
			$ext 			= substr($file_name, -3);
			$file_name 		= $pid.".".$ext;
			move_uploaded_file($file_path, "photo/$file_name");
			
			if(isExists($pid, $dat) == false){
				echo $sql = "INSERT into assis_doctor SET pid = '$pid', pname = '$pname', fname = '$fname', mname = '$mname', dob = '$dob', sex = '$sex', age = '$age', age1 = '$age1', age2 = '$age2', paddress = '$paddr', pcontact = '$pcontact', email = '$email', reff = '$reff', guardian = '$gname', gaddress = '$gaddr', gcontact = '$gcontact', p = '$p', p1 = '$p1', p2 = '$p2', temp = '$temp', weight = '$weight', h1 = '$h1', h2 = '$h2', odema = '$odema', cyan = '$cyan', jaundice = '$jaundice', skin = '$skin', dehy = '$dehy', othrs = '$othr', photo = '$file_name', dat = '$dat', bp = '$bp', mstatus = '$mstatus'";
				mysql_query($sql);
				
				if(mysql_affected_rows() == 1){
					header("Location: ./view_pinfo.php?pid=$pid");
				}
			}
			else{
				$err = "This date patient is Already Exist's.";
			}
		}
		else{
			echo "<table align = 'center'><tr><td style = 'font-famaly:tahoma; font-size:15px; color:red'>Image size mustn't be more than 100 KB</td></tr></table>";
		}
	}
	

	
	include("assis_panel_head.php");
	
	$dat = date("Y-m-d");
	$sql = "select * from p_info where pid = '$id' AND dat = '$dat'";
	$rec = mysql_query($sql);
	while($row = mysql_fetch_array($rec)){
		$name		= $row['name'];
	}
	
	
		
	function isExists($pid, $dat){
		$sql = "select * from assis_doctor where pid = '$pid' AND dat = '$dat'";
		$rec = mysql_query($sql);
		$numRows = mysql_num_rows($rec);
		
		if($numRows>0){
			return true;
		}
		else{
			return false;
		}
	}

	echo "<table align = 'center'><tr><td><font color = 'red' face = 'courier new'>$err</font></td></tr></table>";
?>
<style type="text/css">
	input{
	width:150px;
	}
	select{
	width:150px;}
</style>
<table align="center" width="650" border="0">	
	<tr>
		<td style="font-size:13px; text-align:left; color:red; font-family:'Microsoft JhengHei';">Patient in Queue(<span id='counter'></span>)</td>
	</tr>
</table>

<form action="assis_doctor1.php" method="post" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellpadding="2" style="font-family:courier new; text-align:left; font-size:13px; background-color:#006666">	
	<tr>
		<td colspan="6" style="font-size:19px; text-align:left; color:white; font-weight:bold">Assistant Doctor</td>
	</tr>
	
	<tr>
		<td colspan="6" style="border-top:1px solid white">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" style="color:white">P_ID</td>
		<td width="1" style="color:white">:</td>
		<td><input type="text" readonly name="pid" id="pid" value="<?php echo $id; ?>" style="background-color:white;" /></td>
		
		<td width="150" align="left" style="color:white">Patient Name</td>
		<td width="1" style="color:white">:</td>
		<td><input type="text" name="pname" readonly id="pname" value="<?php echo $name; ?>" style="background-color:white;"/></td>
	</tr>
	
	<tr>
		<td style="color:white">Father's Name</td>
		<td style="color:white">:</td>
		<td><input type="text" name="fname" id="fname" style="background-color:white" /></td>
		<td style="color:white">Mother's Name</td>
		<td style="color:white">:</td>
		<td><input type="text" name="mname" id="mname" style="background-color:white" /></td>
	</tr>
	
	<tr>
		<td align="left" style="color:white">D.O.B</td>
		<td style="color:white">:</td>
		<td><input type="text" name="dob" id="dob" style=" background-color:white;"/></td>
		<td align="left" style="color:white">Sex</td>
		<td style="color:white">:</td>
		<td><select name="sex" id="sex">
			<option value=" ">----Select----</option>
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select></td>
	</tr>
	
	<tr>
		<td align="left" style="color:white" valign="top">Age</td>
		<td width="1" valign="top" style="color:white">:</td>
		<td valign="top" style="color:white"><input type="text" name="age" id="age" style="background-color:white; width:50px;" /> Y <input type="text" name="age1" id="age1" style="background-color:white; width:50px;" /> M <input type="text" name="age2" id="age2" style="background-color:white; width:50px;" /> D</td>
		<td valign="top" align="left" style="color:white">Mar. Status</td>
		<td width="1" style="color:white">:</td>
		<td><select name="mstatus" id="mstatus">
			<option value="">-----Select-----</option>
			<option value="M">Married</option>
			<option value="U">Unmarried</option>
		</select></td>
	</tr>
	
	<tr>
		<td style="color:white" valign="top">Patient Address</td>
		<td style="color:white">:</td>
		<td><textarea id="paddr" name="paddr" style="background-color:white"></textarea></td>
		<td style="color:white" valign="top">Contact No</td>
		<td style="color:white">:</td>
		<td valign="top"><input type="text" id="pcontact" name="pcontact" style="background-color:white" /></td>
	</tr>
	
	<tr>
		<td style="color:white" valign="top">E-mail</td>
		<td style="color:white">:</td>
		<td><input type="text" name="email" id="email" style="background-color:white" /></td>
		<td style="color:white" valign="top">Reffered By</td>
		<td style="color:white">:</td>
		<td valign="top"><input type="text" id="reff" name="reff" style="background-color:white" /></td>
	</tr>
	
	<tr>
		<td style="color:white" valign="top" colspan="6">
			<table style="color:white">
				<tr>
					<td style="color:white; text-align:left; font-size:15px; text-decoration:underline" colspan="3">Local Guardian Info.</td>
				</tr>
				<tr>
					<td style="color:white">Guardian Name</td>
					<td style="color:white">:</td>
					<td><input type="text" name="gname" id="gname" style="background-color:white;" /></td>
				</tr>
				
				<tr>
					<td style="color:white">Contact No</td>
					<td style="color:white">:</td>
					<td><input type="text" name="gcontact" id="gcontact" style="background-color:white;" /></td>
				</tr>
				
				<tr>
					<td style="color:white">Address</td>
					<td style="color:white">:</td>
					<td><textarea id="gaddr" name="gaddr" style="background-color:white;"></textarea></td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td style="color:white">Pulse</td>
		<td style="color:white">:</td>
		<td style="color:white" width="250px"><input type="text" id="p" name="p" style="background-color:white; width:40px;" /> /min <input type="text" name="p1" id="p1" style="background-color:white; width:40px;" />&nbsp;&nbsp;<input type="text" name="p2" id="p2" style="background-color:white; width:40px;" /> Volume</td>
		<td style="color:white">B.P</td>
		<td style="color:white">:</td>
		<td><input type="text" name="bp" id="bp" style="background-color:white" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Temp.</td>
		<td style="color:white">:</td>
		<td><input type="text" name="temp" id="temp" style="background-color:white" /></td>
		<td style="color:white">Weight</td>
		<td style="color:white">:</td>
		<td><input type="text" name="weight" id="weight" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Hight</td>
		<td style="color:white">:</td>
		<td style="color:white"><input type="text" name="h1" id="h1" style="background-color:white; width:40px;" /> cm <input type="text" name="h2" id="h2" style="background-color:white; width:40px;" /> inches</td>
		<td style="color:white">Odema</td>
		<td style="color:white">:</td>
		<td><input type="text" name="odema" id="odema" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Cyanosis</td>
		<td style="color:white">:</td>
		<td><input type="text" name="cyan" id="cyan" style="background-color:white;" /></td>
		<td style="color:white">Jaundice</td>
		<td style="color:white">:</td>
		<td><input type="text" name="jaundice" id="jaundice" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td style="color:white">Skin Lesion</td>
		<td style="color:white">:</td>
		<td><input type="text" name="skin" id="skin" style="background-color:white;" /></td>
		<td style="color:white">Dehydration</td>
		<td style="color:white">:</td>
		<td><input type="text" name="dehy" id="dehy" style="background-color:white;" /></td>
	</tr>
	
	<tr>
		<td style="color:white;">Others</td>
		<td style="color:white;">:</td>
		<td colspan="4"><input type="text" name="othr" id="othr" style="background-color:white; width:250px;"/></td>
	</tr>
	
	<tr>
		<td align="left" style="color:white" valign="top">Image</td>
		<td width="1" valign="top" style="color:white">:</td>
		<td valign="top" colspan="4"><input type="file" name="pic" id="pic" style="background-color:white;" /><span style="color:#FFFFFF; font-family:tahoma; font-size:11px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( Don't more 500 KB )</span></td>
	</tr>
	
	<tr>
		<td colspan="6" align="center"><input type="submit" name="sub" value="Save" style="background-color:white; width:70px"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" style="background-color:white; width:70px"/></td>
	</tr>
</table> 
</form>

<?
	include("footer.php");
?>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="select/common.js" type="text/javascript"></script>
<script src="select/jquery.editable-select.pack.js" type="text/javascript"></script>


<script src="js/auto_suggestion_2.js" type="text/javascript"></script>
<link href="css/auto_suggestion.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
	//var i = 1;
	//$("#symp").change(function() {
	
	$(document).ready(function() {
		$("#symp").UISugestion();
	});
	
	
function OnChange(){
	//alert("hi");
	var temp = $("#symptom").val();
	var val = $("#symp").val();
	var sep = "";
	if(temp.length>0) sep = ";  ";
	
	var text = temp + sep + val;
	$("#symptom").val(text);
	i++;
}
//});

	
	var updateCounter = function() {
		$.ajax({
			type:"POST",
			url:"prescription_sql.php",
			data:{action:'counter'},
			success:function(resp) {
				$("#counter").html(resp);
				
				setTimeout(updateCounter,3000);
			}
		});
	}
	
	setTimeout(updateCounter,3000);
	
	$(function() {
    $('.editable-select').editableSelect({
        bg_iframe: true,
        onSelect: function(list_item) {
          $('#results').html('List item text: '+ list_item.text() +'<br> \
          Input value: '+ this.text.val());
        }
      }
    );
    var select = $('.editable-select:first');
    var instances = select.editableSelectInstances();
    instances[0].addOption('');
  });
  if(!window.console || !window.console.log || !$.browser.mozilla) {
    window.console = {};
    window.console.log = function(str) { $('#debug').show().val($('#debug').val() + str +'\n'); };
  }
  var hidden_offset;
  function moveHidden() {
    var hidden = $('#hidden');
    hidden.show();
    $('#toggle_hidden').val('Hide');
    if(!hidden_offset) {
      hidden_offset = hidden.offset();
      hidden
        .css('position', 'absolute')
        .css('top', hidden_offset.top)
        .css('left', hidden_offset.left)
        .animate({top: 100, left: 400})
      ;
    } else {
      hidden.animate({top: hidden_offset.top, left: hidden_offset.left}, function() {
        hidden.css('position', 'static');
        hidden_offset = null;
      });
    }
  }
  function toggleHidden(btn) {
    var hidden = $('#hidden');
    if($('#hidden').is(':visible')) {
      hidden.hide();
      $(btn).val('Display');
    } else {
      hidden.show();
      $(btn).val('Hide');
    }
  }
  
  function kPress(event){
		var k = event.keyCode;
		alert(k);
		if(k==0) k = event.which;
		if(k==13) {
			//alert(k);
			//var text = document.getElementById('chat_text').value;
			//search_info();
		}
	}
</script>


<style type="text/css">
  .example .example-select {
    padding-top: 10px;
    padding-bottom: 10px;
    border-bottom: 1px dotted #CCC;
  }
  .example p {
    margin: 0;
    padding: 0;
  }
  .last {
    margin-bottom: 10px;
  }
  #comment-form {
    width: 100%;
  }
  </style>
	
