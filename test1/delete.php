<html>
<body>
<?php
include('connect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from add_data where id='$id'");
if($query1)
{
header('location:view.php');
}
}
?>
</body>
</html>
