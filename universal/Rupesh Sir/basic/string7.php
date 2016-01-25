<?php

$str="uniVerSal infOrMatics Indore";
echo $str."<br>";

echo str_repeat($str,10)."<br>";
echo str_shuffle($str)."<br>";
echo str_rot13($str)."<br><pre>";
$ar=str_split($str,5);
print_r($ar);








?>
