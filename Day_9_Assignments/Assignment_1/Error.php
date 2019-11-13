<style>
h1{
color: red;
font-weight: bold;
font-family: sans-serif;
font-size: xx-large;
text-align: center;
}
</style>
<?php
session_start();
include ("login.php");

if(is_null($_SESSION['Uname']))
{
echo "<h1>YOU ARE NOT LOGGED IN</h1>";
}
else
{
echo"<h1>WRONG ENTRY,PLEASE TRY AGAIN</h1>";
}
?>