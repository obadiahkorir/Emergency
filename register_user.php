<?php
 include 'config.php';
 if(isset($_POST['submit'])){
         $Firstname = $_POST['fname'];
         
         $query = "insert into admin(first_name) values ('$Firstname')";
         if (mysqli_query($conn,$query)){
        session_start();
        $_SESSION['Firstname'] = $_POST['fname'];
                if ($Firstname==''){
                echo "<script>alert('Empty Firstname!')</script>";
                exit();
                }   
                
        echo"<script>window.open('add_user.php','_self')</script>";    
         }
         
 }
 ?>
 
 
 