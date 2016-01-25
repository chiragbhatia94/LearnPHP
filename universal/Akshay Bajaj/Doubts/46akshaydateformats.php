<?php //not understanding,when i am writing september
$a="09/01/2014"; //in alphabetical manner
$b=strtotime($a);
echo date("Y/m/d",$b);
echo "<br>".date("y.m.d",$b);
echo "<br>".date("d-m-y",$b);
?>                                               
