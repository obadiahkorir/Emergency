<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(ISSET($_POST['submit'])){
		$conn = new mysqli("localhost", "root", "", "health") or die(mysqli_error());
		$query = $conn->query("SELECT *FROM `admin` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$valid = $query->num_rows;
			if($valid > 0){
				$_SESSION['admin_id'] = $fetch['admin_id'];
				header("location:index-2.html");
			}else{
				echo "<script>alert('Invalid username or password')</script>";
				echo "<script>window.location = 'login.php'</script>";
			}
		$conn->close();
	}	