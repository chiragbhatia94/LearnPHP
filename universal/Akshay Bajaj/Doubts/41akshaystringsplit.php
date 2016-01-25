<?php
$a='082307';
$b="08";
$c="23";
$d="07";		//can i do this by any other logic
echo "Your string is: &nbsp".$a;
echo "<br>The string in the format you want is: &nbsp<br>";
echo "$b:$c:$d";

echo "<br><br>Your string by pre defined function is:<br><br>";		//here we have to split it after
$ar=str_split($a,2);	//every 2 pos. so it worked
echo implode(":",$ar); //but if we wanted to split it 
?>					//at diff. positions so what should 
					//we do. bcoz here we cannot use
				//explode and if we split it by any 
				//letter, so this wont be generlized for 
				//every program or value of the string
