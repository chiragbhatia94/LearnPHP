<?php
$arr=array('M.Sohail'=>73,'Amit'=>41,'Ananya'=>39,'Sumit'=>40);
$i=0;
$temp=0;
echo"Values Are:<br><br>";
foreach($arr as $k=>$v)
{
$brr[$i]=$v;
$i++;
echo$v."<br>";
}
for($i=0;$i<count($brr);$i++)
{
          for($j=0;$j<count($brr);$j++)
          {
          if($brr[$i]<$brr[$j])
          {
                    $temp=$brr[$i];
                    $brr[$i]=$brr[$j];
                    $brr[$j]=$temp;
          }
          }
}
echo"<br>Sorted Value In Ascending Order:<br>";
for($i=0;$i<count($brr);$i++)
{
echo"<br>".$brr[$i];
}
echo"<br><br>Sorted Value In Decending Order:<br>";
for($i=0;$i<count($brr);$i++)
{
          for($j=0;$j<count($brr);$j++)
          {
          if($brr[$i]>$brr[$j])
          {
                    $temp=$brr[$i];
                    $brr[$i]=$brr[$j];
                    $brr[$j]=$temp;
          }
          }
}
for($i=0;$i<count($brr);$i++)
{
echo"<br>".$brr[$i];
}
echo"<br><br>"."Keys Are<br><br>";
	foreach($arr as $k=>$v)
	{
	$crr[$i]=$k;
	$i++;
	echo$k."<br>";
	}
echo"<br>Sorted Keys:<br>";
echo"In Asending Order<br> ";
ksort($arr);
foreach($arr as $k=>$v)
{
echo$k."<br>";
}
echo"In Decending Order<br> ";
krsort($arr);
foreach($arr as $k=>$v)
{
echo$k."<br>";
}
	

	
?>

