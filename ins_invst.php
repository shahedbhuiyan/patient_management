<?php
	include("head_doctor1.php");
	
	function getInvstCata(){
		$invst_ary = array();
		$sql = "select * from investigation_catagory order by cata_of_invst";
		$rec = mysql_query($sql);
		while($ln = mysql_fetch_array($rec)){
			$invst_cata_id		= $ln['invst_cata_id'];
			$cata_of_invst		= $ln['cata_of_invst'];
			
			$invst_ary[$invst_cata_id] = $cata_of_invst;
		}
		
		return $invst_ary;
	}
	
	$invst_ary = getInvstCata();

echo "<input type = 'hidden' name = 'pid' id = 'pid' value = '$pid'>";
echo "<input type = 'hidden' name = 'prs_dat' id = 'prs_dat' value = '$dat'>";
?>
<table><tr><td height="10"></td></tr></table>
<table width="400" align="center" border="0" cellspacing="0" style="text-align:center">
	<tr>
		<td style="background-color:#006666; color:white; font-size:15px;">Add Investigation</td>
	</tr>
	<tr>
		<td>
		<select name="invst_cata" id="invst_cata" style="background-color:white; width:250px; text-align:left">
			<option value="" selected="selected">--------------Select--------------</option>
		<?php 
			foreach($invst_ary as $k=>$v){
				echo "<option value = '$k'>$v</option>";
			}
		?>
		</select>
		</td>
	</tr>
	
	<tr>
		<td id="show"></td>
	</tr>
	
	<tr>
		<td align="left" style="padding-left:71px;" id="sh0">Report Date : <input type="text" name="rpt_dat" id="rpt_dat" style="width:150px; background-color:#CCCCCC; color:black"></td>
	</tr>
	
	<tr>
		<td id="sh" align="left" style="padding-left:71px;">Test Value : <input type="text" name="invst_val" id="invst_val" style="width:150px; background-color:#CCCCCC; color:black"></td>
	</tr>
	
	<tr>
		<td style="text-align:center"><input type="button" value="Save" name="svae" id="save" style="background-color:white; width:66px; font-weight:bold"></td>
	</tr>
	
</table>

<?php
	include("footer.php");
?>
<script type="text/javascript">
	$("#invst_cata").change(function(){
		var val = $(this).val();
		$.ajax({
			type: "POST",
			url: "prescription_sql.php",
			data: {action:'show_invst', id:val},
			success: function(resp){
				document.getElementById('show').innerHTML = resp;
				if(val != ''){
					$("#show").slideDown("slow");
					$("#sh").slideDown("slow");
					$("#sh0").slideDown("slow");
				}
				else{
					$("#show").slideUp("slow");
					$("#sh").slideUp("slow");
					$("#sh0").slideDown("slow");
				}	
			}
		});
	});
	
	$("#save").click(function(){
			var id					= document.getElementById('pid').value;
			var invst_cata_id 		= document.getElementById('invst_cata').value;
			var invst_id			= document.getElementById('invst_id').value;
			var invst_val			= document.getElementById('invst_val').value;
			var rpt_dat				= document.getElementById('rpt_dat').value;
			var	prs_dat				= document.getElementById('prs_dat').value;
			//alert(+ invst_val+" "+ invst_cata_id +" "+invst_id);
			$.ajax({
				type: "POST",
				url: "prescription_sql.php",
				data: {action:'invst_save', id:id, invst_cata_id:invst_cata_id, invst_id:invst_id, invst_val:invst_val, rpt_dat:rpt_dat, prs_dat:prs_dat },
				success: function(resp){
				 //alert(resp);
				 	if(resp != ''){
						alert("Data Save Successfully");
					}
					else{
						alert("Data Loading Failed");
					}
				}
			});
		}
	);
</script>

<style type="text/css">
	#show{ display:none; }
	#sh{ display:none; }
	#sh0{ display:none }
</style>