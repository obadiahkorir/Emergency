 <?php
 include 'database.php';
 if(isset($_POST['submit'])){
	$Uname = $_POST['username'];
        $Password1 = $_POST['password'];
	$Password2 = $_POST['password'];
        $Firstname = $_POST['fname'];
        $Secondname = $_POST['sname'];
        $Email = $_POST["email"];
        $Cox = $_POST["course"];
        $Age = $_POST["age"];
   
	$query = "insert into register (username,password1,password2,firstname,secondname,email,course,age) values ('$Uname','$Password1','$Password2','$Firstname','$Secondname','$Email','$Cox','$Age')";
	 if (mysqli_query($conn,$query)){
	 	session_start();
        $_SESSION['username'] = $_POST['username'];
	 			if ($Uname==''){
				echo "<script>alert('Empty Username!')</script>";
				exit();
				}	
				if ($Password1==''){
				echo "<script>alert('Empty Password!')</script>";
				exit();
				}	
				if ($Password2==''){
				echo "<script>alert('Empty Password!')</script>";
				exit();
                                }	
				if ($Firstname==''){
				echo "<script>alert('Empty Firstname!')</script>";
				exit();
                                }	
				if ($Secondname==''){
				echo "<script>alert('Empty SecondName!')</script>";
				exit();
                                }	
				if ($Email==''){
				echo "<script>alert('Empty Email!')</script>";
				exit();
                                }	
				if ($Cox==''){
				echo "<script>alert('Empty Course!')</script>";
				exit();
				}	
	echo"<script type='text/javascript'>var x=alert('Registration successful,Welcome to our company. You can now login');";
	echo"window.location='../dashboard/login.php'";
            echo"</script>";


//			echo"<script>window.open('login.php','_self')</script>";	 
									 }
	 else{
		 echo "<script>alert ('Please recheck details!')</script>";
		 }
 }
 ?>
 
 
 