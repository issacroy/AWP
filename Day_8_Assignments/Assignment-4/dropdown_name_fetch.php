<?php
$servername="localhost";
$username="root";
$password="root";
$db="mydb";

$con= new mysqli($servername, $username, $password, $db);

if($con->connect_error)
{
die("Connection Error".connect_error);
}
 $Name=$_POST['fname'];
$sql="SELECT * FROM ABCD WHERE Firstname='$Name'" ;
$data=$con->query($sql);

$row=$data->fetch_assoc();

echo "FirstName = ".$row['Firstname']."<br/>LastName = ".$row['Lastname']."<br/>Email = ".$row['Email']."<br/><br/>";
//include("dropdown_name_fetch.html");
$con->close();
?>