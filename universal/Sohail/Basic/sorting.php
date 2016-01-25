<?php
 $arr[]=5;
 $arr[]=12;
 $arr[]=8;
 $arr[]=96;
 $arr[]=54;
 $arr[]=78;
 $n=6;
 $temp=0;
 echo"Elements Before Sorting Are:<br>";
 for($i=0;$i<$n;$i++)
 {
  echo $arr[$i]."<br>";
 }
for($i=0;$i<$n;++$i)
{
 	
	for($j=$i+1;$j<$n;++$j)
	{
		if($arr[$i]<$arr[$j])
		{
				$temp=$arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$temp;
		}
	}	
}

echo"Elements After Sorting In Decreasing Order Are:"."<br>";
for($i=0;$i<=$n;$i++)
{
echo $arr[$i]."<br>";
}

?>



