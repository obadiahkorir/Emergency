<?php
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$email = $_POST['txtemail'];
$county= $_POST['txtcounty'];
$age= $_POST['txtage'];
$dob= $_POST['dob'];
$phone= $_POST['mobile'];
$blood= $_POST['blood'];
$gender= $_POST['gender'];

include('config.php');

$sql = "INSERT INTO admin VALUES(NULL,'$un','$pw','$fn','$ln','$email','$county','$age','$dob','$phone','$blood',
'$gender')";

if (mysqli_query($conn,$sql))
{
	header('location:aadmin_list.php');
	echo "Registered Successfully, Welcome";
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>