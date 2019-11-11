<?php
$servername="localhost";
$username="root";
$password="root";
$database="mydb";
$conn=new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
{
die("Error in connection".connect_error);
}

$sql="SELECT * FROM ABCD";
$data=$conn->query($sql);


while($row=$data->fetch_assoc())
{
 //include(display.html);
 echo "FirstName = ".$row['Firstname']."<br/>LastName = ".$row['Lastname']."<br/>Email = ".$row['Email']."<br/><br/>";
 
 }

$conn->close();
?>