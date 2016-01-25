<?php

middle();
function middle()
	{
	$a=1;
$b=2;
$c=3;
	
if($a>$b && $a>$c)
   {
 if($b>$c)
echo"B Is Middle No.";
else
echo"C Is Middle No.";
   }
else if($b>$a && $b>$c)
   {
if($a>$c)
print"A Is Middle No.";
else
echo"C Is Middle No.";
   }
 else if($c>$a && $c>$b)
   {
if($a>$b)
echo "A Is Middle No.";
else 
echo"B Is Middle No.";
   }
	}
?>

