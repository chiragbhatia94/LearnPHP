<?php
$r=25;
$l=20;
$b=30.73;
echo "The radius of circle is: ".$r;
$ar=3.14*$r*$r;		//if i write this line after
				//[echo "<br>The area of circle is: ".$ar;]
				//so it generates error, does it use top to
				//bottom approach or vice the versa 
echo "<br>The area of circle is: ".$ar;
echo "<br><br><br>The length of rectangle is: ".$l;
echo "<br>The breadth of rectangle is: ".$b;
$ar=$l*$b;	
echo "<br>The area of rectangle is: ".$ar;
?>
