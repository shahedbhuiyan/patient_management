<?php
	include("ini.php");	
?>
<style type="text/css">
	.small_text {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666666;
}

.text {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #333333;
	text-align: right;
}
</style>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/mai_js.js" type="text/javascript"></script>
<?php
	$id = $_GET['pid'];
	$name = $_GET['name'];
	
	
	if(isset($_POST['submit'])){
		$pid					= $_POST['pid'];
		$name 					= $_POST['name'];
		$rpt_date				= $_POST['rdate'];
		$prs_date				= $_POST['pdate'];
		
		$automated_id			= $_POST['automated_id'];
			if($automated_id != ''){
				$automated = 1;
			}	
		$urine_nm				= $_POST['urine_nm'];
			if($urine_nm != ''){
				$urine = 1;
			}
		$stollfor_cs			= $_POST['stollfor_cs'];
			if($stollfor_cs != ''){
				$stollfor = 1;
			}
		$throat_nm				= $_POST['throat_nm'];
			if($throat_nm != ''){
				$throat = 1;
			}
		$sputum_nm				= $_POST['sputum_nm'];
			if($sputum_nm != ''){
				$sputum = 1;
			}
		$urethral_nam			= $_POST['urethral_nam'];
			if($urethral_nam != ''){
				$urethral = 1;
			}
		$prostatic_nam			= $_POST['prostatic_nam'];
			if($prostatic_nam != ''){
				$prostatic = 1;
			}
		$hbs_nam				= $_POST['hbs_nam'];
			if($hbs_nam != ''){
				$hbs = 1;
			}
		$hbs1_nam				= $_POST['hbs1_nam'];
			if($hbs1_nam != ''){
				$hbs1 = 1;
			}
		$skin_nam				= $_POST['skin_nam'];
			if($skin_nam != ''){
				$skin = 1;
			}
		
		$sql = "insert into invst_view set name = '$name', p_id = '$pid', rpt_date = '$rpt_date', prs_date = '$prs_date', automated_id = '$automated_id', urine_nm = '$urine_nm', stollfor_cs = '$stollfor_cs', throat_nm = '$throat_nm', sputum_nm = '$sputum_nm', urethral_nam = '$urethral_nam', prostatic_nam = '$prostatic_nam', hbs_nam = '$hbs_nam', hbs1_nam = '$hbs1_nam', skin_nam = '$skin_nam', automated = '$automated', urine = '$urine', stollfor = '$stollfor', throat = '$throat', sputum = '$sputum', urethral = '$urethral', prostatic = '$prostatic', hbs = '$hbs', hbs1 = '$hbs1', skin = '$skin'";
		mysql_query($sql);
		
		if(mysql_affected_rows() == 1){
			echo "<table align = 'center'><tr><td style = 'color:green'>Data Submit Successfully</td></tr></table>";
		}
		else{
			echo "<table align = 'center'><tr><td style = 'color:red'>Data Submit Failed</td></tr></table>";
		}
	}
?>
<form action="view_invst.php" method="post" id="form1" name="form1" onsubmit="return validation()">
<table align="center" width="900" border="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<table width="100%" align="center">
				<tr>
					<td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px; text-align:right">P_ID</td>
					<td>:</td>
					<td><input type="text" name="pid" id="pid" value="<?php echo $id; ?>"  readonly="readonly" style="background-color:white; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; text-align:center"/></td>
					<td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px; text-align:right">Name</td>
					<td>:</td>
					<td><input type="text" name="name" id="name" value="<?php echo $name; ?>"  readonly="readonly" style="background-color:white; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; text-align:center"/></td>
				</tr>
				
				<tr>
					<td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px; text-align:right">Prescription Date</td>
					<td>:</td>
					<td><input type="text" name="pdate" id="pdate" value="<?php echo date("Y-m-d"); ?>" style="background-color:white; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; text-align:center" /></td>
					<td style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px; text-align:right">Report Date</td>
					<td>:</td>
					<td><input type="text" name="rdate" id="rdate" value="<?php echo date("Y-m-d"); ?>" style="background-color:white; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; text-align:center" /></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td colspan="3" height="10"></td></tr>
	<tr>
		<td class="text" valign="top" width="400">Microbiology</td>
		<td class="text" valign="top" width="1">:</td>
		<td>
			<p class="small_text">
				<input type="checkbox" name="automatedbloodcri" id="automatedbloodcric" onClick="automatedbloodcul();" />Automated Blood Culture
				<span id="automatedblood"></span><br/><br/>
				<input type="checkbox" name="urineforcs" id="urineforcs_id"  onclick="urinefor_cs();"/>Urine for C/S
				<span id="urine_details"></span><br/><br/>
				<input type="checkbox" name="stollforcs" id="stollforcs_id" onclick="stool_fnc();" />Stool for C/S
				<span id="stollforcs_details"></span><br/><br/>
				<input type="checkbox" name="throat" id="throat_id" onclick="throat_fnc()" />Throat swab: *C/S; *Gram stain, *KLB stain
				<span id="throat_details"></span><br /><br/>
				<input type="checkbox" name="sputum" id="sputum_id" onclick="sputum_fnc()" />Sputum: *C/S; *Gram stain; *AFB stain
				<span id="sputum_details"></span><br/><br/>
				<input type="checkbox" name="urethral " id="urethral_id" onclick="urethral_fnc()" />Urethral discharge: C/S  *Gram stain
				<span id="urethral_details"></span><br/><br/>
				<input type="checkbox" name="prostatic " id="prostatic_id" onclick="prostatic_fnc()" />Prostatic smear: C/S  *Gram stain
				<span id="prostatic_details"></span><br/><br/>
				<input type="checkbox" name="hbs" id="hbs_id" onclick="hbs_fnc()" />HVS: C/S  *Gram stain
				<span id="hbs_details"></span><br/><br/>
				<input type="checkbox" name="hbs1" id="hbs1_id" onclick="hbs1_fnc()" />HVS: C/S  *Gram stain:*AFB stain
				<span id="hbs1_details"></span><br/><br/>
				<input type="checkbox" name="skin" id="skin_id" onclick="skin_fnc()" />Skin Scrapings
				<span id="skin_details"></span><br/><br/>
			</p>
		</td>
	</tr>
	<tr>
		<td class="text" valign="top" width="400">Haematology</td>
		<td class="text" valign="top" width="1">:</td>
		<td>
			<p class="small_text">
				<input type="checkbox" name="cbc" id="cbc_id" onclick="cbc_fnc()" />CBC: TC; DC; Hb; ESR, PC
				<span id="cbc_details"></span><br /><br />
				
				<input type="checkbox" name="bfilm" id="bfilm_id" onclick="blood_film_fnc()" />Blood Film
				<span id="bfilm_details"></span><br /><br />
				
				<input type="checkbox" name="cir" id="cir_id" onclick="cir_fnc()" />Cir: Eoslinophil Count
				<span id="cir_details"></span><br /><br />
				
				<input type="checkbox" name="reticul" id="reticul_id" onclick="reticul_fnc()" />Reticulocyte Count
				<span id="reticul_details"></span><br /><br />
				
				<input type="checkbox" name="malaria" id="malaria_id" onclick="malaria_fnc()" />Malarial Parasite
				<span id="malaria_details"></span><br /><br />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="text" valign="top" width="400">Serology/Immunology</td>
		<td class="text" valign="top" width="1">:</td>
		<td>
			<p class="small_text">
				<input type="checkbox" name="bgroup" id="bgroup_id" onclick="bgroup_fnc()" />Blood Group & R Factor
				<span id="bgroup_details"></span><br /><br />
				<input type="checkbox" name="coombs" id="coombs_id" onclick="coombs_fnc()" />Coomb’s Test: Direct /Indirect
				<span id="coombs_details"></span><br /><br />
				<input type="checkbox" name="slgg" id="slgg_id" onclick="slgg_fnc()" />S.lgG/IgM/IgA/c3/c4
				<span id="slgg_details"></span><br /><br />
				
				<input type="checkbox" name="vdrl" id="vdrl_id" onclick="vdrl_fnc()" />VDRL(Qualitative/Quantitative)
				<span id="vdrl_details"></span><br /><br />
				
				<input type="checkbox" name="tpha" id="tpha_id" onclick="tpha_fnc()" />TPHA(Qualitative/Quantitative)
				<span id="tpha_details"></span><br /><br />
				
				<input type="checkbox" name="aso" id="aso_id" onclick="aso_fnc()" />ASo title
				<span id="aso_details"></span><br /><br />
				
				<input type="checkbox" name="ra" id="ra_id" onclick="ra_fnc()" />R.A/R.F test
				<span id="ra_details"></span><br /><br />
				
				<input type="checkbox" name="crp" id="crp_id" onclick="crp_fnc()" />CRP (Qualitative/Quantitative)
				<span id="crp_details"></span><br /><br />
				
				<input type="checkbox" name="cft" id="cft_id" onclick="cft_fnc()" />CFT for Filaria
				<span id="cft_details"></span><br /><br />
				
				<input type="checkbox" name="ict" id="ict_id" onclick="ict_fnc()" />ICT for Filaria
				<span id="ict_details"></span><br /><br />
				
				<input type="checkbox" name="ict1" id="ict1_id" onclick="ict1_fnc()" />ICT for Kala_Azar (Ag/Ab), S.IgE
				<span id="ict1_details"></span><br /><br />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="text" valign="top" width="400">Autoimmunity</td>
		<td class="text" valign="top" width="1">:</td>
		<td>
			<p class="small_text">
				<input type="checkbox" name="ana" id="ana_id" onclick="ana_fnc()" />ANA / ANF, C<sub>3</sub>, C<sub>4</sub>
				<span id="ana_details"></span><br /><br />
				
				<input type="checkbox" name="anti" id="anti_id" onclick="anti_fnc()" />Anti-DNA
				<span id="anti_details"></span><br /><br />
				
				<input type="checkbox" name="antids" id="antids_id" onclick="antids_fnc()" />Anti-dsDna
				<span id="antids_details"></span><br /><br />
				
				<input type="checkbox" name="canca" id="canca_id" onclick="canca_fnc()" />C-ANCA
				<span id="canca_details"></span><br /><br />
				
				<input type="checkbox" name="panca" id="panca_id" onclick="panca_fnc()" />P-ANCA
				<span id="panca_details"></span><br /><br />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="text" valign="top" width="400">Viral Hepatitis Profile</td>
		<td class="text" valign="top" width="1">:</td>
		<td>
			<p class="small_text">
				<input type="checkbox" name="hbsag" id="hbsag_id" onclick="hbsag_fnc()" />HBsAg
				<span id="hbsag_details"></span><br /><br />
				
				<input type="checkbox" name="hbeag" id="hbeag_id" onclick="hbeag_fnc()" />HBeAg
				<span id="hbeag_details"></span><br /><br />
				
				<input type="checkbox" name="hvc" id="hvc_id" onclick="hvc_fnc()" />Anti-HCV
				<span id="hvc_details"></span><br /><br />
				
				<input type="checkbox" name="hev" id="hev_id" onclick="hev_fnc()" />Anti-HEV IgM
				<span id="hev_details"></span><br /><br />
				
				<input type="checkbox" name="antihbs" id="antihbs_id" onclick="antihbs_fnc()" />Anti-HBs Title
				<span id="antihbs_details"></span><br /><br />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="text" valign="top" width="400">Hormones</td>
		<td class="text" valign="top" width="1">:</td>
		<td>
			<p class="small_text">
				<input type="checkbox" name="tsh" id="tsh_id" onclick="tsh_fnc()" />T3, T4, TSH
				<span id="tsh_details"></span><br /><br />
				
				<input type="checkbox" name="ft4" id="ft4_id" onclick="ft4_fnc()" />FT4
				<span id="ft4_details"></span><br /><br />
				
				<input type="checkbox" name="prol" id="prol_id" onclick="prol_fnc()" />Prolactin
				<span id="prol_details"></span><br /><br />
				
				<input type="checkbox" name="testo" id="testo_id" onclick="testo_fnc()" />Testosterone
				<span id="testo_details"></span><br /><br />
				
				<input type="checkbox" name="fsh" id="fsh_id" onclick="fsh_fnc()" />FSH
				<span id="fsh_details"></span><br /><br />
				
				<input type="checkbox" name="lh" id="lh_id" onclick="lh_fnc()" />LH
				<span id="lh_details"></span><br /><br />
				
				<input type="checkbox" name="corti" id="corti_id" onclick="corti_fnc()" />Cortisol
				<span id="corti_details"></span><br /><br />
			</p>
		</td>
	</tr>
	
	<tr>
		<td class="text" valign="top" width="400">Coagulation Profile</td>
		<td class="text" valign="top" width="1">:</td>
		<td>
			<p class="small_text">
				<input type="checkbox" name="bt" id="bt_id" onclick="bt_fnc()" />BT
				<span id="bt_details"></span><br /><br />
				
				<input type="checkbox" name="ct" id="ct_id" onclick="ct_fnc()" />CT
				<span id="ct_details"></span><br /><br />
				
				<input type="checkbox" name="prothrom" id="prothrom_id" onclick="prothrom_fnc()" />Prothrombin Time
				<span id="prothrom_details"></span><br /><br />
				
				<input type="checkbox" name="aptt" id="aptt_id" onclick="aptt_fnc()" />APTT
				<span id="aptt_details"></span><br /><br />
				
				<input type="checkbox" name="fdp" id="fdp_id" onclick="fdp_fnc()" />FDP
				<span id="fdp_details"></span><br /><br />
				
				<input type="checkbox" name="plasma" id="plasma_id" onclick="plasma_fnc()" />Plasma Fibrinogen
				<span id="plasma_details"></span><br /><br />
			</p>
		</td>
	</tr>
	
	
	<tr><td colspan="3" align="center" height="10"></td></tr>
	<tr><td colspan="3" align="center"><input type="submit" name="submit" value="Update" /></td></tr>
</table>
</form>

<script type="text/javascript">
	function validation(){
		var automated_id = document.getElementById("automated_id").value;
		if(automated_id.length == 0){
			alert("Empty Automated Blood");
			return false;
		}
		
		var urine_nm = document.getElementById("urine_id").value;
		//alert(urine_nm);
		if(urine_nm.length == 0){
			alert("Empty urine for cs");
			return false;
		}
		
		return true;
	}
</script>