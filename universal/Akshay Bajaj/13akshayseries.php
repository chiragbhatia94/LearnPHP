<?php
$count=0;
$avg=0;
$i=0;
$sum=0;
echo "The series from 1 to 10 is as follows: <br>";
for($i=0;$i<=9;$i++)
{
 echo $i."<br>";
}
for($i=0;$i<=9;$i++)
{
 $sum=$sum+$i;
 $count++;
}
echo "<br>The sum of series from 1 to 10 is: ".$sum;
$avg=$sum/$count;
echo "<br>The average of series from 1 to 10 is: ".$avg;

 
