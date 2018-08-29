 <?php
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'ehelp');
$sql = "SELECT `id`,`firelocation`,`firetype` FROM `fire`";
$setRec = mysqli_query($conn, $sql);
$columnHeader = '';
$columnHeader = "Id" . "\t" . "Fire Location" . "\t" . "Fire Type" . "\t";
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
header("Content-Disposition: attachment; filename=Fire.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";
?> 