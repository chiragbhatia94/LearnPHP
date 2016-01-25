<?php
$p=5000;
$r=1000;
$n=3;		
$denom=1;		//do v need to specify initial value for denom so that it doesnt 				//multiplies with any garbage value or random value	
for($i=0;$i<$n;$i++)
{
 $denom=$denom*100;  //denominator to be calculated according to (100) power n		
}
$d=($p*$r)/$denom;  				//how to get value from the user?
echo"The Simple Interest is as follows: ".$d;
?>
 
