<?php
$arr[0][]=10;
$arr[0][]=20;
$arr[0][]=30;
$arr[1][]=40;
$arr[1][]=50;
$arr[1][]=60;
$arr[2][]=70;
$arr[2][]=80;
$arr[2][]=90;
$brr[0][]=11;
$brr[0][]=22;
$brr[0][]=33;
$brr[1][]=44;
$brr[1][]=55;
$brr[1][]=66;
$brr[2][]=77;
$brr[2][]=88;
$brr[2][]=99;
echo"First Matrix Is:<br>";
          for($i=0;$i<count($arr);$i++)
          {
          for($j=0;$j<count($arr);$j++)
          {
          echo$arr[$i][$j]." ";
          }
          echo"<br>";
          }
echo"Second Matrix Is:<br>";
          for($i=0;$i<count($brr);$i++)
          {
          for($j=0;$j<count($brr);$j++)
          {
          echo$brr[$i][$j]." ";
          }
          echo"<br>";
          }
          
          
for($i=0;$i<count($arr);$i++)
{
for($j=0;$j<count($brr);$j++)
{
$crr[$i][$j]=$arr[$i][$j]*$brr[$i][$j];
}
}
                    
echo"<br>After Multiplication:<br>";
          for($i=0;$i<count($brr);$i++)
          {
          for($j=0;$j<count($brr);$j++)
          {
          echo$crr[$i][$j]." ";
          }
          echo"<br>";
          }
         
?>
