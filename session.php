<?php
include('config.php');
session_start();
$check=$_SESSION['session_email'];
 $result=mysqli_query($conn,"select email from admin where email='$check' ");
$row=mysqli_fetch_array( $result);
$login_session=$row['email'];
if(!isset($login_session))
{
echo"<script type='text/javascript'>var x=alert('Please Session Has Expired');";
echo"window.location='../Sign In.php'";
echo"</script>";
}
?>