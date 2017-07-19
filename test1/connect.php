<?php
// $dbhost='localhost';
// $dbname='test-db';
// $dbusername='root';
// $dbpassword=' ';

// // $mysqli=mysqli_connect($dbhost,$dbname,$dbusername,$dbpassword);


	$con = mysql_connect("localhost","root","") or die("No databse found...!!!");
 	$select_db = mysql_select_db("test_db", $con) or die("No database selected");
 	// echo "connected";
?>