<pre>
<?php
$arr=array("akshay"=>31,"amit"=>42,"Ananya"=>39,"sumit"=>40);
$old=0;
$temp=0;
$j=0;
funtion input($arr)
{
 foreach($arr as $new)
 { 
   $old=$new;
   $a[$j]=$new;
   $j++;
 }
 return $a;                //can we return arrau from a funtion
}
function display()
{
 input($arr); 
 echo "<br>the array input is:<br>";
 for($k=0;$k<=4;$k++)
 {
   echo $a[$k]."<br>";
 }
}
?>
