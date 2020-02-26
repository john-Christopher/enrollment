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


	$sql = "INSERT INTO `jhs_form` (`lastname`, `firstname`, `middlename`, `gender`, `address`, `zipcode`, `father`, `mother`, `focc`, `mocc`, `contactn`) 
	VALUES ('$lname', '$fname', '$mname', '$gender', '$address', '$zip', '$father', '$mother', '$focc', '$mocc', '$contact');";


	if (mysqli_query($conn, $sql)) {
	} else {	
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

$conn->close();
?>