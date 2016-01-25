<?php
$n=153;
$b=0;
$arm=0;
$temp=$n;
for($i=$n;$i>=0;$i--)
	{
	$arm=$n%10;
	$b=$b+$arm*$arm*$arm;
	$n=$n/10;
	}
	if($b==$temp)
	print"Its An Armstrong No.";
	else
	echo"Its Not An Armstrong No.";
	?>
