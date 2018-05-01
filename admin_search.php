<?php

//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_POST["search"]);

//check whether the name parsed is empty
if($searchTerm == "")
{
    echo "Enter name you are searching for.";
    exit();
}
?>

<?php
//database connection info
$host = "localhost"; //server
$db = "ehelp"; //database name
$user = "root"; //dabases user name
$pwd = ""; //password

//connecting to server and creating link to database
$link = mysqli_connect($host, $user, $pwd, $db);
?>
<?php
//MYSQL search statement
$query ="SELECT * FROM admin WHERE Username LIKE '%$searchTerm%'";

$results = mysqli_query($link, $query);
?>