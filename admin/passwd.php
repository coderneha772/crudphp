<?php
include("../config.php");
include("header.php");
include("lock.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

	<form method="post" action="passwd2.php">
      <table width="314" border="1" bgcolor="#99CCFF">
        
        
        
        <tr>
          <td width="147">Enter Username : </td>
          <td width="151"><input type="text" name="username" /></td>
        </tr>
        <tr>
          <td>Enter Old Password: </td>
          <td><label>
            <input type="password" name="password" />
          </label></td>
        </tr>
		<tr>
          <td>Enter Confirm Pasword: </td>
          <td><label>
            <input type="password" name="password2" />
          </label></td>
        </tr>
        <tr>
          <td>Enter New password : </td>
          <td><input type="password" name="newpass" /></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Submit" />
          </div></td>
        </tr>
        </table>
	</form>
   
</body>
</html>
