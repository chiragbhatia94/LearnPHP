<?php
$a=77;
$b=45;
$c=99;
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
?>


