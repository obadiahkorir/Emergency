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
	echo"<script type='text/javascript'>var x=alert('Congratulations,New Incident Registered');";
    echo"window.location='hotline_list.php'";
    echo"</script>";
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>