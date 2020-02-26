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
		color: rgb(255,255,255);
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
</style>
<body>
	<?php 
		include 'connection.php';

		$sql = "Select * from jhs_form";
		$result = $conn->query($sql);
		session_start();
	?>
	<div class="self-info" align="center">
		<table>
			<tr>
				<td>
					Last Name:
				</td>
				<td>
					First Name:
				</td>
				<td>
					Middle Name:
				</td>
				<td>
					Gender:
				</td>
				<td>
					Address:
				</td>
				
				<td>
					Father's Name:
				</td>
				<td>
					Mother's Name:
				</td>
			</tr>
			<?php
				while ($row = $result->fetch_assoc()){
			?>
					<tr>
						<td>
							<?php echo $row['lastname']?>
						</td>
						<td>
							<?php echo $row['firstname']?>
						</td>
						<td>
							<?php echo $row['middlename']?>
						</td>
						<td>
							<?php echo $row['gender']?>
						</td>
						<td>
							<?php echo $row['address']?>
						</td>
						<td>
							<?php echo $row['father']?>
						</td>
						<td>
							<?php echo $row['mother']?>
						</td>
					</tr>
					<?php
						}
						$conn->close();
					?>
		</table>
	</div>
</body>
</html>