<?php
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'ehelp');
$sql = "SELECT `id`,`first_name`,`second_name` FROM `police`";
$setRec = mysqli_query($conn, $sql);
$columnHeader = '';
$columnHeader = "User Id" . "\t" . "First Name" . "\t" . "Second Name" . "\t";
$setData = '';
while ($rec = mysqli_fetch_row($setRec)) {
$rowData = '';
foreach ($rec as $value) {
$value = '"' . $value . '"' . "\t";
$rowData .= $value;
}
$setData .= trim($rowData) . "\n";
}
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=police.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?> 