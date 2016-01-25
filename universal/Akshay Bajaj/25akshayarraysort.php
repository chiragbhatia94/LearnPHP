<?php
$a=array(5,4,9,11,24,466,77,65,9,87);
for($i=0;$i<=9;$i++)		//bubble sort
{
 for($j=$i+1;$j<=9;$j++)
 {
  if($a[$i]<$a[$j])
  {
    $b=$a[$i];
    $a[$i]=$a[$j];
    $a[$j]=$b;
  }
 }
}
for($i=0;$i<=9;$i++)
{
 echo "<br>".$a[$i];
}
?>
