<?php
include("../config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form1 
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 

$sql="SELECT id FROM admin WHERE username='$myusername' and password='$mypassword'";
$result = $conn->query($sql);
// If result matched $myusername and $mypassword, table row must be 1 row
	if($result->num_rows==1)
		
{
//session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: selectforcontactusform.php");
}
else 
{
$error="Your Login Name or Password is invalid";
echo $error;
}
}
?>



<html>
<body>
<p align="center" style="color:#003333" style="font-size:72"> REAL ESTATE </p>
<img src="images/home5.jpg" width="960" height="250" style="margin-left:20" style="border-radius:10"/>
</body>
</html>
<html>
<body background="images/b14.jpg">
<br/><br/><br/>


<center>
<h1><u><font size="+2" color="#CC0000">WELCOME  ADMIN </u></font></h1>
<br/><br/><br/>
<form action="" method="post">
<label><font size="+2" color="#0066FF">&nbsp;&nbsp;&nbsp;UserName :</font></label>
&nbsp;&nbsp;&nbsp;<input type="text" name="username"/><br />
<label><font size="+2" color="#0066FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password :</font></label>
&nbsp;&nbsp;<input type="password" name="password"/><br/><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value=" Submit " style="color:#CC0000"/><br />
</form>
</table>
</center>
</body>
</html>

