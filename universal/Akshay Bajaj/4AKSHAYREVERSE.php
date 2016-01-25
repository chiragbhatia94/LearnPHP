<?php
 $a=123;
 echo "The 3 digit no. that must be reversed is:<br>".$a;
 $n=3;			//the digit of number to be reversed
 echo "<br>The reverse of the number you gave is : "; 
 for($i=0;$i<$n;$i++)
 {
  $mod=$a%10;
  $a=$a/10;
  echo $mod;
 }
?>
