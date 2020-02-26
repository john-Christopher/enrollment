<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
		font-family: arial, sans-serif;
		background-image: url('try.jpg');
		background-repeat: no-repeat;
		background-position: center;
		background-attachment: fixed;
		background-size: cover;
	}
	table{
		padding: 20px;
		background-color: rgba(100,100,100,0.4);
		border-radius: 10px;
	}
	label h3{
		font-size: 30px;
	}
</style>
<body>
	<?php
		include 'connection.php';

		$sql = "Select * from account";
		$result = $conn->query($sql);
		session_start();
	?>
	<div>
		<table>
			<tr>
				<td>
					<label><h3>Welcome to the LAIHS Portal <?php echo $_SESSION["username"] ?></h3></label>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>