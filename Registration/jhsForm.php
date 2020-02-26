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
		background-color: rgba(255,255,255);
		color: rgb(0,0,0);
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
		<form action="insert.php" method="POST">
		<table align="center ">
			<tr>
				<td colspan="3" align="center" valign="middle">
					<label><h3>Junior High School</h3></label>
				</td>
			</tr>
			<tr>
				<td class="col-stud">
						<label><h3>Personal Information</h3></label>
						Last Name: <br> 
						<input id="field" class="field" placeholder="Please enter your last name . . ." type="text" name="lname" required=""><br><br>
						First Name:<br> 
						<input id="field" class="field" placeholder="Please enter your first name" type="text" name="fname" required=""><br><br>
						Middle Name:<br>
						<input id="field" class="field" placeholder="Please enter your middle name . . ." type="text" name="mname" required=""><br><br>
						Gender: <br>
						<input class="field" type="text" name="gender" required="" placeholder="Please enter your gender . . ."><br><br>
						Address: <br>
						<input id="field" class="field" placeholder="Please enter your complete address . . . " type="text" name="address" required=""><br><br>
						Zip Code: <br>
						<input id="field" class="field" placeholder="Please enter the zip code of your town/city . . ." type="number" name="zip" required=""><br><br><br>
						<td width="150">
							
						</td>
						<td valign="top">
						<label><h3>Parents/Guardian Information</h3></label>
						Father's Name: <br>
						<input id="field" class="field" placeholder="Please enter your father's name . . ." type="text" name="father" required=""><br><br>
						Mother's Name: <br>
						<input id="field" class="field" placeholder="Please enter your mother's name . . ." type="text" name="mother" required=""><br><br>
						Father's Occupation: <br>
						<input id="field" class="field" placeholder="Please enter your father's occupation . . . " type="text" name="work1" required=""><br><br>
						Mother's Occupation: <br>
						<input id="field" class="field" placeholder="Please enter your mother's occupation . . ." type="text" name="work2" required=""><br><br>
						Contact Number: <br>
						<input id="field" class="field" placeholder="Contact number to dial during emergency . . ." type="number" name="contact" required="">
					</td>
						<tr>
							<td colspan="3">
								<center><input class="btn-submit" type="submit" name="submit1" value="Submit" onclick="alert('You are successfully registered!')"></center>
							</td>
						</tr>	
				</td>
			</tr>
		</table>	
	</form>
	</div>
<!-- 	<script type="text/javascript">
		function clear(){
			window.alert("Hello");
		}
	</script> -->
</body>
</html>