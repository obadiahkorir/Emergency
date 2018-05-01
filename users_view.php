<?php
session_start();
$session=$_SESSION["username"];

include("config.php");
$sql=mysqli_query("$conn,SELECT * FROM admin ");
$row=mysqli_fetch_array($sql);

?>