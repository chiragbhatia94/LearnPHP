<?php

$str="uni,VerSal,infOrMatics,Indore,MP";
echo $str."<br><pre>";

$ar=  explode(",",$str);
print_r($ar);
echo implode(".", $ar);








?>
