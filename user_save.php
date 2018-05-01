<?php
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$type = $_POST['txttype'];
$status = $_POST['txtstatus'];
$date = $_POST['txtdate'];
include('config.php');

$sql = "INSERT INTO users VALUES(NULL,'$un','$pw','$type','$status','$date')";

if (mysqli_query($conn,$sql))
{
	echo "Registered Successfully, Welcome";
	header('location:user_list.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>