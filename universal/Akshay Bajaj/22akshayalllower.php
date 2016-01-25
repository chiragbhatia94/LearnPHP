<?php
$a="akshay";

lower($a);

function lower($b)
{
 echo "The string you have given is: ".$b;
 if(ctype_lower($b))
 {
 echo "<br><br>lower";
 }
 else
 {
 echo "<br><br>mix ox upper";
 }
}
?>
