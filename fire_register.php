<?php
$location = $_POST['txtlocation'];
$type = $_POST['txttype'];
$county= $_POST['txtcounty'];
$date = $_POST['txtdate'];
$descrpt= $_POST['txtdescription'];
$email= $_POST['txtemail'];
$address = $_POST['txtaddress'];
$mobile = $_POST['txtmobile'];
$gender= $_POST['gender'];

include('config.php');

$sql = "INSERT INTO fire VALUES(NULL,'$location','$type','$county','$date','$descrpt','$email','$address','$mobile'
,'$gender')";

if (mysqli_query($conn,$sql))
{
	echo "Registered Successfully, Welcome";
	header('location:fire_list.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>