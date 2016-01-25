<?php	// any other logic?
$a=strtotime ("1981-11-04");
$b=strtotime("2014-09-04");
$d1=date("d-m-Y",$a);
$d2=date("d-m-Y",$b);
$year=(int)(($b-$a)/(86400*365));
$y2=($b-$a)-($year*86400*365);
$month=(int)($y2/(86400*30));
$m2=(($b-$a)/(86400*30))-($month*86400*30);
$day=(int)($m2/86400);	//problem in no. of days
echo "The number of days from $d1 to $d2 is: $year years $month months $day days<br>";
?>
