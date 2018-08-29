<?php
   include('config.php');

$sql="INSERT INTO mails(recipient,receiver,cc ,subject,message) 
VALUES ('$_POST[from]', '$_POST[to]', '$_POST[cc]', '$_POST[subject]', '$_POST[message]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  echo"<script type='text/javascript'>var x=alert('Message Sent Successfully');";

echo"window.location='mailbox.php'";
echo"</script>";
 mysqli_close($conn);
?> 
