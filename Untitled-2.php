<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "checkmate";
	
	$conn = new MySQLi($servername,$username,$password,$dbname);
	
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	echo("HELLOOooo")
	?>
</body>
</html>