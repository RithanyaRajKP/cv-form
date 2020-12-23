<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        
body{
font-size: 25px;
background: url("n.jpg");
color: black;

}
.button4 {
    background-color: #555555; 
    color: white;
    font-size: 20px;
    border: none;
    padding: 12px 27px;
    border-radius: 12px;
}
.nn{

    padding-left: 200px;
}
.aa{
    padding-left: 150px;
}
.xx{

    padding-left: 280px;
}

    </style>
</head>
<body >
<div class="nn">
<?php

//my database name: test1
$conn = new mysqli('localhost','root','','test1');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//my table name:registration

$sql = "SELECT id, name, MobileNo, WhatsappNo,qualification,intern,email,clg,refer,filename FROM registration";
$result = $conn->query($sql);
echo "<div class='xx'>DATABASE</div>";
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<table><tr><td><b> id:</b>". $row["id"]."</td></tr>". " <tr><td><b>  Name: </b>". $row["name"]."</td></tr>". "<tr><td><b>MobileNo: </b>  " . $row["MobileNo"] ."</td></tr>"." <tr><td><b> WhatsappNo: </b>   ". $row["WhatsappNo"]."</td></tr>". "  <tr><td><b> qualification: </b>  ". $row["qualification"]."</td></tr>". " <tr><td><b> intern: </b> " . $row["intern"] ."</td></tr>"."<tr><td><b> email: </b>  " . $row["email"] ."</td></tr>"."<tr><td><b> clg: </b> ". $row["clg"]. "</td></tr>"." <tr><td><b> refer:</b>  ". $row["refer"]. "</td></tr>"."<tr><td><b> filename: </b> " . $row["filename"] ."</td></tr>". "<br> </table>";
    }
} else {
    echo "0 results";
}

$conn->close();
?></div>
<br>
<div class="aa"><a href="index1.php"><button class="button4">Back</button></a></div>
</body>
</html>