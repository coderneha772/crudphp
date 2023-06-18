<?php
//include("lock.php");
include("../config.php");
include("header.php");
echo "<br>";
echo "<br>";
echo "<br>";
$p=$_REQUEST['n1'];
//id
$q=$_REQUEST['n2'];
//name
$r=$_REQUEST['n3'];
//phoneno
$s=$_REQUEST['n4'];
//email

$b="select * from contactus where id='$p', name='$q', phoneno='$r', email='$s'";
$b1= $conn->query($b);
$c="update contactus set  name='$q', email='$s',phoneno='$r' where id='$p'";
if($conn->query($c) === TRUE) {
  echo "Updated successfully";
}
 else
	 {
  echo "record not Updated" . $z->error;
  echo "<a href='selectforcontactusform.php'> ". "Go Back" ."</a>";
}


?>