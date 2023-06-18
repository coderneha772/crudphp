<?php
//include("lock.php");
include("header.php");
echo "<br>";
echo "<br>";
echo "<br>";
include("../config.php");
$a= $_REQUEST['id'];
$sql = "select * from contactus where id='$a'";
$result = $conn->query($sql);
echo "<table border='3'>";

echo "<tr>";

echo "<td>";
echo "ID";
echo "</td>";

echo "<td>";
echo "Name";
echo "</td>";

echo "<td>";
echo "Email";
echo "</td>";

echo "<td>";
echo "ContactNo";
echo "</td>";


echo "</tr>";
//while($a3=mysqli_fetch_array($a2))
	while($a3 = $result->fetch_assoc())
{
echo "<tr>";

echo "<td>";
echo $a3['id'];
echo "</td>";

echo "<td>";
echo $a3['name'];
echo "</td>";

echo "<td>";
echo $a3['email'];
echo "</td>";


echo "<td>";
echo $a3['phoneno'];
echo "</td>";



echo "</tr>";
}
echo "</table>";
echo "<a href='selectforcontactusform.php'>"." GO Back "."</a>";
?>