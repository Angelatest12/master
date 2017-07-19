<html>
<body>
<?php include("header.php"); ?>
<?php
include('connect.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$query3=mysql_query("update add_data set name='$name', email='$email' where id='$id'");
if($query3)
{
header('location:view.php');
}
}
$query1=mysql_query("select * from add_data where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form method="post" action="">
Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br />
Email:<input type="text" name="email" value="<?php echo $query2['email']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>