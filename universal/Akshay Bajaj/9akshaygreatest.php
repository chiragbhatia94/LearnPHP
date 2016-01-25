<?php
 $a=120;
 $b=10.10;
 $c=100;
 $count=0;
 echo"The first no. is:".$a;
 echo"<br>The second no. is:".$b;
 echo"<br>The third no. is:".$c;
 if($a>$b)
 {  
 if($a>$c)
  {
  $count=1;
  }
  if($c>$a)
  {
   $count=3;
  }
 } 
 if($c>$a)
 {
  if($c>$b)
  {
   $count=3;
  }
  if($c<$b)
  {
   $count=2;
  }
 }
 switch($count)
 { 
 	case 1: 
	echo "<br><br>1st number is greatest";
	break;

	case 2:
	echo "<br><br>2nd number is greatest";
	break;

	case 3:
	echo "<br><br>3rd number is greatest";
	break; 
}
?>
