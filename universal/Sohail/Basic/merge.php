<?php
  $arr[]=12;
  $arr[]=67;
  $arr[]=90;
    $brr[]=56;
    $brr[]=89;
    $brr[]=54;
    $i=0;
	echo"First Array Is:<br>";
	for($i=0;$i<count($arr);$i++)
   {
	echo $arr[$i]."<br>";
   }
	echo"Second Array Is:<br>";
	for($i=0;$i<count($brr);$i++)
   {
	echo $brr[$i]."<br>";
   }
  
	echo"After Merging The Above Two Arrays:<br>";
	for($i=0;$i<count($brr);$i++)
	{
	  $arr[]=$brr[$i];
	  
        }
        for($i=0;$i<count($arr);$i++)
        {
        echo "<br>".$arr[$i];
        }		
        

?>

