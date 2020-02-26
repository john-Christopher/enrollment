<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		font-family: arial, sans-serif;
		background-image: url('DSCF4615.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;	
		background-position: center;
	}
	table{
		padding: 20px;
		background-color: rgba(100,100,100,0.4);
		border-radius: 10px;
	}
	label h3{
		font-size: 30px;
	}
	.field{
		width: 300px;
		height: 25px;
		font-size: 14px;
		vertical-align: middle;
		border-radius: 6px;
		border-style: groove;
		box-shadow: currentColor;
	}
	.btn-submit{
		border: none;
		background-color: rgb(255,255,255);
		width: 300px;
		height: 40px;
		border-radius: 6px;
		font-size: 17px;
		box-shadow: currentColor;
	}
	.btn-submit:hover{
		background-color: rgb(100,250,150);
		color: rgb(0,0,0);
	}
</style>
<body>
	<div align="center" class="registration">
		<form action="insertSHS.php" method="POST">
		<table align="center ">
			<tr>
				<td colspan="3" align="center" valign="middle">
					<label><h3>Senior High School</h3></label>
				</td>
			</tr>
			<tr>
				<td class="col-stud">
						<label><h3>Personal Information</h3></label>
						Last Name: <br>
						<input id="field" class="field" placeholder="Please enter your last name . . ." type="text" name="lname" required="" value="<?php if(isset($_POST['lname'])){ echo $lname; } ?>"><br><br>
						First Name:<br>
						<input id="field" class="field" placeholder="Please enter your first name" type="text" name="fname" required="" value="<?php if(isset($_POST['fname'])){ echo $fname; } ?>"><br><br>
						Middle Name:<br>
						<input id="field" class="field" placeholder="Please enter your middle name . . ." type="text" name="mname" required="" value="<?php if(isset($_POST['mname'])){ echo $mname; } ?>"><br><br>
						Gender: <br>
						<input class="field" type="text" name="gender" placeholder="Please enter your gender . . ." required=""><br><br>
						Address: <br>
						<input id="field" class="field" placeholder="Please enter your complete address . . . " type="text" name="address" required="" value="<?php if(isset($_POST['house'])){ echo $house; } ?>"><br><br>
						Zip Code: <br>
						<input id="field" class="field" placeholder="Please enter the zip code of your town/city . . ." type="number" name="zip" required="" value="<?php if(isset($_POST['zcode'])) echo $zcode; ?>"><br><br><br>
				</td>
				<td width="150">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td valign="top" class="">
						<label><h3>Parents/Guardian Information</h3></label>
						Father's Name: <br>
						<input id="field" class="field" placeholder="Please enter your father's name . . ." type="text" name="father" required="" value="<?php if(isset($_POST['father'])){ echo $father; } ?>"><br><br>
						Mother's Name: <br>
						<input id="field" class="field" placeholder="Please enter your mother's name . . ." type="text" name="mother" required="" value="<?php if(isset($_POST['mother'])){ echo $mother; } ?>"><br><br>
						Father's Occupation:<br> 
						<input id="field" class="field" placeholder="Please enter your father's occupation . . . " type="text" name="work1" required="" value="<?php if(isset($_POST['work1'])){ echo $work1; } ?>"><br><br>
						Mother's Occupation: <br>
						<input id="field" class="field" placeholder="Please enter your mother's occupation . . ." type="text" name="work2" required="" value="<?php if(isset($_POST['work2'])){ echo $work2; } ?>"><br><br>
						Contact Number: <br>
						<input id="field" class="field" placeholder="Contact number to dial during emergency . . ." type="number" name="contact" required="" value="<?php if(isset($_POST['contact'])){ echo $contact; } ?>">
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center" valign="top">
						<label><h3>Senior High School Information</h3></label>
						Year Level: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input id="field" class="field" placeholder="Please enter your year level . . ." type="text" name="yrlvl" required="" value="<?php if(isset($_POST['yrlvl'])){ echo $yrlvl; } ?>"><br><br>
						Semester: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input id="field" class="field" placeholder="Please enter the semester . . ." type="text" name="sem" required="" value="<?php if(isset($_POST['sem'])){ echo $sem; } ?>"><br><br>
						Track/Strand: &nbsp;&nbsp;&nbsp;&nbsp;
						<input onclick="dropMenu()" id="field" class="field" placeholder="Please enter your track/strand . . . " type="text" title="track" name="track" required="" value="<?php if(isset($_POST['track'])){ echo $track; } ?>">
						<br><br><br><br>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<center><input class="btn-submit" type="submit" name="submit1" value="Submit"></center>
				</td>
			</tr>
		</table>	
	</form>
	</div>
</body>
</html>