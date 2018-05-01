<?php
$hotline = $_POST['txthotline'];
$type = $_POST['txttype'];
$county= $_POST['txtcounty'];
$date = $_POST['txtdate'];
$email= $_POST['txtemail'];
$address = $_POST['txtaddress'];

include('config.php');

$sql = "INSERT INTO hotline VALUES(NULL,'$hotline','$type','$county','$date','$email','$address')";

if (mysqli_query($conn,$sql))
{
	echo "Registered Successfully, Welcome";
	header('location:hotline_list.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>