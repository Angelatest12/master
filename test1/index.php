<html>
<head>
<title>Add Data</title>
</head>

<body>
<?php include("header.php"); ?>
<form method='POST' action='add.php' enctype="multipart/form-data">

	<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Add"></td>
	</tr>


	</table>
</form>
</body>

</html>