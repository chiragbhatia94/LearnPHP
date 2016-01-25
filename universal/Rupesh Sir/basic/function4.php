<?php
$n=5;
$res=fact($n);//Calling Actual Argu

echo $res;

function fact($n)//Defination Formal Argument
{

$f=1;
for($i=1;$i<=$n;$i++)
{
$f=$f*$i;
}
return $f;

}

?>
