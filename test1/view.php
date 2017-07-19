<html>

 
<body>
<?php include("header.php"); ?>
<table>

<tr>
<td>Name</td>
<td>email</td>

<?php

include("connect.php");

$sql="SELECT * FROM add_data";
$result = mysql_query($sql);

while($res=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$res['name']."</td>";
echo "<td>".$res['email']."</td>";
echo "<td><a href='edit.php?id=".$res['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$res['id']."'>x</a></td>";      

echo "</tr>";
}


?>
</body>
</html>
