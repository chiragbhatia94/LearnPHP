<pre>
<?php
$arr['Ram']=31;
$arr['Ananya']=41;
$arr['Amit']=39;
$arr['Sumit']=40;
$temp=0;
echo"<pre>";
foreach($arr as $key=>$val)
{
	echo"  Key Is:=".$key."<br>";
	echo"Value Is:=".$val."<br>";
}
echo"<br>"."After Swapping: <br>";
foreach($arr as $key=>$val)	
	{
	$temp=$val;
	$val=$key;
	$key=$temp;
	echo"  Key Is=".$key."<br>";
	echo"Value Is=".$val."<br>"; 
	}


?>
