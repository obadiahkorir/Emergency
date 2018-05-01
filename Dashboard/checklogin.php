<?php
 		session_start();
		include 'database.php';
		if(isset($_POST['submit'])){

			$Uname = $_POST ['username'];
			$Password = $_POST ['password'];
			$query = "select * from admin where username = '$Uname' AND password= '$Password' ";
			$result = mysqli_query($conn, $query);
				if ($Uname==''){
				echo "<script>alert('Empty Username')</script>";
				exit();
				}	
				if ($Password==''){
				echo "<script>alert('Empty Password!')</script>";
				exit();
				}	
		if (mysqli_num_rows($result)>0){
			$_SESSION['username'] = $_POST['username'];
			echo "<script>alert ('Welcome $Uname !')</script>";
			echo"<script>window.open('index-2.html','_self')</script>";
		}
		else 
		{
		echo "<script>alert ('Username or Password is invalid! ')</script>";
                header("location:../dashboard/login.php");
		}
		}
		?>