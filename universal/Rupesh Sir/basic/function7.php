<?php

$a=10;
$b=20;

echo $a."&nbsp;&nbsp;".$b."<br>";
incr($a,$b);
echo $a."&nbsp;&nbsp;".$b."<br>";


function incr($c,$d)
{
	$c+=2;
	$d*=10;
}

?>
