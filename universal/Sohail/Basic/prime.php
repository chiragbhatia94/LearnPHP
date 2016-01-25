<?php
$n=18;
$i=2;
for($i=2;$i<=$n-1;$i++)
{
if($n%$i==0)
	{
	echo"No. Is Not Prime";
	break;
	}
}
if($n==$i)
echo"No. Is Prime";
?>
