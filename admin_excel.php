<?php
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'ehelp');
$sql = "SELECT `user_id`,`username`,`email`,`category`,`password` FROM `admin`";
$setRec = mysqli_query($conn, $sql);
$columnHeader = '';
$columnHeader = "User Id" . "\t" . "Username" . "\t" . "EMAIL" . "\t". "CATEGORY" . "\t". "PASSWORD" . "\t";
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
header("Content-Disposition: attachment; filename=admin.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?> 