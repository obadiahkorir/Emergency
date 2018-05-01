<?php
session_start();
include("config.php");
$username  = $_POST['username'];
$password  = $_POST['password'];


$selectLoginQuery = "select * from users where username = '".$username."' and password = '".$password."' ";
 
$rs = mysqli_query($conn,$selectLoginQuery) or die(mysql_error());
$c=mysqli_num_rows($rs);
$row = mysqli_fetch_array($rs);
if($c==1)
{
	$_SESSION['username'] = $username;
	$_SESSION['type'] = $row[type];	
	header("location:admin_home.php?msg=Logged in Successfully!");
}
else
{
	header("location:login.php?msg=Sorry!...Invalid User");
}
?>