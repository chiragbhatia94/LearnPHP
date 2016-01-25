<?php

$a=10;
$b=20;

echo $a."&nbsp;&nbsp;".$b."<br>";
incr($a,$b);
echo $a."&nbsp;&nbsp;".$b."<br>";


function incr($a,$b)
{
	$a+=2;
	$b*=10;
}

?>
