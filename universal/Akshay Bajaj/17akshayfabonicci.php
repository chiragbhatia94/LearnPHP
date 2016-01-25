<?php				//LOGIC TO BE REVISED
$n=20;
$first=0;
$second=1;                                                        
echo"The number till which we will print the fabonicci series is: ".$n."<br>";
for($i=0;$i<$n;$i++)
{
 if($i<=1)
 {
  $next=$i;
 }
 else
 {
 $next=$first+$second;
 $first=$second;
 $second=$next;
 }
 echo $next."<br>";
}
?>

