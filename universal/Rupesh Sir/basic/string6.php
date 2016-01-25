<?php

$str="uniVerSal infOrMatics Indore";
echo $str."<br>";

echo str_replace("indore", "Mumbai", $str)."<br>";
echo str_ireplace("INDORE", "Mumbai", $str)."<br>";
echo strpos($str,"Indore")."<br>";
echo stripos($str,"indore")."<br>";
echo strstr($str, "Sal")."<br>";
echo stristr($str, "Sal");








?>
