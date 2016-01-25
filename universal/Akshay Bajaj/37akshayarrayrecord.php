<?php
$arr[0][]=array(1,"bottle",2,20);
$arr[0][]=array(2,"pen",5,20);
$arr[0][]=array(3,"pencil",3,20);
$arr[0][]=array(4,"book",1,20);
$arr[0][]=array(5,"bill",1,20);

foreach($arr as $v)
{
 foreach($v as $v1)
 {
  foreach($v1 as $v2)
  {
   echo $v2."&nbsp&nbsp&nbsp";
  }
  echo "<br>"; 
 }
}
?>
