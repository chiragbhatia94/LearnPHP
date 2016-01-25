<?php

$arr[0][]=56;
$arr[0][]=3;
$arr[0][]=76;
$arr[1][]=12;
$arr[1][]=34;
$arr[1][]=91;
$arr[1][]=2;
$arr[1][]=4;
$arr[2][]=14;


for($i=0;$i<count($arr);$i++)
{
for($j=0;$j<count($arr[$i]);$j++)
{
echo $arr[$i][$j]."&nbsp;&nbsp;"; 
}
echo "<br>";

}

?>
