<?php
	include("head_doctor1.php");
	
	$dat = date("Y-m-d");
	
	$sql3 = "select * from assis_doctor where pid = '$pid' AND dat = '$dat'";
	$rec3 = mysql_query($sql3);
	while($row_one = mysql_fetch_array($rec3)){
		$pid 			= $row_one['pid'];
		$pname 			= $row_one['pname'];
		$fname			= $row_one['fname'];
		$mname			= $row_one['mname'];
		$dob			= $row_one['dob'];
		
		$age			= $row_one['age'];
		$age1			= $row_one['age1'];
		$age2			= $row_one['age2'];
		
		$age 			= $age."y-".$age1."m-".$age2."d";
		
		$mstatus		= $row_one['mstatus'];
		$sex			= $row_one['sex'];
		$paddr			= $row_one['paddress'];
		$pcontact		= $row_one['pcontact'];
		$email			= $row_one['email'];
		$reff			= $row_one['reff'];
		
		$gname			= $row_one['guardian'];
		$gcontact		= $row_one['gcontact'];
		$gaddr			= $row_one['gaddress'];
		//$dat 			= date("Y-m-d");
		
		$p				= $row_one['p'];
		$p1				= $row_one['p1'];
		$p2				= $row_one['p2'];
		
		$p 				= $p."/min".$p1.", ".$p2." Volume";
		
		$bp				= $row_one['bp'];
		
		$temp			= $row_one['temp'];
		$weight			= $row_one['weight'];
		
		$h1				= $row_one['h1'];
		$h2				= $row_one['h2'];
		
		$h				= $h1." cm - ".$h2." inch";
		
		$odema			= $row_one['odema'];
		$cyan			= $row_one['cyan'];
		$jaundice		= $row_one['jaundice'];
		$skin			= $row_one['skin'];
		$dehy			= $row_one['dehy'];
		$othr			= $row_one['othrs'];
		$pic			= $row_one['photo'];
	}
	
	/*
	$sql4 = "select * from assis_doctor2 where pid = '$pid' AND dat = '$dat'";
	$rec4 = mysql_query($sql4);
	while($row4 = mysql_fetch_array($rec4)){
		$name = $row4['pname'];
		//$age = $row4['age'];
		$sign = $row4['sign'];
		$bp = $row4['bp'];
		$pls = $row4['pls'];
		$othr = $row4['othr'];
		$clinical_ds = $row4['clinical_ds'];
		$diagnoscase = $row4['diagnoscase'];
		$dat = $row4['dat'];
	}
	*/
	$drg_ary = getDrug();
	
	function getDrug(){
		$sql = "select * from drug_list ORDER BY brand";
		$rec = mysql_query($sql);
		$drg_ary = array();
		while($row = mysql_fetch_array($rec)){
			$id = $row['id'];
			$drug = $row['brand'];
			$generic = $row['generic'];
			$cata = $row['cata'];
			$mg = $row['mg'];
			
			$dg_name = $drug."  ".$mg;
			
			$drg_ary[$id] = $dg_name;
		}
		
		return $drg_ary;
	}
	
	$gr_ary = getGroup();
	
	function getGroup(){
		$sql = "select * from group_list";
		$rec = mysql_query($sql);
		$gr_ary = array();
		while($row = mysql_fetch_array($rec)){	
			$id = $row['id'];
			$g_name = $row['g_name'];
			$drug = $row['drug'];
			
			$gr_ary[$id] = $g_name;
		}
		
		return $gr_ary;
	}
	
	$invst_ary = InvstGation();
	
	function InvstGation(){
		$sql = "select * from investigation_catagory";
		$rec = mysql_query($sql);
		$invst_ary = array();
		while($row = mysql_fetch_array($rec)){
			$id				= $row['invst_cata_id'];
			$invst_name		= $row['cata_of_invst'];
			
			$invst_ary[$id] = $invst_name; 
		}
		return $invst_ary;
	}
	
	
	$day_gap_ary = dayGap();
	
	function dayGap(){
		$sql = "select * from day_gap";
		$rec = mysql_query($sql);
		$day_gap_ary = array();
		while($row = mysql_fetch_array($rec)){
			$id = $row['id'];
			$day_gap = $row['day_gap'];
			
			$day_gap_ary[$id] = $day_gap;
		}
		
		return $day_gap_ary;
	}
	
	$dur_ary = DuraTion();
	
	function DuraTion(){
		$sql = "select * from duration";
		$dur_ary = array();
		$rec = mysql_query($sql);
		while($row = mysql_fetch_array($rec)){
			$id 		= $row['id'];
			$duration	= $row['duration'];
			
			$dur_ary[$id] = $duration;
		}
		
		return $dur_ary;
	}
	
	$drug_cata = drugCata();
	
	function drugCata(){
		$sql = "select * from drug_cata";
		$rec = mysql_query($sql);
		$drug_cata = array();
		while($row = mysql_fetch_array($rec)){
			$id 	= $row['id'];
			$cata	= $row['cata_name'];
			
			$drug_ary[$id] = $cata;
		}
		
		return $drug_ary;
	}
	
	if(isset($_POST['cata'])){
		$cata = $_POST['cata'];
	}
		@$InvstList_ary = getInvstList($cata);
		
		function getInvstList($cata){
			$sql = "select * from investigation_list where invst_cata_id = '$cata'";
			$rec = mysql_query($sql);
			$InvstList_ary = array();
			$i = 0;
			while($row = mysql_fetch_array($rec)){
				$invList	= $row['investigation']; //investigation
				//echo $invList;
				$i++;
				$InvstList_ary[$i] = $invList;
			}
			return $InvstList_ary;
		}
	
	
?>

<span class="edit" style="display:none">E</span>
<table><tr><td height="10"></td></tr></table>
<table align="center" border="0" width="900" cellspacing="0">
	<tr>
		<td width="250" valign="top">
			<table width="250">
				<tr>
					<td style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white;">Patient Image</td>
				</tr>
				<tr>
					<td><?php echo "<img src = 'photo/$pic' height = '150' width = '150' />"; ?></td>
				</tr>
				<tr>
					<td style="font-family:'Microsoft JhengHei'; font-size:12px; text-align:left;"><input type="checkbox" name="pic" id="pic" value="<?php echo $pic ?>" />Click to add image</td>
				</tr>
			</table>
			
			<table width="250" cellspacing="0" border="0">
				<tr>
					<td style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white;">Investigation</td>
				</tr>
				<tr>
					<td height="130" valign="top">
						<table>
							<tr>
								<td>
								
									<select name="cata" id="cata" style="width:250px; background-color:white">
										<option value="">-----------Select-----------</option>
					
										<?php
				
											foreach(@$invst_ary as $k=>$v){
												if(@$cata == @$k){
													echo "<option value = '$k' selected>$v</option>";
												}
												else{
													echo "<option value = '$k'>$v</option>";
												}	
											}
							
										?>	
									</select>							
								</td>
							</tr>
							<tr>
								<td id="sh"></td>
							</tr>
							<tr>
								<td><textarea id="invst" name="invst" style="height:100px; width:100%; text-align:justify; background-color:white"></textarea></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>

			
			<table width="250">
				<tr>
					<td style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white;">Symptom's</td>
				</tr>
				<tr>
					<td><textarea id="symp1" name="symp1" style="width:100%; height:100px; background-color:white; text-align:justify"><?php echo @$symp;  ?></textarea></td>
				</tr>
				<tr>
					<td style="font-family:'Microsoft JhengHei'; font-size:12px; text-align:left;"><input type="checkbox" name="symp" id="symp" value="<?php echo @$symp; ?>" />Click to add Symptom's</td>
				</tr>
			</table>
			
			<table width="250" cellspacing="0">
				<tr>
					<td style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white;">History</td>
				</tr>
				<tr>
					<td><textarea id="history" name="history" style="width:100%; height:100px; background-color:white"><? echo $history; ?></textarea></td>
				</tr>
				<tr>
					<td align="left" style="font-family:'Microsoft JhengHei'; font-size:12px; text-align:left;"><input type="checkbox" name="his" id="his" value="<? echo $history; ?>"/>Click to add History</td>
				</tr>
			</table>
		
			<table width="250" cellpadding="0">
				<tr>
					<td style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white;">Physical Examination</td>
				</tr>
				<tr>
					<td><textarea id="phys" name="phys" style="width:100%; height:100px; background-color:white; text-align:justify"><? echo "Pulse : ".$p.";  "."B.P : ".$bp.";  "."Height : ".$h.";  "."Temp : ".$temp.";  "."Height : ".$height.";"; ?></textarea></td>
				</tr>
				<tr>
					<td align="left" style="font-family:'Microsoft JhengHei'; font-size:12px; text-align:left;"><input type="checkbox" name="phy" id="phy" value="<? echo $sign.",".$bp.",".$pls."  ".$othr; ?>"/>Click to add Physical Examination</td>
				</tr>
			</table>
			
			<table width="250" cellspacing="0">
				<tr>
					<td style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white;">Clinical Diagnosis</td>
				</tr>
				<tr>
					<td><textarea id="cls" name="cls" style="width:100%; height:100px; background-color:white"><? echo $clinical_ds; ?></textarea></td>
				</tr>
				<tr>
					<td align="left" style="font-family:'Microsoft JhengHei'; font-size:12px; text-align:left;"><input type="checkbox" name="cls_diag" id="cls_diag" value="<? echo $clinical_ds; ?>"/>Click to add Clinical Diagnosis</td>
				</tr>
			</table>
			
			<table width="250" cellspacing="0" border="0">
				<tr>
					<td style="background-color:#006666; font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white;">Known case of</td>
				</tr>
				<tr>
					<td><textarea id="diag_cs" name="diag_cs" style="width:100%; height:100px; background-color:white"><? echo $diagnoscase; ?></textarea></td>
				</tr>
				
				<tr>
					<td align="left" style="font-family:'Microsoft JhengHei'; font-size:12px; text-align:left;"><input type="checkbox" name="diag_cs_of" id="diag_cs_of" value="<? echo $diagnoscase; ?>"/>Click to add Diagnoscase of</td>
				</tr>
			</table>
		</td>
			
		<td valign="top">
			<table border="0" style="width:100%">
				<tr>
					<td style="font-family:'Microsoft JhengHei'; font-size:15px; text-align:center; color:white; background-color:#006666;">Prescription</td>
				</tr>
				<tr>
					<td height="90">
						<table style="width:100%; height:100%" border="0">
							<tr>
								<td valign="top">
									<input type="text" name="cat" id="cat" placeholder = " _Drug_ _Catagory_ " option="single" style="width:180px; text-align:center"/>
									<!--select name="cat" id="cat" style="width:190px;">
										<?php
											$cat_selector = "";
											foreach($drug_cata as $id=>$val){
												$cat_selector .= "<option value = \"$val\">$val</option>";	
											}
										?>
									</select-->
									<script>
										var cat_selector = '<?php echo "$cat_selector"; ?>';
									</script>
								</td>
							</tr>
							<tr>
								<td valign="top">
								<input type='text' id="drug" placeholder = " _Drug_ _List_ " style="text-align:center; width:180px;" name="drug" option="single">
								<!--select id="drug" name="drug" style="width:180px;">
								<?php
								
								$drug_selector = "";
								
								foreach($drg_ary as $key=>$value){
									$drug_selector .= "<option value = \"$value\">$value</option>";
								}
								
								//echo $drug_selector;
								
								?>
								</select-->
								<script>
									var drug_selector = '<?php echo "$drug_selector"; ?>';
								</script>
								</td>
								<td valign="top">
								<input  id="meal" name="meal" placeholder = "_Meal_" style="width:180px; text-align:center" option="single">
								<!--select id="meal" name="meal" style="width:190px;">
								<?php
									$meal_selector = "";
									$meal_selector .= '<option value="">----Meal----</option>';
									$meal_selector .= '<option value="Before Meal">Before Meal</option>';
									$meal_selector .= '<option value="After Meal">After Meal</option>';
								//echo $meal_selector;	
								?>
								</select-->
								<script>
								var meal_selector = '<?php echo "$meal_selector"; ?>';
								</script>
								</td>
								<td valign="top">
								<input type="text" id="group" name="group" placeholder = "__Group__" style="width:180px; text-align:center" option="single" />
								<!--select id="group" name="group" style="width:190px;">
								<?php
								$group_selector = "";
								$group_selector .= '<option value="">-------Select_Group-------</option>';
									
								foreach($gr_ary as $key=>$value){
									$group_selector .= "<option value = \"$key\">$value</option>";
								}
								//echo $group_selector;
								?>
								</select-->
								<script>
								var group_selector = '<?php echo "$group_selector"; ?>';
								</script>
								</td>
							</tr>
							
							<tr>
								<td><select id="dose" name="dose" style="width:190px;">
								<?php
									$dose_selector = "";
									$dose_selector .= '<option value="">----Dose----</option>';
									$dose_selector .= '<option value="1+1+1">1+1+1</option>';
									$dose_selector .= '<option value="1+1+0">1+1+0</option>';
									$dose_selector .= '<option value="1+0+1">1+0+1</option>';
									$dose_selector .= '<option value="0+1+1">0+1+1</option>';
									$dose_selector .= '<option value="1+0+1">1+0+1</option>';
									$dose_selector .= '<option value="0+1+0">0+1+0</option>';
									$dose_selector .= '<option value="0+0+1">0+0+1</option>';
									$dose_selector .= '<option value="1+0+0">1+0+0</option>';
									
									$dose_selector .= '<option value="&frac12;+0+&frac12;">0+0+&frac12;</option>';
									$dose_selector .= '<option value="&frac12;+0+&frac12;">&frac12;+0+0</option>';
									$dose_selector .= '<option value="&frac12;+0+&frac12;">0+&frac12;+0</option>';
									$dose_selector .= '<option value="&frac12;+0+&frac12;">&frac12;+&frac12;+0</option>';
									$dose_selector .= '<option value="&frac12;+0+&frac12;">&frac12;+0+&frac12;</option>';
									$dose_selector .= '<option value="0+&frac12;+&frac12;">0+&frac12;+&frac12;</option>';
									$dose_selector .= '<option value="&frac12;+0+0">&frac12;+0+0</option>';
									$dose_selector .= '<option value="&frac12;+&frac12;+&frac12;">&frac12;+&frac12;+&frac12;</option>';
								
									echo $dose_selector;
								
								?>
								</select>
								<script>
								var dose_selector = '<?php echo "$dose_selector"; ?>';
								</script>
								</td>
								<td>
								<input type="text" id="gap" name="gap" style="width:180px; text-align:center;" placeholder = "__Gap__" option = "single" />
								<!--select id="gap" name="gap" style="width:190px;">
								<?php
								$gap_selector = "";
								foreach($day_gap_ary as $k=>$v){
									$gap_selector .= "<option value = \"$v\">$v<option>";
								}
								//echo $gap_selector;
								?>
								</select-->
								<script>
								var gap_selector = '<?php echo "$gap_selector"; ?>';
								</script>
								</td>
								<td>
								<input type="text" id="duration" name="duration" style="width:180px; text-align:center" placeholder = "__Duration__" option = "single" />
								<!--select id="duration" name="duration" style="width:190px;">
								<?php
									$duration_selector = "";
									foreach($dur_ary as $k1=>$v1){
										$duration_selector .= "<option value=\"$v1\">$v1</option>";	
									}
									
									//echo $duration_selector;
								?>
								</select-->
								<script>
								var duration_selector = '<?php echo "$duration_selector"; ?>';
								</script>
								</td>
							</tr>
							<tr><td colspan="3" align="right" style="padding-right:9px;"><input type="button" id="enter" name="enter" onclick="sendMsg()" value="Enter" style="width:100px;" /></td></tr>
							<tr><td colspan="3" height="5"></td></tr>
							<tr>
								<td colspan="3" style="font-family:'Microsoft JhengHei'; font-size:15px; color:white; background-color:#006666; text-align:center">Drug's Details</td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:left"><font size="6" face="tahoma" color="black">R<sub style="color:red">x</sub></font></td>
							</tr>
							<tr>
								<td colspan="3" style="border:1px inset; height:400px; padding-left:35px;" valign="top" id='mainContainer'>
								<!-- dummy work -->
								<?php
								$sql = "SELECT * FROM prescription WHERE patient_id='$pid' AND dat = '$dat'";
								$rec = mysql_query($sql);
								while($row = mysql_fetch_array($rec)) {
									$cat = $row['cat'];
									$drug = $row['drug'];
									$dose = $row['dose'];
									$gap = $row['gap'];
									$meal = $row['meal'];
									$duration = $row['duration'];
									?>							
								<div class="row">
								<div class="item"><table border="0" cellspacing="0" width="500" style="text-align:left; font:10pt Arial, Helvetica, sans-serif;">
									<tr>
										<td colspan="4" class="cat"><?php echo $cat; ?></td>
									</tr>
									<tr>
										<td colspan="4" class="drug"><?php echo $drug; ?></td>
									</tr>
									<tr>
										<td width="40"></td>
										<td class="dose"><?php echo $dose; ?></td>
										<td class="gap"><?php echo $gap; ?></td>
										<td class="meal"><?php echo $meal; ?></td>
										<td class="duration"><?php echo $duration; ?></td>
									<td width="30"><a href="javascript://" class="edit">E</a> | <a href="javascript://" class="close">X</a></td></tr>
								</table>
								</div>
								<div style="display:none">
									<table border="0" cellspacing="0" width="500" style="text-align:left; font:10pt Arial, Helvetica, sans-serif;">
										<tr>
											<td colspan="4"><select class="sel_cat"><?php echo $cat_selector; ?></select></td>
										</tr>
										<tr>
											<td colspan="4"><select class="sel_drug"><?php echo $drug_selector; ?></select></td>
										</tr>
										<tr>
											<td width="40"></td>
											<td><select class="sel_dose"><?php echo $dose_selector; ?></select></td>
											<td><select class="sel_gap"><?php echo $gap_selector; ?></select></td>
											<td><select class="sel_meal"><?php echo $meal_selector; ?></select></td>
											<td><select class="sel_duration"><?php echo $duration_selector; ?></select></td>
										<td width="30"><a href="javascript://" class="ok">OK</a></td></tr>
									</table>
									<script>
										$(".sel_cat").val('<?php echo "$cat"; ?>');
										$(".sel_drug").val('<?php echo "$drug"; ?>');
										$(".sel_dose").val('<?php echo "$dose"; ?>');
										$(".sel_gap").val('<?php echo "$gap"; ?>');
										$(".sel_meal").val('<?php echo "$meal"; ?>');
										$(".sel_duration").val('<?php echo "$duration"; ?>');
									</script>
								</div><br>
								</div>	
								<?php
								}
								?>
	
								<!-- dummy work -->
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" style="padding-top:30px">
						<table border="0" cellspacing="0">
							<tr>
								<td>
									<table border="0" cellspacing="0" cellpadding="2">
										<tr>
											<td align="right"><img src="img/1.jpg" /></td>
											<td width="1">:</td>
											<td><select name="one" id="one">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/2.jpg" /></td>
											<td>:</td>
											<td><select name="two" id="two">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/17.jpg" /></td>
											<td><select id="three" name="three" style="width:50px;">
												<option value="">-----Select-----</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select></td>
											<td valign="bottom"><img src="img/11.jpg" /></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/4.jpg" /></td>
											<td>:</td>
											<td><select id="four" name="four">
												<option value="">-----Select-----</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/6.jpg" /></td>
											<td>:</td>
											<td><select id="five" name="five">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/5.jpg" /></td>
											<td>:</td>
											<td><select id="six" name="six">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/7.jpg" /></td>
											<td><select id="seven" name="seven" style="width:50px;">
												<option value="">-----Select-----</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
											</select></td>
											<td><img src="img/8.jpg" /></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/9.jpg" /></td>
											<td>:</td>
											<td><select id="eight" name="eight">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/110.jpg" /></td>
											<td>:</td>
											<td><select id="nine" name="nine">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/15.jpg" /></td>
											<td>:</td>
											<td><select id="ten" name="ten">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										
										<tr>
											<td align="right"><img src="img/16.jpg" /></td>
											<td>:</td>
											<td><select id="eleven" name="eleven">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/14.jpg" /></td>
											<td>:</td>
											<td><select id="twelve" name="twelve">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
										
										<tr>
											<td align="right"><img src="img/18.jpg" /></td>
											<td>:</td>
											<td><select id="thirteen" name="thirteen">
												<option value="">-----Select-----</option>
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="text-align:center" align="center"><a href="javascript://" id='save' style="font-family:'Microsoft JhengHei'; font-size:17px;"><input type="button" style="background-color:white; width:150px" value="Print" /></a>
		</td>
	</tr>
</table>
<?php
echo "<a href='#' id='print' onclick=\"window.open('report.php?id=$pid&dat=$dat','','height=900,width=1200,scrollbars=yes')\"></a>";
//onclick="window.open('add_drug.php','','height=500,width=600')" 
	include("footer.php");
?>


<script src="js/auto_suggestion.js" type="text/javascript"></script>
<link href="css/auto_suggestion.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">


$("#cata").change(function(){
	var cata = $(this).val();
	
	$.ajax({
		type: "POST",
		url: "prescription_sql.php",
		data: {action:'getCata', id:cata},
		success: function(msg){
			//alert(msg);
			document.getElementById('sh').innerHTML = msg;
			
				$("#invst1").change(function() {
					var temp = $("#invst").val();
					var val = $(this).val();
					//alert(val);
					var sep = "";
					//alert(val);
					if(temp.length>0) sep = ";  ";
					
					var text = temp + sep + val;
					$("#invst").val(text);
				});

		}
	});
});



/*
function kPress(event)
{
	var k = event.keyCode;
	if(k==0) k = event.which;
	
	if(k==13) {
		//alert(k);
		//var text = document.getElementById('chat_text').value;
		sendText();
	}
}
*/

function sendMsg()
{
	var cat = document.getElementById('cat').value;
	var drug = document.getElementById('drug').value;
	var meal = document.getElementById('meal').value;
	var group = document.getElementById('group').value;
	var dose = document.getElementById('dose').value;
	var gap = document.getElementById('gap').value;
	var duration = document.getElementById('duration').value;
	
	$.ajax({
		type: "POST",
		url: "prescription_sql.php",
		data: {action:'drug_data', cat:cat, drug:drug, meal:meal, group:group, dose:dose, gap:gap, duration:duration},
		success: function(mssg){
			//alert(mssg);
		}
	});
	 
	 var text = "";
	 text += '<div class="row">'
	 		+'<div class="item"><table border="0" cellspacing="0" width="500" style="text-align:left; font:10pt Arial, Helvetica, sans-serif;">'
				+'<tr>'
					+'<td colspan="4" class="cat">'+cat+'</td>'
				+'</tr>'
				+'<tr>'
					+'<td colspan="4" class="drug">'+drug+'</td>'
				+'</tr>'
				+'<tr>'
					+'<td width="40"></td>'
					+'<td class="dose">'+ dose +'</td>'
					+'<td class="gap">'+gap+'</td>'
					+'<td class="meal">'+meal+'</td>'
					+'<td class="duration">'+duration+'</td>'
				+'<td width="30"><a href="javascript://" class="edit">E</a> | <a href="javascript://" class="close">X</a></td></tr>'
			+'</table></div>'
			+ '<div style="display:none">'+getEditForm(cat, drug, dose, gap, meal, duration)+'</div><br>';
			+'</div>';
			
	 $("#mainContainer").append(text);
	 
	 $(".sel_cat").val(cat);
	 $(".sel_drug").val(drug);
	 $(".sel_dose").val(dose);
	 $(".sel_gap").val(gap);
	 $(".sel_meal").val(meal);
	 $(".sel_duration").val(duration);
	 
	 
	 $(".close").unbind('click').bind('click', function() {
	 	//alert('test');
		if(confirm('Do you want to delete?')) {
			$(this).parents('.row').remove();
		}
	});
	
	 $(".edit").unbind('click').bind('click', function() {
	 	//alert('');
		$(this).parents('.row').find('div:first').hide();
		$(this).parents('.row').find('div:last').show();
	});
	
	$(".ok").unbind('click').bind('click', function() {
		$(this).parents('.row').find('div:first').show();
		$(this).parents('.row').find('div:last').hide();
		//alert($(this).parents('.row').find('.sel_drug').val());
		$(this).parents('.row').find('.cat').html($(this).parents('.row').find('.sel_cat').val());
		$(this).parents('.row').find('.drug').html($(this).parents('.row').find('.sel_drug').val());
		$(this).parents('.row').find('.dose').html($(this).parents('.row').find('.sel_dose').val());
		$(this).parents('.row').find('.gap').html($(this).parents('.row').find('.sel_gap').val());
		$(this).parents('.row').find('.meal').html($(this).parents('.row').find('.sel_meal').val());
		$(this).parents('.row').find('.duration').html($(this).parents('.row').find('.sel_duration').val());
		//gap_selector
	});
 }
 
 $(document).ready(function(){
/* 	
	$(".close").live('click', function() {
		if(confirm('Do you want to delete?')) {
			$(this).parents('.row').remove();
		}
	});

	$(".edit").live('click', function() {
	
		$(this).parents('.row').find('div:first').hide();
		$(this).parents('.row').find('div:last').show();
	});

	$(".ok").live('click', function() {
		$(this).parents('.row').find('div:first').show();
		$(this).parents('.row').find('div:last').hide();
		//alert($(this).parents('.row').find('.sel_drug').val());
		$(this).parents('.row').find('.cat').html($(this).parents('.row').find('.sel_cat').val());
		$(this).parents('.row').find('.drug').html($(this).parents('.row').find('.sel_drug').val());
		$(this).parents('.row').find('.dose').html($(this).parents('.row').find('.sel_dose').val());
		$(this).parents('.row').find('.gap').html($(this).parents('.row').find('.sel_gap').val());
		$(this).parents('.row').find('.meal').html($(this).parents('.row').find('.sel_meal').val());
		$(this).parents('.row').find('.duration').html($(this).parents('.row').find('.sel_duration').val());
		//gap_selector
	});
*/
	
	$("#save").click(function() {
		if(confirm('Do you want to save?')){
			var totalRow = $(".row").length;
			var tempRowLength = 0;
			$.ajax({
				   type: "POST",
				   url: "prescription_sql.php",
				   data: {action:'delete', pid:'<?php echo $pid; ?>'},
				   success: function(msg){
				   //alert((".row").length);
				   //return;
					 $(".row").each(function() {
					 	var cat_val = $(this).find('.cat').html();				 
						var drug_val = $(this).find('.drug').html();
						var dose_val = $(this).find('.dose').html();
						//alert(dose_val);
						var meal_val = $(this).find('.meal').html();
						var gap_val = $(this).find('.gap').html();
						var duration_val = $(this).find('.duration').html();
						
						$.ajax({
						   type: "POST",
						   url: "prescription_sql.php",
						   data: {action:'save', pid:'<?php echo $pid; ?>', drug:drug_val, dose:dose_val, meal:meal_val, gap:gap_val, duration:duration_val, cat:cat_val},
						   success: function(msg){
							 alert(msg);
							 tempRowLength++;
							 
							 if(tempRowLength == totalRow) {
								doNextAjax();
							 }
							 
						   }
						 });
					});
				   }
				});
				
				
		}
		
	});
	
});

function doNextAjax() {
	var his = document.getElementById('his').checked;
		if(his == true) { var his = document.getElementById('history').value; } else { var his = ''; }

	var phy = document.getElementById('phy').checked;
		if(phy == true) { var phy = document.getElementById('phys').value; } else { var phy = ''; } 
		
	var cls_diag = document.getElementById('cls_diag').checked;
		if(cls_diag == true) { var cls_dia = document.getElementById('cls').value; } else { var cls_dia = ''; }
		
	var dia = document.getElementById('diag_cs_of').checked;
		if(dia == true) { var dia = document.getElementById('diag_cs').value; } else { var dia = ''; }
		
	var symptom	= document.getElementById('symp').checked;
		if(symptom == true){ var symp = document.getElementById('symp1').value; } else { var symp = ''; }
		
	var pic = document.getElementById('pic').checked;
		if(pic == true) { var pic = document.getElementById('pic').value; } else { var pic = ''; }
		
	var invst 		= document.getElementById('invst').value;
	var one			= document.getElementById('one').value;
	var two 		= document.getElementById('two').value;
	var three		= document.getElementById('three').value;
	var four		= document.getElementById('four').value;
	var five		= document.getElementById('five').value;
	var six			= document.getElementById('six').value;
	var seven		= document.getElementById('seven').value;
	var eight		= document.getElementById('eight').value;
	var nine		= document.getElementById('nine').value;
	var ten			= document.getElementById('ten').value;
	var eleven		= document.getElementById('eleven').value;
	var	twelve		= document.getElementById('twelve').value;
	var thirteen	= document.getElementById('thirteen').vlaue; 
	
	$.ajax({
		type: "POST",
		url: "prescription_sql.php",
		data: {action:'delete1', pid:'<?php echo $pid; ?>'},
		success: function(msg){
			//alert(msg);
		}
	});
	
	$.ajax({
		type:"POST",
		url:"prescription_sql.php",
		data:{action:'save1', pid:'<?php echo $pid ?>', name:'<?php echo $pname ?>', sex:'<?php echo $sex ?>', weight:'<?php echo $weight ?>', age:'<?php echo $age; ?>', his:his, phy:phy, cls_diag:cls_dia, dia:dia, invst:invst, symp:symp, pic:pic, one:one, two:two, three:three, four:four, five:five, six:six, seven:seven, eight:eight, nine:nine, ten:ten, eleven:eleven, twelve:twelve, thirteen:thirteen },
		success:function(resp){
			alert(resp);
			$("#print").click();
		}
	});
	
}

 
function getEditForm(cat, drug, dose, gap, meal, duration) {
 	var str = '<table border="0" cellspacing="0" width="500" style="text-align:left; font:10pt Arial, Helvetica, sans-serif;">'
				+'<tr>'
					+'<td colspan="4"><select class="sel_cat">'+cat_selector+'</select></td>'
				+'</tr>'
				+'<tr>'
					+'<td colspan="4"><select class="sel_drug">'+drug_selector+'</select></td>'
				+'</tr>'
				+'<tr>'
					+'<td width="40"></td>'
					+'<td><select class="sel_dose">'+dose_selector+'</select></td>'
					+'<td><select class="sel_gap">'+gap_selector+'</select></td>'
					+'<td><select class="sel_meal">'+meal_selector+'</select></td>'
					+'<td><select class="sel_duration">'+duration_selector+'</select></td>'
				+'<td width="30"><a href="javascript://" class="ok">OK</td></tr>'
			+'</table>';
			
	return str;
}
 
/* 
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
  */

$(document).ready(function() {
	
	$("#drug").UISugestion();
	$("#meal").UISugestion();
	$("#cat").UISugestion();
	$("#group").UISugestion();
	$("#gap").UISugestion();
	$("#duration").UISugestion();
});
  </script>

  
  
  <!--
  
  
<option>Automated Blood Culture</option>
<option>Stool for C/S</option>
<option>Throat swab:*C/S, Gram stain, *KLB stain</option>
<option>Sputum: C/S, *Gram stain: *AFB stain</option>
<option>Urethral discharge: C/S *Gram stain</option>
<option>Prostatic smear: C/S *Gram stain</option>
<option>HVS: C/S *Gram stain</option>
<option>HVS: C/S *Gram stain:*AFB stain</option>
<option>CBC: TC; DC; Hb; ESR, PC</option>
<option>Skin Scrapings</option>
<option>Blood Film</option>
<option>Cir: Eoslinophil Count</option>
<option>Reticulocyte Count</option>
<option>Malarial Parasite</option>
<option>Blood Group & R Factor</option>
<option>Coomb’s Test: Direct /Indirect</option>
<option>S.lgG/IgM/IgA/c3/c4</option>
<option>VDRL(Qualitative/Quantitative) </option>
<option>TPHA(Qualitative/Quantitative)</option>
<option>ASo title</option>
<option>R.A/R.F test </option>
<option>CRP (Qualitative/Quantitative)</option>
<option>CFT for Filaria</option>
<option>ICT for Filaria</option>
<option>ICT for Kala_Azar (Ag/Ab), S.IgE</option>
<option>ANA / ANF, C3, C4</option>
<option>Anti-DNA </option>
<option>Anti-dsDna </option>
<option>C-ANCA</option>
<option>P-ANCA</option>
<option>HBsAg</option>
<option>HBeAg</option>
<option>Anti-HCV</option>
<option>Anti-HEV IgM</option>
<option>Anti-HBs Title</option>
<option>T3, T4, TSH</option>
<option>FT4</option>
<option>Prolactin</option>
<option>Testosterone</option>
<option>FSH</option>
<option>LH</option>
<option>Cortisol</option>
<option>BT</option>
<option>CT</option>
<option>Prothrombin Time</option>
<option>APTT</option>
<option>FDP</option>
<option>Plasma Fibrinogen</option>









<select id="invst1" name="invst1" style="width:240px; background-color:white">
									<option value="">-------Select-------</option>
									<option>CBC</option>
									<option>PFB</option>
									<option>CXR - P/A</option>
									<option>Urine R/E</option>
									<option>Urine C/S</option>
									<option>UTP</option>
									<option>CCR</option>
									<option>PCR/ACR of Urine</option>
									<option>Creatinine</option>
									<option>PBS</option>
									<option>2ABF</option>
									<option>TSH</option>
									<option>USG of KUBe</option>
									<option>KUB with Prostate & PVR</option>
									<option>KUB with Prostate & W/A</option>
									<option>C3</option>
									<option>ANA</option>
									<option>HBsAg(E)</option>
									<option>CBC/CP</option>
									<option>TC</option>
									<option>DC</option>
									<option>Hb%</option>
									<option>ESR</option>
									<option>Platelet Count</option>
									<option>Blood Film</option>
									<option>Reticulocyte Count</option>
									<option>MP</option>
									<option>BT</option>
									<option>CT</option>
									<option>CE</option>
									<option>COUNT</option>
									<option>LE CELL</option>
									<option>Sugar Fasting</option>
									<option>Sugar Random</option>
									<option>After 2Hrs.ABF</option>
									<option>After 2Hrs 7gm. Glucose</option>
									<option>Glucose Tolerance test (GTI)</option>
									<option>HbA1C</option>
									<option>Serum Bilirubin (Total)</option>
									<option>Serum Bilirubin (Direct)</option>
									<option>Serum Bilirubin (indirect)</option>
									<option>SGPT (ALT)</option>
									<option>SGOT (AST)</option>
									<option>Alk.Phosphatse</option>
									<option>Acid Phosphatse</option>
									<option>Lipid profile</option>
									<option>Serum Cholesterol</option>
									<option>HDL Cholesterol</option>
									<option>Serum Triglyceride</option>
									<option>LDL Cholesterol</option>
									<option>Serum Creatinine</option>
									<option>Urea/Bun</option>
									<option>Albumin</option>
									<option>Serum Total Protein</option>
									<option>Globulin</option>
									<option>AG Ratio</option>
									<option>CK-MB</option>
									<option>LDH</option>
									<option>CPK/CK</option>
									<option>Serum Amylase</option>
									<option>Serum Phosphate</option>
									<option>Serum Calcium</option>
									<option>Serum Uric Acid</option>
									<option>Serum Lipase</option>
									<option>Serum Aldolase</option>
									<option>Serum lithium</option>
									<option>Hb Electrophoresis</option>
									<option>Protein Electrophoresis</option>
									<option>Serum Magnesium</option>
									<option>Serum Iron</option>
									<option>Serum TIBC</option>
									<option>Serum Electrolytes</option>
									<option>NA+</option>
									<option>K+</option>
									<option>Cl-</option>
									<option>TCO2</option>
									<option>Blood for C/S (Fan Method)</option>
									<option>Urine For C/S (Fan Method)</option>
									<option>Urine For C/S</option>
									<option>Stool For C/S</option>
									<option>Throat Swab  for C/S</option>
									<option>Sputum for C/S</option>
									<option>Sputum for ABF C/S</option>
									<option>Urine Swab for C/S</option>
									<option>Wound Swab  for C/S</option>
									<option>Vaginal Swab  for C/S</option>
									<option>Umblical smear for C/S</option>
									<option>Conjunctival Swab  for C/S</option>
									<option>Prostatic smear for C/S</option>
									<option>Urethral smear for C/S</option>
									<option>Aural Swab for C/S</option>
									<option>Fungus  for C/S</option>
									<option>CSF for C/S</option>
									<option>Ascitic fluid for C/S</option>
									<option>Pleural fluid for C/S</option>
									<option>ASO Titer</option>
									<option>R.A/R.F .Test</option>
									<option>CRP</option>
									<option>Widal Test</option>
									<option>Febrile /Triple Antigen</option>
									<option>Rose Waller Test</option>
									<option>VDRL</option>
									<option>VDRL (Qlty Qnty)</option>
									<option>TPHA</option>
									<option>TPHA (Qlty Qnty)</option>
									<option>Prothroombin Time</option>
									<option>APTT</option>
									<option>lgE</option>
									<option>Blood group & RH factor</option>
									<option>Rh .Antibody titre</option>
									<option>Coomb`s test (Direct)</option>
									<option>Coomb`s test (Indirect)</option>
									<option>Dengue Virus ab lgG</option>
									<option>Dengue Virus ab lgM</option>
									<option>Helicobacter Pylori (H.Pylori)Ab</option>
									<option>TB (ICT)</option>
									<option>HBsAg (ICT)</option>
									<option>Malaria (ICT)</option>
									<option>Filaira (ICT)</option>
									<option>CFT for Filaira</option>
									<option>HBsAg (E)</option>
									<option>HBeAg</option>
									<option>T3</option>
									<option>T4</option>
									<option>TSH</option>
									<option>FT3</option>
									<option>FT4</option>
									<option>Testosterone</option>
									<option>Prolactin</option>
									<option>Progesterone</option>
									<option>Estrogen/Estradiol</option>
									<option>Anti HAV-lgM</option>
									<option>Anti HBC- lgM</option>
									<option>Anti -HBs</option>
									<option>Anti-HCV</option>
									<option>AntiHBC</option>
									<option>Anti HBE- lgM</option>
									<option>Anti-TB lgA/lgG/lgm</option>
									<option>Serum Ferritin</option>
									<option>Cortisol</option>
									<option>B-Natriuretic Peptide (BNP)</option>
									<option>LH</option>
									<option>FSH</option>
									<option>AFP</option>
									<option>CEA</option>
									<option>PSA</option>
									<option>Free PSA</option>
									<option>B-HCG</option>
									<option>ANA/ANF</option>
									<option>Anti dsDNA</option>
									<option>HIV  Test (Type 1 & 2)</option>
									<option>CA-125</option>
									<option>CA-19.9</option>
								</select>



-->