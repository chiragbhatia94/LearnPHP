<?php  //any other logic to search a string
$a=<<<t
The quick brown fox jumps over the lazy frog
t;
echo "Your string is:<br>$a<br><br>";
$b="jumps";
echo "Your string which we want to search is:<br>$b<br><br>";
$ar=explode(" ",$a);
foreach($ar as $val)
{
 if($val==$b)
 {
  $f=3; 
  break;
 }
 else
 {
    $f=4;
 }
}
if($f==3)
{
  echo "The string you are searching for is present";
}
if($f==4)
{
  echo "The string you are searching fro is not present";
}
?>

