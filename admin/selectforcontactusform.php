<?php
include("../config.php");
include("header.php");
include("lock.php");
$sql = "select * from contactus";
$result = $conn->query($sql);
echo "<table border='3'>";
echo "<tr>";
echo "<th>"."ID"."</th>";
echo "<th>"."Name"."</th>";
echo "<th>"."ContactNo"."</th>";
echo "<th>"."Email"."</th>";
echo "<th>"."CRUD"."</th>";
echo "<tr>";
while($c = $result->fetch_assoc())
{
echo "<tr>";
echo "<th>".$c["id"]."</th>";
echo "<th>".$c["name"]."</th>";
echo "<th>".$c["phoneno"]."</th>";
echo "<th>".$c["email"]."</th>";
echo "<td>";
echo '<a href="delete_contact.php?id='.$c['id'].'"> Delete </a>';
echo '<a href="view_contact.php?id='.$c['id'].'"> View </a>'; 
echo '<a href="update_contact.php?id='.$c['id'].'"> Update </a>';

echo "</td>";

echo "<tr>";
}
echo "</table>";
?>