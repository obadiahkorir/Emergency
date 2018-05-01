
<?php

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db("database", $link);

$result = mysqli_query($link,"SELECT * FROM table1", $link);
$num_rows = mysqli_num_rows($result);

echo "$num_rows Rows\n";

?>
