<style>
h1{
color: red;
font-weight: bold;
font-family: sans-serif;
font-size: xx-large;
text-align: center;
}
h2{
color: green;
font-weight: bold;
font-family: sans-serif;
font-size: xx-large;
text-align: center;
}
</style>



<?php
session_start();
//$user="";
//$password="";
include ("headtab.html");
if (isset($_SESSION['Uname']) and isset($_SESSION['Upwd']))
{
	$user=$_SESSION["Uname"];
	$password=$_SESSION["Upwd"];
}
else
{	
	$user=$_REQUEST["userid"];
	$password=$_REQUEST["pwd"];
}

$servername="localhost";
$server_username="root";
$serverpassword="root";
$db="mydb";

$con =new mysqli($servername, $server_username, $serverpassword, $db);

//if(isset())
if($con->connect_error)
{
die("Connection Failed".connect_error);
}

echo "$user<br/>";
echo "$password<br/>";
$sql="SELECT * FROM abcd WHERE Firstname='$user' AND Password='$password'";
$data=$con->query($sql);

if($data->num_rows == 1)
{
//include ("headtab.html");
echo"<h1>YOU ARE SUCCESSFULLY LOGGED IN</h1>";
$_SESSION['Uname']=$user;
$_SESSION['Upwd']=$password;
while($row = $data->fetch_assoc())
{
echo"<table border='2' bordercolor='black'><tr><td>Firstname=".$row['Firstname']."</td></tr><br/>";
echo"<tr><td>Lasttname=".$row['Lastname']."</td></tr><br/>";
echo"<tr><td>Email=".$row['Email']."</td></tr><br/>";
echo"<tr><td>Time & Date=".$row['Reg_date']."</td></tr><br/>";
echo"<tr><td>Password =".$row['Password']."</td></tr><br/>";
}

}
else
{
 echo "<h1>UNAUTHORISED ACCESS</h1>";

}

/*if($user == "issac" & $password == "01234" )
{
}
else
{
 header("Location:Error.php");
}*/

/*echo $_SESSION['Uname'];
echo $_SESSION['Upwd'];*/

?> 