<?php include("header.php"); ?>
<?php

include("connect.php");

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];

$result="INSERT INTO add_data (name,email) VALUES ('$name','$email')";

	if (mysql_query($result)) 
	{
	echo "New record created successfully";
	} 
	else {
	echo "Error: " . $result ;
	}

}
?>
