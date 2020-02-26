<?php
include 'connection.php';

if(isset($_POST['submit1']))
{
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$zip = $_POST['zip'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$focc = $_POST['work1'];
	$mocc = $_POST['work2'];
	$contact = $_POST['contact'];
	$yearlvl = $_POST['yrlvl'];
	$semester = $_POST['sem'];
	$track = $_POST['track'];

	$sql = "INSERT INTO `shs_form` (`lname`, `fname`, `mname`, `gender`, `address`, `zipcode`, `fathersname`, `mothersname`, `focc`, `mocc`, `contactn`, `yearlvl`, `semester`, `track/strand`) 
	VALUES ('$lname', '$fname', '$mname', '$gender', '$address', '$zip', '$father', '$mother', '$focc', '$mocc', '$contact', '$yearlvl', '$semester', '$track');";


	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {	
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

$conn->close();
?>