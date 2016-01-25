<?php
$b=0;
$c=0;
$a=array(1,2,3,4,5,6,7,8,9,10);
$sum=0;
$i=0;
add($a);

function add($c)
{
 global $sum;
 global $i;
 for($i=0;$i<=9;$i++)
 {
  $sum=$sum+$c[$i];
 }
 echo "The sum of first 10 digits is: ".$sum;
}

		//how to send thereturned value of 1 func. to another
function avg()
{
 $avg=0;
 global $i;
 global $sum;
 $avg=$sum/$i;
 echo "<br>The average of first 10 digits is: ".$avg;
}
avg();
?>
	
