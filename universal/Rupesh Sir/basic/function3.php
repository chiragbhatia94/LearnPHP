<?php
$n=7;
fact($n);//Calling Actual Argu


function fact($n)//Defination Formal Argument
{

$f=1;
for($i=1;$i<=$n;$i++)
{
$f=$f*$i;
}
echo "Res=".$f;

}

?>
