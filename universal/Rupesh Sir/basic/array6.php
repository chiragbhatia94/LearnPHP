<?php

$arr["A"]=56;
$arr[]=3;
$arr[100]=76;
$arr[]=12;
$arr[1000]=34;
$arr[]=91;
$arr[500]=2;
$arr[]=4;

foreach($arr as  $k=>$v)
{
echo $k."=>".$v."<br>";
}



?>
