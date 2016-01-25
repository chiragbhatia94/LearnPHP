<?php
$i=0;
$n=5;
$fact=1;
echo "The factorial of".$n." is as follows: <br>";
for($i=$n;$i>=1;$i--)
 {
  $fact=$fact*$i;
 }
echo $fact;
?>
