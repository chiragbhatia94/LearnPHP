<?php
 $a=0;
 $b=10.10;
 $c=100;
 $count=0;
 echo"The first no. is:".$a;
 echo"<br>The second no. is:".$b;
 echo"<br>The third no. is:".$c;
 middle($a,$b,$c);	//func. declaration
			//actual arguements
 
 function middle($x,$y,$z)	//formal arguements
 {
   if($x>$y&&$x>$z)		//calculation on formal arguements
   {
    if($y>$z)
     {
       echo "<br>".$y." is the middle number";
     }
    else
     {
      echo "<br>".$z." is the middle number";
     }
   }
   if($y>$z&&$y>$x)
   {
    if($x>$z)
     {
       echo "<br>".$x." is the middle number";
     }
    else
     {
      echo "<br>".$z." is the middle number";
     }
   }
  if($z>$x&&$z>$y)
   {
    if($x>$y)
     {
       echo "<br><br>".$x." is the middle number";
     }
    else
     {
      echo "<br><br>".$y." is the middle number";
     }
   }
 }
?>
