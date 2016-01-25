<?php

$x=fact();//Calling
echo "fact=".$x."<br>";


function fact()//Defination
{
$n=6;
$f=1;
for($i=1;$i<=$n;$i++)
{
$f=$f*$i;
}
return $f;

}
echo fact();
?>
