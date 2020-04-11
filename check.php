<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$uname=$_GET["uname"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "select * from student where uname like '$uname'";
$result=$conn->query($sql);
if ($result->num_rows > 0)
{
    echo "not available";
}
else 
{
    echo "available";
}


$conn->close();
?>