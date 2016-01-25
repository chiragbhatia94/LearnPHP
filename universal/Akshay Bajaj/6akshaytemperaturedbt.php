<?php
$f=100;
echo "The temperature in farhenheit is:".$f;
$c=5*($f-32)/9;	//according to sir, the answer should come in integer type only, 
			//as the f is in integer type and if want to get the exact float
			//value so we need to use typecasting, but I got the exact float
			//value, without using typecasting.Why? 
echo "<br>The temperature after conversion in celcius is:".$c;
?>
