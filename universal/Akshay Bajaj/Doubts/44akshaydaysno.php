<?php	// any other logic?
$a=strtotime("03-04-2015");
$b=strtotime("10-04-2015");
$d1=date(d-m-Y,$a);
$d2=date(d-m-Y,$b);
$c=($b-$a)/86400;
echo "The number of days from $d1 to $d2 is: $c";
?>
