<?php
$arr[]=12;
$arr[]=6;
$arr[]=89;
$arr[]=4;
$arr[]=14;
$arr[]=67;
$arr[]=56;
$arr[]=78;
$arr[]=35;
$arr[]=90;
$sum=0;
for($i=0;$i<count($arr);$i++)
{
$sum=$sum+$arr[$i];
}
$n=count($arr);
$avg=0;
$avg=$sum/$n;
echo"Sum Is=".$sum."<br>";
echo"Average Is=".$avg;
?>
