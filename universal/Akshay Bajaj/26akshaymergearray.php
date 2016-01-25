<?php
 $a=array(1,2,3,4,5); //How to  know the length of an array
 $b=array(10,11,12,13,14); //want to run the for loop till the length of
 echo "The first array is:"; // the array
 for($i=0;$i<=4;$i++)	
 {
  echo $a[$i]."<br>";
 }
 echo "The second array is:";
 for($i=0;$i<=4;$i++)
 {
  echo $b[$i]."<br>";
 }
 echo "The merged array is:";
 $c=array_merge($a, $b); 
 for($i=0;$i<=9;$i++)
 {
  echo $c[$i]."<br>";
 }
 ?>



