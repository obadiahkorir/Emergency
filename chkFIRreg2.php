<?php
session_start();
include("config.php");
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender'];
$address =$_POST['address'];
$pincode = $_POST['pincode'];
$contactno = $_POST['contactno'];
$emailid= $_POST['emailid'];
$city =$_POST['city'];

    $insertQuery = "insert into mstr_profile(first_name,middle_name,last_name,gender,address,
	                                         contact_no,emailid,username,city_id,pincode) 
		                              values ('".$firstname."','".$middlename."','".$lastname."',
									          '".$gender."','".$address."','".$contactno."',
											  '".$emailid."','".$_SESSION['username']."',
											  '".$city."','".$pincode."' )";
	
	$msg = base64_encode("Registered Successfully");
	
	if(mysqli_query($conn,$insertQuery))
	{
		$getidQuery = "select *from mstr_profile order by id desc limit 1";
	    $rsgetid = mysqli_query($conn,$getidQuery);
	  while($rowgetid = mysqli_fetch_array($rsgetid))
	   {
	     $claim_id = $rowgetid['id'];     
	      $_SESSION['claim_id'] = $claim_id;    		   
	    }
		header("location:FIRreg3.php?msg=$msg");	  
	 }
	else
	 {
		header("location:FIRreg2.php?msg=Not Registered");
	 }
?>