function getautomatedBlood1(){$.get("js_page/automatedblood.php",{id:$("#automatedbloodcric").val()},function(data){$("#automatedblood").html(data);});}

function getautomatedBlood2(){$.get("js_page/get_values.php",{id:$("#automatedbloodcric").val() == 'null'},function(data){$("#automatedblood").html(data);});}

function automatedbloodcul() {
	var checkbox = document.getElementById("automatedbloodcric");
	if (checkbox.addEventListener) {
		checkbox.addEventListener ("CheckboxStateChange", OnChangeCheckbox, false);
	}
}

function OnChangeCheckbox (event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getautomatedBlood1();
	}
	else {
		//alert ("The check box is not checked.");
		getautomatedBlood2();
	}
}


function getUrine1(){$.get("js_page/get_urine.php",{id:$("#urineforcs_id").val()},function(data){$("#urine_details").html(data);});}

function getUrine2(){$.get("js_page/get_values.php",{id:$("#urineforcs_id").val() == 'null'},function(data){$("#urine_details").html(data);});}

function urinefor_cs(){
	var checkbox = document.getElementById("urineforcs_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener ("CheckboxStateChange", OnChangeUrine, false);
	}
}

function OnChangeUrine (event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getUrine1();
	}
	else {
		//alert ("The check box is not checked.");
		getUrine2();
	}
}



function getStool1(){$.get("js_page/get_stollcs.php",{id:$("#stollforcs_id").val()},function(data){$("#stollforcs_details").html(data);});}

function getStool2(){$.get("js_page/get_values.php",{id:$("#stollforcs_id").val() == 'null'},function(data){$("#stollforcs_details").html(data);});}

function stool_fnc(){
	var checkbox = document.getElementById("stollforcs_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeStoll, false);
	}
}

function OnChangeStoll (event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getStool1();
	}
	else {
		//alert ("The check box is not checked.");
		getStool2();
	}
}



function getThroat1(){$.get("js_page/get_throat.php",{id:$("#throat_id").val()},function(data){$("#throat_details").html(data);});}

function getThroat2(){$.get("js_page/get_values.php",{id:$("#throat_id").val() == 'null'},function(data){$("#throat_details").html(data);});}

function throat_fnc(){
	var checkbox = document.getElementById("throat_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeThroat, false);
	}
}

function OnChangeThroat (event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getThroat1();
	}
	else {
		//alert ("The check box is not checked.");
		getThroat2();
	}
}


function getSputum1(){$.get("js_page/get_sputum.php",{id:$("#sputum_id").val()},function(data){$("#sputum_details").html(data);});}

function getSputum2(){$.get("js_page/get_values.php",{id:$("#sputum_id").val() == 'null'},function(data){$("#sputum_details").html(data);});}

function sputum_fnc(){
	var checkbox = document.getElementById("sputum_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeSputum, false);
	}
}

function OnChangeSputum(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getSputum1();
	}
	else {
		//alert ("The check box is not checked.");
		getSputum2();
	}
}


function getUrethral1(){$.get("js_page/get_urethral.php",{id:$("#urethral_id").val()},function(data){$("#urethral_details").html(data);});}

function getUrethral2(){$.get("js_page/get_values.php",{id:$("#urethral_id").val() == 'null'},function(data){$("#urethral_details").html(data);});}

function urethral_fnc(){
	var checkbox = document.getElementById("urethral_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeUrethral, false);
	}
}

function OnChangeUrethral(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getUrethral1();
	}
	else {
		//alert ("The check box is not checked.");
		getUrethral2();
	}
}


function getProstatic1(){$.get("js_page/get_prostatic.php",{id:$("#prostatic_id").val()},function(data){$("#prostatic_details").html(data);});}

function getProstatic2(){$.get("js_page/get_values.php",{id:$("#prostatic_id").val() == 'null'},function(data){$("#prostatic_details").html(data);});}

function prostatic_fnc(){
	var checkbox = document.getElementById("prostatic_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeProstatic, false);
	}
}

function OnChangeProstatic(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getProstatic1();
	}
	else {
		//alert ("The check box is not checked.");
		getProstatic2();
	}
}


function getHbs1(){$.get("js_page/get_hbs.php",{id:$("#hbs_id").val()},function(data){$("#hbs_details").html(data);});}

function getHbs2(){$.get("js_page/get_values.php",{id:$("#hbs_id").val() == 'null'},function(data){$("#hbs_details").html(data);});}

function hbs_fnc(){
	var checkbox = document.getElementById("hbs_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeHbs, false);
	}
}

function OnChangeHbs(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getHbs1();
	}
	else {
		//alert ("The check box is not checked.");
		getHbs2();
	}
}


function getHbs1_1(){$.get("js_page/get_hbs1.php",{id:$("#hbs1_id").val()},function(data){$("#hbs1_details").html(data);});}

function getHbs1_2(){$.get("js_page/get_values.php",{id:$("#hbs1_id").val() == 'null'},function(data){$("#hbs1_details").html(data);});}

function hbs1_fnc(){
	var checkbox = document.getElementById("hbs1_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeHbs1, false);
	}
}

function OnChangeHbs1(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getHbs1_1();
	}
	else {
		//alert ("The check box is not checked.");
		getHbs1_2();
	}
}


function getSkin1(){$.get("js_page/get_skin.php",{id:$("#skin_id").val()},function(data){$("#skin_details").html(data);});}

function getSkin2(){$.get("js_page/get_values.php",{id:$("#skin_id").val() == 'null'},function(data){$("#skin_details").html(data);});}

function skin_fnc(){
	var checkbox = document.getElementById("skin_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeSkin, false);
	}
}

function OnChangeSkin(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getSkin1();
	}
	else {
		//alert ("The check box is not checked.");
		getSkin2();
	}
}



function getBlood1(){$.get("js_page/get_blood.php",{id:$("#bgroup_id").val()},function(data){$("#bgroup_details").html(data);});}

function getBlood2(){$.get("js_page/get_values.php",{id:$("#bgroup_id").val() == 'null'},function(data){$("#bgroup_details").html(data);});}

function bgroup_fnc(){
	var checkbox = document.getElementById("bgroup_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeBlood, false);
	}
}

function OnChangeBlood(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getBlood1();
	}
	else {
		//alert ("The check box is not checked.");
		getBlood2();
	}
}


function getCoombs1(){$.get("js_page/get_coombs.php",{id:$("#coombs_id").val()},function(data){$("#coombs_details").html(data);});}

function getCoombs2(){$.get("js_page/get_values.php",{id:$("#coombs_id").val() == 'null'},function(data){$("#coombs_details").html(data);});}

function coombs_fnc(){
	var checkbox = document.getElementById("coombs_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeCoombs, false);
	}
}

function OnChangeCoombs(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getCoombs1();
	}
	else {
		//alert ("The check box is not checked.");
		getCoombs2();
	}
}


function getSlagg1(){$.get("js_page/get_slagg.php",{id:$("#slgg_id").val()},function(data){$("#slgg_details").html(data);});}

function getSlagg2(){$.get("js_page/get_values.php",{id:$("#slgg_id").val() == 'null'},function(data){$("#slgg_details").html(data);});}

function slgg_fnc(){
	var checkbox = document.getElementById("slgg_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeSlagg, false);
	}
}

function OnChangeSlagg(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getSlagg1();
	}
	else {
		//alert ("The check box is not checked.");
		getSlagg2();
	}
}


function getBdrl1(){$.get("js_page/get_vdrl.php",{id:$("#vdrl_id").val()},function(data){$("#vdrl_details").html(data);});}

function getBdrl2(){$.get("js_page/get_values.php",{id:$("#vdrl_id").val() == 'null'},function(data){$("#vdrl_details").html(data);});}

function vdrl_fnc(){
	var checkbox = document.getElementById("vdrl_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeBdrl, false);
	}
}

function OnChangeBdrl(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getBdrl1();
	}
	else {
		//alert ("The check box is not checked.");
		getBdrl2();
	}
}


function getTpha1(){$.get("js_page/get_tpha.php",{id:$("#tpha_id").val()},function(data){$("#tpha_details").html(data);});}

function getTpha2(){$.get("js_page/get_values.php",{id:$("#tpha_id").val() == 'null'},function(data){$("#tpha_details").html(data);});}

function tpha_fnc(){
	var checkbox = document.getElementById("tpha_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeTpha, false);
	}
}

function OnChangeTpha(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		//alert ("The check box is checked.");
		getTpha1();
	}
	else {
		//alert ("The check box is not checked.");
		getTpha2();
	}
}


function getAso1(){$.get("js_page/get_aso.php",{id:$("#aso_id").val()},function(data){$("#aso_details").html(data);});}

function getAso2(){$.get("js_page/get_values.php",{id:$("#aso_id").val() == 'null'},function(data){$("#aso_details").html(data);});}

function aso_fnc(){
	var checkbox = document.getElementById("aso_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeAso, false);
	}
}

function OnChangeAso(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getAso1();
	}
	else {
		getAso2();
	}
}

function getRa1(){$.get("js_page/get_ra.php",{id:$("#ra_id").val()},function(data){$("#ra_details").html(data);});}

function getRa2(){$.get("js_page/get_values.php",{id:$("#ra_id").val() == 'null'},function(data){$("#ra_details").html(data);});}

function ra_fnc(){
	var checkbox = document.getElementById("ra_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeRa, false);
	}
}

function OnChangeRa(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getRa1();
	}
	else {
		getRa2();
	}
}



function getCrp1(){$.get("js_page/get_crp.php",{id:$("#crp_id").val()},function(data){$("#crp_details").html(data);});}

function getCrp2(){$.get("js_page/get_values.php",{id:$("#crp_id").val() == 'null'},function(data){$("#crp_details").html(data);});}

function crp_fnc(){
	var checkbox = document.getElementById("crp_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeCrp, false);
	}
}

function OnChangeCrp(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getCrp1();
	}
	else {
		getCrp2();
	}
}


function getCft1(){$.get("js_page/get_cft.php",{id:$("#cft_id").val()},function(data){$("#cft_details").html(data);});}

function getCft2(){$.get("js_page/get_values.php",{id:$("#cft_id").val() == 'null'},function(data){$("#cft_details").html(data);});}

function cft_fnc(){
	var checkbox = document.getElementById("cft_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeCft, false);
	}
}

function OnChangeCft(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getCft1();
	}
	else {
		getCft2();
	}
}


function getIct1(){$.get("js_page/get_ict.php",{id:$("#ict_id").val()},function(data){$("#ict_details").html(data);});}

function getIct2(){$.get("js_page/get_values.php",{id:$("#ict_id").val() == 'null'},function(data){$("#ict_details").html(data);});}

function ict_fnc(){
	var checkbox = document.getElementById("ict_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeIct, false);
	}
}

function OnChangeIct(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getIct1();
	}
	else {
		getIct2();
	}
}


function getIct11(){$.get("js_page/get_ict1.php",{id:$("#ict1_id").val()},function(data){$("#ict1_details").html(data);});}

function getIct12(){$.get("js_page/get_values.php",{id:$("#ict1_id").val() == 'null'},function(data){$("#ict1_details").html(data);});}

function ict1_fnc(){
	var checkbox = document.getElementById("ict1_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeIct1, false);
	}
}

function OnChangeIct1(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getIct11();
	}
	else {
		getIct12();
	}
}


function getCbc1(){$.get("js_page/get_cbc.php",{id:$("#cbc_id").val()},function(data){$("#cbc_details").html(data);});}

function getCbc2(){$.get("js_page/get_values.php",{id:$("#cbc_id").val() == 'null'},function(data){$("#cbc_details").html(data);});}

function cbc_fnc(){
	var checkbox = document.getElementById("cbc_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeCbc, false);
	}
}

function OnChangeCbc(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getCbc1();
	}
	else {
		getCbc2();
	}
}


function getCbc1(){$.get("js_page/get_cbc.php",{id:$("#cbc_id").val()},function(data){$("#cbc_details").html(data);});}

function getCbc2(){$.get("js_page/get_values.php",{id:$("#cbc_id").val() == 'null'},function(data){$("#cbc_details").html(data);});}

function cbc_fnc(){
	var checkbox = document.getElementById("cbc_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeCbc, false);
	}
}

function OnChangeCbc(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getCbc1();
	}
	else {
		getCbc2();
	}
}


function getBfilm1(){$.get("js_page/get_bfilm.php",{id:$("#bfilm_id").val()},function(data){$("#bfilm_details").html(data);});}

function getBfilm2(){$.get("js_page/get_values.php",{id:$("#bfilm_id").val() == 'null'},function(data){$("#bfilm_details").html(data);});}

function blood_film_fnc(){
	var checkbox = document.getElementById("bfilm_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeBfilm, false);
	}
}

function OnChangeBfilm(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getBfilm1();
	}
	else {
		getBfilm2();
	}
}


function getCir1(){$.get("js_page/get_cir.php",{id:$("#cir_id").val()},function(data){$("#cir_details").html(data);});}

function getCir2(){$.get("js_page/get_values.php",{id:$("#cir_id").val() == 'null'},function(data){$("#cir_details").html(data);});}

function cir_fnc(){
	var checkbox = document.getElementById("cir_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeCir, false);
	}
}

function OnChangeCir(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getCir1();
	}
	else {
		getCir2();
	}
}


function getRet1(){$.get("js_page/get_reticul.php",{id:$("#reticul_id").val()},function(data){$("#reticul_details").html(data);});}

function getRet2(){$.get("js_page/get_values.php",{id:$("#reticul_id").val() == 'null'},function(data){$("#reticul_details").html(data);});}

function reticul_fnc(){
	var checkbox = document.getElementById("reticul_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeReticul, false);
	}
}

function OnChangeReticul(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getRet1();
	}
	else {
		getRet2();
	}
}


function getMalaria1(){$.get("js_page/get_malaria.php",{id:$("#malaria_id").val()},function(data){$("#malaria_details").html(data);});}

function getMalaria2(){$.get("js_page/get_values.php",{id:$("#malaria_id").val() == 'null'},function(data){$("#malaria_details").html(data);});}

function malaria_fnc(){
	var checkbox = document.getElementById("malaria_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeMalaria, false);
	}
}

function OnChangeMalaria(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getMalaria1();
	}
	else {
		getMalaria2();
	}
}

function getAna1(){$.get("js_page/get_ana.php",{id:$("#ana_id").val()},function(data){$("#ana_details").html(data);});}

function getAna2(){$.get("js_page/get_values.php",{id:$("#ana_id").val() == 'null'},function(data){$("#ana_details").html(data);});}

function ana_fnc(){
	var checkbox = document.getElementById("ana_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeAna, false);
	}
}

function OnChangeAna(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getAna1();
	}
	else {
		getAna2();
	}
}



function getAnti1(){$.get("js_page/get_anti.php",{id:$("#anti_id").val()},function(data){$("#anti_details").html(data);});}

function getAnti2(){$.get("js_page/get_values.php",{id:$("#anti_id").val() == 'null'},function(data){$("#anti_details").html(data);});}

function anti_fnc(){
	var checkbox = document.getElementById("anti_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeAnti, false);
	}
}

function OnChangeAnti(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getAnti1();
	}
	else {
		getAnti2();
	}
}


function getAntids1(){$.get("js_page/get_antids.php",{id:$("#antids_id").val()},function(data){$("#antids_details").html(data);});}

function getAntids2(){$.get("js_page/get_values.php",{id:$("#antids_id").val() == 'null'},function(data){$("#antids_details").html(data);});}

function antids_fnc(){
	var checkbox = document.getElementById("antids_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeAntids, false);
	}
}

function OnChangeAntids(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getAntids1();
	}
	else {
		getAntids2();
	}
}


function getCanca1(){$.get("js_page/get_canca.php",{id:$("#canca_id").val()},function(data){$("#canca_details").html(data);});}

function getCanca2(){$.get("js_page/get_values.php",{id:$("#canca_id").val() == 'null'},function(data){$("#canca_details").html(data);});}

function canca_fnc(){
	var checkbox = document.getElementById("canca_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeCanca, false);
	}
}

function OnChangeCanca(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getCanca1();
	}
	else {
		getCanca2();
	}
}


function getPanca1(){$.get("js_page/get_panca.php",{id:$("#panca_id").val()},function(data){$("#panca_details").html(data);});}

function getPanca2(){$.get("js_page/get_values.php",{id:$("#panca_id").val() == 'null'},function(data){$("#panca_details").html(data);});}

function panca_fnc(){
	var checkbox = document.getElementById("panca_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangePanca, false);
	}
}

function OnChangePanca(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getPanca1();
	}
	else {
		getPanca2();
	}
}


function getHbsag1(){$.get("js_page/get_hbsag.php",{id:$("#hbsag_id").val()},function(data){$("#hbsag_details").html(data);});}

function getHbsag2(){$.get("js_page/get_values.php",{id:$("#hbsag_id").val() == 'null'},function(data){$("#hbsag_details").html(data);});}

function hbsag_fnc(){
	var checkbox = document.getElementById("hbsag_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeHbsag, false);
	}
}

function OnChangeHbsag(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getHbsag1();
	}
	else {
		getHbsag2();
	}
}


function getHbeag1(){$.get("js_page/get_hbeag.php",{id:$("#hbeag_id").val()},function(data){$("#hbeag_details").html(data);});}

function getHbeag2(){$.get("js_page/get_values.php",{id:$("#hbeag_id").val() == 'null'},function(data){$("#hbeag_details").html(data);});}

function hbeag_fnc(){
	var checkbox = document.getElementById("hbeag_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeHbeag, false);
	}
}

function OnChangeHbeag(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getHbeag1();
	}
	else {
		getHbeag2();
	}
}


function getHvc1(){$.get("js_page/get_hvc.php",{id:$("#hvc_id").val()},function(data){$("#hvc_details").html(data);});}

function getHvc2(){$.get("js_page/get_values.php",{id:$("#hvc_id").val() == 'null'},function(data){$("#hvc_details").html(data);});}

function hvc_fnc(){
	var checkbox = document.getElementById("hvc_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeHvc, false);
	}
}

function OnChangeHvc(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getHvc1();
	}
	else {
		getHvc2();
	}
}


function getHev1(){$.get("js_page/get_hev.php",{id:$("#hev_id").val()},function(data){$("#hev_details").html(data);});}

function getHev2(){$.get("js_page/get_values.php",{id:$("#hev_id").val() == 'null'},function(data){$("#hev_details").html(data);});}

function hev_fnc(){
	var checkbox = document.getElementById("hev_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeHev, false);
	}
}

function OnChangeHev(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getHev1();
	}
	else {
		getHev2();
	}
}


function getAntihbs1(){$.get("js_page/get_antihbs.php",{id:$("#antihbs_id").val()},function(data){$("#antihbs_details").html(data);});}

function getAntihbs2(){$.get("js_page/get_values.php",{id:$("#antihbs_id").val() == 'null'},function(data){$("#antihbs_details").html(data);});}

function antihbs_fnc(){
	var checkbox = document.getElementById("antihbs_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeAntihbs, false);
	}
}

function OnChangeAntihbs(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getAntihbs1();
	}
	else {
		getAntihbs2();
	}
}


function getTsh1(){$.get("js_page/get_tsh.php",{id:$("#tsh_id").val()},function(data){$("#tsh_details").html(data);});}

function getTsh2(){$.get("js_page/get_values.php",{id:$("#tsh_id").val() == 'null'},function(data){$("#tsh_details").html(data);});}

function tsh_fnc(){
	var checkbox = document.getElementById("tsh_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeTsh, false);
	}
}

function OnChangeTsh(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getTsh1();
	}
	else {
		getTsh2();
	}
}


function getFt41(){$.get("js_page/get_ft4.php",{id:$("#ft4_id").val()},function(data){$("#ft4_details").html(data);});}

function getFt42(){$.get("js_page/get_values.php",{id:$("#ft4_id").val() == 'null'},function(data){$("#ft4_details").html(data);});}

function ft4_fnc(){
	var checkbox = document.getElementById("ft4_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeFt4, false);
	}
}

function OnChangeFt4(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getFt41();
	}
	else {
		getFt42();
	}
}


function getProl1(){$.get("js_page/get_prol.php",{id:$("#prol_id").val()},function(data){$("#prol_details").html(data);});}

function getProl2(){$.get("js_page/get_values.php",{id:$("#prol_id").val() == 'null'},function(data){$("#prol_details").html(data);});}

function prol_fnc(){
	var checkbox = document.getElementById("prol_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeProl, false);
	}
}

function OnChangeProl(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getProl1();
	}
	else {
		getProl2();
	}
}


function getTesto1(){$.get("js_page/get_testo.php",{id:$("#testo_id").val()},function(data){$("#testo_details").html(data);});}

function getTesto2(){$.get("js_page/get_values.php",{id:$("#testo_id").val() == 'null'},function(data){$("#testo_details").html(data);});}

function testo_fnc(){
	var checkbox = document.getElementById("testo_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeTesto, false);
	}
}

function OnChangeTesto(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getTesto1();
	}
	else {
		getTesto2();
	}
}



function getFsh1(){$.get("js_page/get_fsh.php",{id:$("#fsh_id").val()},function(data){$("#fsh_details").html(data);});}

function getFsh2(){$.get("js_page/get_values.php",{id:$("#fsh_id").val() == 'null'},function(data){$("#fsh_details").html(data);});}

function fsh_fnc(){
	var checkbox = document.getElementById("fsh_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeFsh, false);
	}
}

function OnChangeFsh(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getFsh1();
	}
	else {
		getFsh2();
	}
}


function getLh1(){$.get("js_page/get_lh.php",{id:$("#lh_id").val()},function(data){$("#lh_details").html(data);});}

function getLh2(){$.get("js_page/get_values.php",{id:$("#lh_id").val() == 'null'},function(data){$("#lh_details").html(data);});}

function lh_fnc(){
	var checkbox = document.getElementById("lh_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeLh, false);
	}
}

function OnChangeLh(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getLh1();
	}
	else {
		getLh2();
	}
}


function getCorti1(){$.get("js_page/get_corti.php",{id:$("#corti_id").val()},function(data){$("#corti_details").html(data);});}

function getCorti2(){$.get("js_page/get_values.php",{id:$("#corti_id").val() == 'null'},function(data){$("#corti_details").html(data);});}

function corti_fnc(){
	var checkbox = document.getElementById("corti_id");
	if (checkbox.addEventListener) {
		checkbox.addEventListener("CheckboxStateChange", OnChangeCorti, false);
	}
}

function OnChangeCorti(event) {
	var checkbox = event.target;
	if (checkbox.checked) {
		getCorti1();
	}
	else {
		getCorti2();
	}
}
