<?php
$arr[0][]=2;
$arr[0][]=3;
$arr[0][]=1;
$arr[1][]=4;
$arr[1][]=3;
$arr[1][]=5;
$arr[2][]=6;
$arr[2][]=5;
$arr[2][]=9;
$arr1[0][]=2;
$arr1[0][]=3;
$arr1[0][]=1;
$arr1[1][]=4;
$arr1[1][]=3;
$arr1[1][]=5;
$arr1[2][]=6;
$arr1[2][]=5;
$arr1[2][]=9;

for($i=0;$i<=2;$i++)
{
 for($j=0;$j<=2;$j++)
 {
   $arr2[$i][$j]=$arr[$i][$j]*$arr1[$i][$j];
 }
}
echo "the multiplied matrix is:<br>";
for($i=0;$i<=2;$i++)
{
 for($j=0;$j<=2;$j++)
 {
  echo $arr2[$i][$j];
  echo "<br>";
 }
}
?>


