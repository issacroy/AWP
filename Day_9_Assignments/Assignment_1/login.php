
<html>
<head>
<title>user account</title>
<style>
.field{
width: 30%;
margin: 0 auto;
}
</style>
</head>
<body>
<?php include "headtab.html"?><br/><br/><br/>
<fieldset class="field">
<legend align="center">User Account</legend>
<pre>
<form  action="list.php" method="post" onsubmit="return true" enctype="application/x-www-form-urlencoded">

                <label>UserID: </label>&nbsp;&nbsp;<input name="userid"  required/>

                <label>Password: </label><input type="password" name="pwd" pattern="[0-9]{5}" placeholder="5 digits reqd" required/>


                          <input type="submit" value="Submit">   <input type="reset" value="Reset">

<a href="home.html">SignUp</a>
</pre>
</fieldset>
</body>
</html>
