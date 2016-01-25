<?php
$arr[0][]=1;
$arr[0][]=2;
$arr[0][]=3;
$arr[1][]=4;
$arr[1][]=5;
$arr[1][]=6;
$arr[2][]=7;
$arr[2][]=8;
$arr[2][]=9;


foreach($arr as $v)
{
foreach($v as $v1)
{
echo $v."&nbsp;&nbsp;";

}
echo "<br>";

}

?>
