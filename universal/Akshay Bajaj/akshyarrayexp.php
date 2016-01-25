<?php
$arr[][][]=65;
$arr[][][]=80;
$arr[][][]=76;
$arr[][][]=47;
$arr[][][]=3;
$arr[][][]=45;
$arr[][][]=6;
$arr[][][]=56;
$arr[][][]=9;
for($i=0;$i<=2;$i++)
{
 for($j=0;$j<=2;$j++)
 {
  for($k=0;$k<=2;$k++)
  {
   echo "i=".$i."$nbsp j=".$j."$nbsp k=".$k." ";
   echo $arr[$i][$j][$k];
   echo "<br>";
  }
 }
}
?>


