<?php
$bs=6000;
$hra=0;
$ca=0;
$pf=(7.8/100)*$bs;
$ts=0;
$ns=0;
if($bs>35000)
{
$hra=(50/100)*$bs;
$ca=(20/100)*$bs;
$ts=$bs+$hra+$ca;
$ns=$ts-$pf;
echo"Your Total Salary Is=".$ts."<br>"."And Net Salary Is=".$ns;
}
if($bs<35000 && $bs>20000)
{
$hra=(30/100)*$bs;
$ca=(12.5/100)*$bs;
$ts=$bs+$hra+$ca;
$ns=$ts-$pf;
echo"Your Total Salary Is=".$ts."<br>"."And Net Salary Is=".$ns;
}
if($bs<20000 && $bs>12500)
{
$hra=(17/100)*$bs;
$ca=(8.5/100)*$bs;
$ts=$bs+$hra+$ca;
$ns=$ts-$pf;
echo"Your Total Salary Is=".$ts."<br>"."And Net Salary Is=".$ns;
}
if($bs<12500 && $bs>5000)
{
$hra=(7.50/100)*$bs;
$ts=$bs+$hra;
$ns=$ts-$pf;
echo"Your Total Salary Is=".$ts."<br>"."And Net Salary Is=".$ns;
}
?>


