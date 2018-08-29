<?php
$uname = $_POST['txtusername'];
$fname = $_POST['txtfirstname'];
$lname = $_POST['txtlastname'];
$county = $_POST['txtcounty'];
$age= $_POST['txtage'];
$birth= $_POST['txtdob'];
$mobile= $_POST['txtmobile'];
$gender= $_POST['txtgender'];
$rank= $_POST['txtrank'];
$addres= $_POST['txtaddress'];
$mail= $_POST['txtemail'];
include('config.php');

$sql = "INSERT INTO police VALUES(NULL,'$uname','$fname','$lname','$county','$age','$birth','$mobile','$gender','$rank','$addres','$mail')";

if (mysqli_query($conn,$sql))
{
	echo"<script type='text/javascript'>var x=alert('Congratulations,New Incident Registered');";
    echo"window.location='hotline_list.php'";
    echo"</script>";
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>