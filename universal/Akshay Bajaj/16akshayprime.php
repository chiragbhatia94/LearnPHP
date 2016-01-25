<?php
$i=0;
$n=2;
$count=0;
echo "The no. you entered is: ".$n;
for($i=2;$i<=$n/2;$i++)
 {
  if($n%$i==0)
  {
   $count++;
  }
 }
if($count==0)
{
 echo "<br>Number is prime";
}
else
{
 echo "<br>Number is composite";
}
?>
