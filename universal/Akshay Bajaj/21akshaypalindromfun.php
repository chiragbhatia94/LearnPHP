<?php
$a=103;
$var=palindrome($a);
function palindrome($b)   //how can i traverse through string withour array
{
$e=$b;
			  //or pointers 
 for($i=0;$i<=2;$i++)
 {
  $c[$i]=$b%10;
  echo "c=".$c[$i]."<br>";
  $b=(int)($b/10);
 }
 for($i=2;$i>=0;$i--)
 {
  $d[$i]=$e%10;
  echo "d=".$d[$i]."<br>";
  $e=(int)($e/10);
 }

 for($i=0;$i<=2;$i++)
 {
   //echo $c[$i]."<br>";
   //echo $d[$i]."<br>";
  if($c[$i]==$d[$i])
  {
   $f=2;
  }
  else
  {
   $f=3;
   break;
  }
 }
return $f;
}
if($var==2)
{
echo "<br>String is a palindrome";
}
else
{
echo "<br>string is not a palindrome";
}

?>
