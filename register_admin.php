<?php
include("config.php");
$date=date("Y/m/d");
$username=$_POST['username'];
$email=$_POST['email'];
$category=$_POST['category'];
$pas=$_POST['password'];
$password=md5($pas);
$con_email=mysqli_query($conn,"SELECT email FROM admin WHERE email='$email'");
$count=mysqli_num_rows($con_email);
if($count==0){
$sql=mysqli_query($conn,"INSERT INTO admin(username,email,category,password,date)VALUES('$username','$email','$category','$password','$date')");
        if(!$sql){
            die("Could not execute query. Kindly Check the Possible Error");}
            else{
                  echo"<script type='text/javascript'>var x=alert('Registration successful,You can now login');";
				  echo"window.location='index.php'";
echo"</script>";
}
}
elseif($count==1){
echo"<script type='text/javascript'>var x=alert('Email already in use,Kindly Try an alternative Email and try to Login again');";
				 echo"history.back()</script>";
echo"</script>";
}
?>