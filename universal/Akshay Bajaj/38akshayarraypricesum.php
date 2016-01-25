 <?php
$arr[0][]=array(1,"bottle",2,20);
$arr[0][]=array(2,"pen",5,20);
$arr[0][]=array(3,"pencil",3,20);
$arr[0][]=array(4,"book",1,20);
$arr[0][]=array(5,"bill",1,20);
$sum=0;
foreach($arr as $v)
{
 foreach($v as $v1)
 {                  
   $a=$v1[2]*$v1[3];                  
   $sum=$a+$sum; 
 } 
}
echo "The total price is:".$sum;
?>
