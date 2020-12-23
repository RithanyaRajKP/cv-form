<?php

$conn = "";
//my database name:test1
try {
	$servername = "localhost:3306";
	$dbname = "test1";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=test1",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
