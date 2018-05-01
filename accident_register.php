<?php
$location = $_POST['txtlocation'];
$type = $_POST['txttype'];
$date = $_POST['txtdate'];
$address = $_POST['txtaddress'];
$mobile = $_POST['txtmobile'];
$descrpt= $_POST['txtdescription'];
$email= $_POST['txtemail'];
$county= $_POST['txtcounty'];
$gender= $_POST['gender'];

include('config.php');

$sql = "INSERT INTO accident VALUES(NULL,'$location','$type','$date','$address','$mobile','$descrpt','$email','$county'
,'$gender')";

if (mysqli_query($conn,$sql))
{
 header("location: accident_list.php");
  echo "Registered Successfully";
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>