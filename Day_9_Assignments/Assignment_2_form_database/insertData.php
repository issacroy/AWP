<?php
$servername="localhost";
$username="root";
$password="root";
$db="mydb";

$con=new mysqli($servername, $username, $password, $db);

if($con->connect_error)
{
die("Error in connection".connect_error);
}

$Fname=$_REQUEST['first'];
$Lname=$_REQUEST['last'];
$Age=$_REQUEST['age'];
$Date=$_REQUEST['date'];
$Sex=$_REQUEST['sex'];
$Mob=$_REQUEST['Mobile'];
$Add=$_REQUEST['Address'];
$Pincode=$_REQUEST['pin'];
$Email=$_REQUEST['email'];
$Education=$_REQUEST['edu'];

$Sport=$_POST['sports'];
$Sports=implode(",",$Sport);
//print_r($Sports);

$Hobby[]=$_REQUEST['hobby'];

foreach($Hobby[] as $v)
{

}

/*$data=$con->prepare("INSERT INTO form (Firstname, Lastname, Age, DOB, Sex, Mobile, Address, Pincode, Email, Education, Sports, Hobbies) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$data->bind_param("ssisssss", $Fname, $Lname, $Age, $Date, $Sex, $Mob, $Add, $Pincode, $Email, $Education, $Sports, $Hobbies);
$data->execute();

echo"records created successfully";
echo "<a href='form.html'>Home</a>";*/
?>