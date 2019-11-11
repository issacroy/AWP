<?php
$servername="localhost";
$username="root";
$password="root";
$database="mydb";

$con= new mysqli($servername,$username,$password,$database);

if($con->connect_error)
{
die("Error in connection".connect_error);
}

$F=$_REQUEST['Firstname'];
$L=$_REQUEST['Lastname'];
$E=$_REQUEST['Email'];

$data=$con->prepare("INSERT INTO abcd (Firstname,Lastname,Email) VALUES (?, ?, ?)");

$data->bind_param("sss", $Firstname, $Lastname, $Email);

$Firstname= $F;
$Lastname= $L;
$Email= $E;
$data->execute();

echo "records created successfully";
include('useraccount.html');
$data->close();
$con->close();
?>