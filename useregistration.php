<?php
session_start();
include("config.php");
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];

//$username=$_POST['username'];
$username=$_POST['loginname'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

if($password == $rpassword)
{
 									  
	$insertloginQuery = "insert into mstr_login(username,password,type,last_logindatetime) 
	                                   values ('".$username."','".$password."','user',now())";
   
	$insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,Dob,address,
	                                       contact_no,emailid,profile_photo,username,city_id,pincode)
											values('".$firstname."','".$middlename."','".$lastname."',
									               '".$gender."','".$bdate."','".$address."',
											      '".$contactno."','".$emailid."','".$profilephoto."',
									               '".$username."','".$city."','".$pincode."' )";
	
	$sql1 = "select username from mstr_login where username = '$username'";
    $result1 = mysqlI_query($CONN,$sql1) or die ("Couldn't execute query.");										  
    
	$num1=mysqlI_num_rows($result1);
	
	if($num1 == 1)
	{
		header("location:registration.php?msg=Sorry, UserName already Exists !");
	}
	else
	{
		
		if((mysqli_query($CONN,$insertloginQuery)) && (mysqli_query($conn,$insertQuery)))
		  {
			$_SESSION['username']=$username;
			header("location:login.php?msg=Registered Successfully");	  
		   }
		else
		 {
			header("location:login.php?msg=Not registered");
		  }
       }  
else
 {
   echo "Error:Password mismatch";
  }
?>