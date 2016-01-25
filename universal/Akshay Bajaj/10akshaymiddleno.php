<?php
 $a=0;
 $b=10.10;
 $c=100;
 $count=0;
 echo"The first no. is:".$a;
 echo"<br>The second no. is:".$b;
 echo"<br>The third no. is:".$c;
 if($a>$b&&$a>$c)
 {
  if($b>$c)
   {
     echo "<br>".$b." is the middle number";
   }
  else
   {
    echo "<br>".$c." is the middle number";
   }
 }
if($b>$c&&$b>$a)
 {
  if($a>$c)
   {
     echo "<br>".$a." is the middle number";
   }
  else
   {
    echo "<br>".$c." is the middle number";
   }
 }
if($c>$a&&$c>$b)
 {
  if($a>$b)
   {
     echo "<br><br>".$a." is the middle number";
   }
  else
   {
    echo "<br><br>".$b." is the middle number";
   }
 }

?>
