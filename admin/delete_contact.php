<?php
//include("lock.php");
include("header.php");
echo "<br>";
echo "<br>";
include("../config.php");
$a= $_REQUEST['id'];
$a5="delete from contactus where id='$a'";
if ($conn->query($a5) === TRUE) 
{
echo "deleted ";
echo "<a href='selectforcontactusform.php'>"." GO Back "."</a>";
}
else {
  echo "try again " . $conn->error;
}
?>