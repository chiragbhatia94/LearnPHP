<?php
$a='akshay';

$var=palindrome($a);

function palindrome($b)   //how can i traverse through string withour array
{			  //or pointers 
 $c=strrev($b);
 if($b==$c)
 {
  $f=1;
  echo "$f=1";
 }
 else
 {
  $f=2;
 }
 return $f;
}
if($var==1)
{
 echo "<br>String is a palindrome";
}
else
{
 echo "<br>string is not a palindrome";
}
?>
