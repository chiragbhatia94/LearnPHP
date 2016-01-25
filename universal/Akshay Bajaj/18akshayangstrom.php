<?php
$n=371;
$a=371;
$b=0;
$angno=0;
echo "The number you want to know is angstrom or not is: ".$n;
for($i=0;$i<=2;$i++)
{
 $b=$n%10; //3
 $n=(int)($n/10);  //12
 $angno=$angno+($b*$b*$b);
}
echo "<br>angno ".$angno;
if($angno==$a)
{
 echo"<br>This is a angstorm number";
}
else
{
 echo"<br>This is not angstorm number";
}
?>

