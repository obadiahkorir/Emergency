
 <?php
include("config.php");
  if(isset($_POST['save']))
{
    $sql = "INSERT INTO admin (username, password, email)
    VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";

    $result = mysqli_query($conn,$sql);
}

?>