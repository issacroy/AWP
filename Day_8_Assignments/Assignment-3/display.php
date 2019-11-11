<?php
$servername="localhost";
$username="root";
$password="root";
$database="mydb";

$con= new mysqli($servername, $username, $password, $database);

if($con->connect_error)
{
die("Connection error".connect_error);
}
$i=0;
$sql="SELECT * FROM ABCD";
$data=$con->query($sql);
echo"<label>FirstName:</label><select name='edu'>";
while($row=$data->fetch_assoc())
{
echo "<option value='$i++'>".$row['Firstname']."</option>";
}
echo"</select>";
$con->close();
?>