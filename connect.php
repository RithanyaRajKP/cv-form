<?php
	$name = $_POST['name'];
	$MobileNo = $_POST['MobileNo'];
	$WhatsappNo = $_POST['WhatsappNo'];
	$qualification = $_POST['qualification'];
	$intern = $_POST['intern'];
	$email = $_POST['email'];
	$clg = $_POST['clg'];
	$refer = $_POST['refer'];
	$filename = $_POST['filename'];


	
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, MobileNo,WhatsappNo, qualification,intern, email, clg, refer,filename) values(?, ?, ?, ?, ?,?,?,?,?)");
		$stmt->bind_param("sssssssss", $name, $MobileNo,$WhatsappNo, $qualification,$intern, $email, $clg, $refer,$filename);
		$execval = $stmt->execute();
		
		echo $name;

		$stmt->close();
		$conn->close();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Done</title>
	<style type="text/css">
body{

padding-top: 200px;
padding-left: 500px;
font-size: 30px;
		}
.button4 {
	background-color: #555555; 
	color: white;
	font-size: 20px;
	border: none;
	padding: 15px 30px;
	border-radius: 12px;
}
	</style>
</head>
<body>
<p id="a1"><i>Registration is successful...</i></p>
<p style="padding-left: 40px">THANK YOU!!!!</p>
</body>
<a href="index1.php" style="padding-left: 100px;"><button class="button4">BACK</button></a>
</html>