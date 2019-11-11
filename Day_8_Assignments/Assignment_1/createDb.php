<?php
$servername="localhost";
$username="root";
$password="root";
$database="mydb";
 
$con = new mysqli($servername,$username,$password,$database);

if($con->connect_error)
{
die("Connection failed".$con->connect_error);
}

$sql="CREATE TABLE ABCD(
Id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname varchar(30) NOT NULL,
Lastname varchar(30) NOT NULL,
Email varchar(40),
Reg_date TIMESTAMP
)";

if($con->query($sql) === TRUE)
{
echo"Table ABCD created successfully";
}
else
{
echo"Table Creation Failed:".$con->error;
}

$con->close();
?>