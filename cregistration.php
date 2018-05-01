
<?php
 include 'config.php';
 if(isset($_POST['submit'])){
	 $Firstname = $_POST['fname'];
	 $Othernames = $_POST['oname'];
	 
	 
	 $query = "insert into admin(first_name,username) values ('$Firstname','$Othernames')";
	 if (mysqli_query($conn,$query)){
        session_start();
        $_SESSION['username'] = $_POST['fname'];
                if ($Firstname==''){
                echo "<script>alert('Empty Firstname!')</script>";
                exit();
                }   
                if ($Othernames==''){
                echo "<script>alert('Empty Othernames!')</script>";
                exit();
                }   
                
                }
	echo"<script>window.open('add_admin.php','_self')</script>";	 
	 }
	 
 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 