<?php
$i;
$n=7;
$a=0;
$b=0;
$fib=0;
echo"Fibonacci Series Is : ";
for($i=0;$i<=$n;$i++)
	{
	 $fib=$a+$b;
	 $a=$b;
	 $b=$fib;
	 echo $fib.",";
	}
	?>

