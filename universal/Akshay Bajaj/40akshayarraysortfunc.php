<?php
$arr=array("akshay"=>31,"amit"=>42,"Ananya"=>39,"sumit"=>40);

echo "<br><br>The array is: <br>";
foreach($arr as $k=>$a)
{
 echo "value is=".$a."&nbsp&nbspkey is=".$k."<br>";
}
echo "<br>Now sorting array with the help of pre-defined funtions:<br>";

sort($arr); 	//key has become from string value to integer, 
			//maybe it uses the same logic as i do in my sorting logic
echo "<br><br>The sorted array is(increasing order by value):<br>";
foreach($arr as $k=>$a)
{
 echo "value is=".$a."&nbsp&nbspkey is=".$k."<br>";
}

rsort($arr);
echo "<br><br>The sorted array is(decreasing order by value):<br>";
foreach($arr as $k=>$a)
{
 echo "value is=".$a."&nbsp&nbspkey is=".$k."<br>";
}

ksort($arr);
echo "<br><br>The sorted array is(increasing order by key):<br>";
foreach($arr as $k=>$a)
{
 echo "value is=".$a."&nbsp&nbspkey is=".$k."<br>";
}

krsort($arr);
echo "<br><br>The sorted array is(decreasing order by key):<br>";
foreach($arr as $k=>$a)
{
 echo "value is=".$a."&nbsp&nbspkey is=".$k."<br>";
}

asort($arr);
echo "<br><br>The sorted array is(increasing order by value without changing the key of elements of array):<br>";
foreach($arr as $k=>$a)
{
 echo "value is=".$a."&nbsp&nbspkey is=".$k."<br>";
}

arsort($arr);
echo "<br><br>The sorted array is(decreasing order by value without changing the key of elements of array):<br>";
foreach($arr as $k=>$a)
{
 echo "value is=".$a."&nbsp&nbspkey is=".$k."<br>";
}
?>





