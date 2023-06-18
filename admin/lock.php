<?php
include("../config.php");
session_start();
$user_check=$_SESSION['login_user'];

$sql = "select username from admin where username='$user_check'";
$result = $conn->query($sql);

$row= $result->fetch_assoc();
/*$row=mysqli_fetch_array($result);*/
$login_session=$row['username'];
if(!isset($login_session))
{
header("Location: index.php");
}
?>






