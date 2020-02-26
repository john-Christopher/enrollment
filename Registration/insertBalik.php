<?php
include 'connection.php';

if(isset($_POST['submit1']))
{
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$zip = $_POST['zip'];qq
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$focc = $_POST['work1'];
	$mocc = $_POST['work2'];
	$contact = $_POST['contact'];
	$grlvl = $_POST['grlvl'];
	$lstschool = $_POST['lstschool'];
	$schooladd = $_POST['schooladd'];

	$sql = "INSERT INTO `balikaral_form` (`lname`, `fname`, `mname`, `gender`, `address`, `zipcode`, `fathersname`, `mothersname`, `focc`, `mocc`, `contactn`, `grlvl`, `lstschool`, `schooladd`) 
	VALUES ('$lname', '$fname', '$mname', '$gender', '$address', '$zip', '$father', '$mother', '$focc', '$mocc', '$contact', '$grlvl', '$lstschool', '$schooladd');";


	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {	
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

$conn->close();
?>