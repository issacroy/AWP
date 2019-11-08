<?php
if($_POST["userid"] == "issac"& $_POST["pwd"] == "01234")
{

echo"<font size='5' color='green'><marquee direction='right'>Congratulations</marquee>";
echo"U R Welcome</font>";

}
else
{

echo"<font size='5' color='red'><b>WRONG PASSWORD,PLEASE TRY AGAIN</b></font>";
include("useraccount2.html");
}
?>