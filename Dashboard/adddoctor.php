<?php
 include 'database.php';
 if(isset($_POST['submit'])){
	$Uname = $_POST['username'];
//        $Firstname = $_POST['fname'];
//        $Secondname = $_POST['sname'];
//         $Password1 = $_POST['password'];
//        $Email = $_POST["email"];
//        $Mobile =$_POST["mobile"];
//        $Address =$_POST["address"];
//        $YOS =$_POST["year"];
   
	$query = "insert into patient (username) 
	values ('$Uname')";
	 if (mysqli_query($conn,$query)){
	 	session_start();
        $_SESSION['username'] = $_POST['username'];
	 			if ($Uname==''){
				echo "<script>alert('Empty Username!')</script>";
				exit();
				}	
//				if ($Password1==''){
//				echo "<script>alert('Empty Password!')</script>";
//				exit();
//				}	
//					
//				if ($Firstname==''){
//				echo "<script>alert('Empty Firstname!')</script>";
//				exit();
//                                }	
//				if ($Secondname==''){
//				echo "<script>alert('Empty SecondName!')</script>";
//				exit();
//                                }	
//				if ($Email==''){
//				echo "<script>alert('Empty Email!')</script>";
//				exit();
//                                }	
				
	echo"<script type='text/javascript'>var x=alert('New Patient Registered successful,Welcome to Pwani E-health. You can now login');";
	echo"window.location='../dashboard/index-2.html'";
            echo"</script>";


//			echo"<script>window.open('login.php','_self')</script>";	 
									 }
	 else{
		 echo "<script>alert ('Please recheck details!')</script>";
		 echo"<script>window.open('forms_basic.html','_self')</script>";
		 }
 }
 ?>
 
 
 