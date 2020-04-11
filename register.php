<?php
$uname=$_GET["uname"];
$name=$_GET["name"];
$fname=$_GET["fname"];
$pwd=$_GET["pwd"];
$dob=$_GET["dob"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO student(uname, name, fname,pwd,dob)
VALUES ('$uname', '$name', '$fname','$pwd','$dob')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>You are registered successfully</h1>";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>