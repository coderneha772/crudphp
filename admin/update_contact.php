<?php

include("../config.php");
include("header.php");
//include("lock.php");
$a=$_REQUEST['id'];
$sql ="select * from contactus where id='$a'";
$result = $conn->query($sql);
while($a3 = $result->fetch_assoc())
{
echo "<form action='update2_contact.php' method='post'>";
echo "<table border='1'>";
echo "<tr>";
echo "<td>";
echo "Id";
echo "</td>";
$p=$a3['id'];
echo "<td>";
echo "<input type='text' name='n1' value='$p' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Name";
echo "</td>";
$q=$a3['name'];
echo "<td>";
echo "<input type='text' name='n2' value='$q' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Phone No";
echo "</td>";
$r=$a3['phoneno'];
echo "<td>";
echo "<input type='text' name='n3' value='$r' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Email";
echo "</td>";
$s=$a3['email'];
echo "<td>";
echo "<input type='text' name='n4' value='$s' />";
echo "</td>";
echo "</tr>";

/* echo "<tr>";
echo "<td>";
echo "ContactNo";
echo "</td>";
$t=$a3['ContactNo'];
echo "<td>";
echo "<input type='text' name='n5' value='$t' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Country";
echo "</td>";
$u=$a3['Country'];
echo "<td>";
echo "<input type='text' name='n6' value='$u' />";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "Message";
echo "</td>";
$v=$a3['Message'];
echo "<td>";
echo "<input type='text' name='n7' value='$v' />";
echo "</td>";
echo "</tr>";
*/
echo "<tr>";
echo "<td>";
echo "<input type='submit' value='Submit'/>";
echo "</td>"; 
echo "<tr>";
echo "</table>";
echo "</form>";
}
?>
