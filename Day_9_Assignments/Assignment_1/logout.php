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
 include ("headtab.html");
 if(isset($_SESSION['Uname']))
 {
 session_unset();
 session_destroy();
 //$con->close();
 echo"<h2> YOU ARE SUCCESFULLY LOGGED OUT<h2>";
 }
 else
 {
 echo"<h1>YOU ARE NOT LOGGED IN</h1>";
 }
 ?>