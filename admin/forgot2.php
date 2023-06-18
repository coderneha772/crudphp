<?php include("header.php");
include("lock.php");

 ?>
<?php
$username=$_POST['user'];
		  
include("../config.php");

$sql = "select * from admin where username='$username' ";
$result = $conn->query($sql);
		echo "<center>";
		echo "<table bgcolor='#99CCFF' width=500>";
		echo "<tr><td>";
			echo "Diplay User Password :";
		
echo "<tr>";
echo "</table>";
echo "<br>";


echo "<table border=1  bgcolor='#99CCFF' width=500>";
while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>Username : ";

echo "<td>";
echo "<input type=text name=name value=" . $row['username'] . ">";

echo "</tr>";


echo "<tr>";
echo "<td>Password : ";

echo "<td>";
echo "<input type=text name=name value=" . $row['password'] . ">";

echo "</tr>";
echo "</table>";
}

?>


