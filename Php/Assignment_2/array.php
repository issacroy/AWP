<?php
//multi dimensional array
$a=array("Raj"=>array(50,60,70),"Reena"=>array(20,40,60));

//printing the entire array
print_r($a);
echo"<br><br>";

//printing the name of first array
echo"$a<br><br>";

//printing first array
foreach($a as $i=>$v)
echo"$i=>$v<br>";

//printing the second array
foreach($a as $i=>$v)
{
echo"<br>";
 foreach($v as $j=>$l)
 echo"$j=>$l<br>";
 }
 
//printing the first array and second array
foreach($a as $i=>$v)
{
 echo "<br>$i=>$v<br>";
 foreach($v as $j=>$l)
 echo"$j=>$l<br>";
 }
?>