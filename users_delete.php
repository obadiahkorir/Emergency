<?php
$id = $_GET['delID'];

include("config.php");

$sql = "DELETE FROM users WHERE id=$id";
if(mysqli_query($conn,$sql))
{
	header('location:user_list.php');
}
else
{
	die('Could not delete record:' .mysqli_error());
}
?>