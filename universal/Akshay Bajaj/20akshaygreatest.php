<?php

 $a=1000;		//GLOBALLY DECLARED BUT THIS is still not working
 $b=372.23;		//the result is coming because, the value of a and b
function greatest()	//are also declared inside the funtion itself
{
 $a=1000;		//GLOBALLY DECLARED
 $b=372.23;
 if($a>$b)
 {
  $f=1;
 }
 else
 {
  $f=2;
 }
 return $f;
}

$var=greatest();

 if($var==1)
 {
  echo $a." is the greatest";
 }
 else
 {
  echo $b." is the greatest";
 }

