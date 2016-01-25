<?php
$i=0;
$n=30;
echo "The series from 1 to".$n." is as follows: <br>";
for($i=0;$i<=$n;$i++)
{
 echo $i."<br>";
}
echo "<br>Even numbers are: <br>";
for($i=0;$i<=$n;$i++)
{
 if($i%2==0)
 {
  echo $i."<br>";
 }
}
echo "<br>Odd numbers are: <br>";
for($i=0;$i<=$n;$i++)
{
 if($i%2!=0)
 {
  echo $i."<br>";
 }
}
?>

