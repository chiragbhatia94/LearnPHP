<pre>
<?php

$arr=array(5,43,7,23,9,48,1);
print_r($arr);
$arr1=array_flip($arr);

print_r($arr1);


$a=array_search(22, $arr);
if(is_bool($a))
{
    echo "Num Is Not Found";
}
 else {
echo "Num Is Found at pos=".($a+1);    
}


?>
