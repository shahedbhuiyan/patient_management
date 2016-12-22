<?php
	include("assis_panel_head.php");
?>
<table align="center" width="650" border="0">	
	<tr>
		<td height = "15"></td>
	</tr>
</table>
<form action="history.php" method="post">
<table width="700" align="center" style="">
	<tr>
		<td>
			<table width="100%" border="0" cellpadding="3">
				<tr>
					<td>Patient ID</td>
					<td>:</td>
					<td><input type="text" name="pid" id="pid" value="<?php echo $id; ?>" readonly style="background-color:white" /></td>
					<td>Patient Name</td>
					<td>:</td>
					<td><input type="text" name="name" id="name" value="<?php echo $name; ?>" readonly style="background-color:white" /></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style="font-size:17px; background-color:#006666; color:white">Current Medications : </td>
	</tr>
	
	<tr>
		<td><textarea name="current_medications" id="current_medications" style="background-color:white; width:500px; height:100px;"></textarea></td>
	</tr>
	
	<tr>
		<td valign="top">
			<table border="0" align="left">
				<tr><td colspan="3" align="left" style="font-size:17px; background-color:#006666; color:white">Drug Allergy</td></tr>
				<tr>
					<td></td>
					<td>Drugs</td>
					<td>Reactions</td>
				</tr>
				
				<tr>
					<td>1</td>
					<td><input type="text" name="d1" id="d1" style="background-color:white;"></td>
					<td><input type="text" name="r1" id="r1" style="background-color:white; width:250px;"></td>
				</tr>
				
				<tr>
					<td>2</td>
					<td><input type="text" name="d2" id="d2" style="background-color:white;"></td>
					<td><input type="text" name="r2" id="r2" style="background-color:white; width:250px;"></td>
				</tr>
				
				<tr>
					<td>3</td>
					<td><input type="text" name="d3" id="d3" style="background-color:white;"></td>
					<td><input type="text" name="r3" id="r3" style="background-color:white; width:250px;"></td>
				</tr>
				
				<tr>
					<td>4</td>
					<td><input type="text" name="d4" id="d4" style="background-color:white;"></td>
					<td><input type="text" name="r4" id="r4" style="background-color:white; width:250px;"></td>
				</tr>
				
				<tr>
					<td>5</td>
					<td><input type="text" name="d5" id="d5" style="background-color:white;"></td>
					<td><input type="text" name="r5" id="r5" style="background-color:white; width:250px;"></td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td style="font-size:17px; background-color:#006666; color:white">Medical/Psychiatric Illnesses</td>
	</tr>
	<tr>
		<td><textarea name="mpl" id="mpl" style="background-color:white; width:500px; height:100px;"></textarea></td>
	</tr>
	
	<tr>
		<td style="font-size:17px; background-color:#006666; color:white">Operations/Injuries/Hospitalisations</td>
	</tr>
	<tr>
		<td><textarea name="oih" id="oih" style="background-color:white; width:500px; height:100px;"></textarea></td>
	</tr>
	
	<tr>
		<td style="font-size:17px; background-color:#006666; color:white">Immunizations</td>
	</tr>
	<tr>
		<td><textarea name="immu" id="immu" style="background-color:white; width:500px; height:100px;"></textarea></td>
	</tr>
	
	<tr>
		<td style="font-size:17px; background-color:#006666; color:white">Additional Information</td>
	</tr>
	<tr>
		<td><textarea name="ad_info" id="ad_info" style="background-color:white; width:500px; height:100px;"></textarea></td>
	</tr>
	
	<tr>
		<td style="font-size:17px; background-color:#006666; color:white">Personal History</td>
	</tr>
	
	<tr>
		<td>
			<table border="0">
				<tr>
					<td><input type="checkbox" name="smoking" id="smoking" value="Smoking"> Smoking</td>
					<td><input type="checkbox" name="alcoholism" id="alcoholism" value="Alcoholism"> Alcoholism</td>
					<td><input type="checkbox" name="oral" id="oral" value="Oral drug abuse"> Oral drug abuse</td>
					<td><input type="checkbox" name="abroad" id="abroad" value="Husband abroad"> Husband abroad</td>
				</tr>
				<tr>
					<td>Financial Status : </td>
					<td colspan="3" align="left"><input type="text" name="financial" id="financial" style="background-color:white;"></td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr>
		<td>
			<table align="left">
				<tr>
					<td colspan="3" style="font-size:17px; background-color:#006666; color:white">Systemic Inquiry</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Chest pain on exertion</td>
					<td><input type="checkbox" name="" id="" value="" /> Headache</td>
					<td><input type="checkbox" name="" id="" value="" /> Breathlessness</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Dizziness</td>
					<td><input type="checkbox" name="" id="" value="" /> Palpitations</td>
					<td><input type="checkbox" name="" id="" value="" /> Calf muscle pain on walking</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Ankle swelling</td>
					<td><input type="checkbox" name="" id="" value="" /> Nausea</td>
					<td><input type="checkbox" name="" id="" value="" /> Vomiting</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Nausea + Vomiting</td>
					<td><input type="checkbox" name="" id="" value="" /> Haematemesis</td>
					<td><input type="checkbox" name="" id="" value="" /> Indigestion</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Heartbum</td>
					<td><input type="checkbox" name="" id="" value="" /> Bowel habit</td>
					<td><input type="checkbox" name="" id="" value="" /> Stool colour</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Dysuria</td>
					<td><input type="checkbox" name="" id="" value="" /> Frequercy</td>
					<td><input type="checkbox" name="" id="" value="" /> Haematuria</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Incontinence</td>
					<td><input type="checkbox" name="" id="" value="" /> Vaginal discharge</td>
					<td><input type="checkbox" name="" id="" value="" /> Pain during intercourse</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Heat Intolerance</td>
					<td><input type="checkbox" name="" id="" value="" /> Cold intolerance</td>
					<td><input type="checkbox" name="" id="" value="" /> Sweating</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Excessive thirst</td>
					<td><input type="checkbox" name="" id="" value="" /> Shortness of breath on exertion</td>
					<td><input type="checkbox" name="" id="" value="" /> Cough</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Sputum</td>
					<td><input type="checkbox" name="" id="" value="" /> Wheeze</td>
					<td><input type="checkbox" name="" id="" value="" /> Chest paing</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Joint pain</td>
					<td><input type="checkbox" name="" id="" value="" /> Joint stiffness</td>
					<td><input type="checkbox" name="" id="" value="" /> Joint swelling</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Impaired mobility</td>
					<td><input type="checkbox" name="" id="" value="" /> Falls</td>
					<td><input type="checkbox" name="" id="" value="" /> Bleeding</td>
				</tr>
				
				<tr>
					<td><input type="checkbox" name="" id="" value="" /> Skin rash</td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</td>
	</tr>
	
	<tr><td height="15"></td></tr>
	
	<tr>
		<td align="center"><input type="submit" name="sub" value="Save" style="background-color:white;" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" style="background-color:white;" /></td>
	</tr>
</table>
</form>
<?php
	include("footer.php");
?>