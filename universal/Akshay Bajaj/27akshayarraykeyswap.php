<?php
 $arr["ram"]="31";
 $arr["ananya"]="41";
 $arr["amit"]="39";
 $arr["sumit"]="40";
 
 foreach($arr as $key=>$val)
 {
  echo "key is = ".$key."<br>";
  echo "value is = ".$val."<br>";
 }
 echo "After swapping :-<br>";
 foreach($arr as $key=>$val)
 {
  $a=$key;
  $key=$val;
  $val=$a;
  echo "<key is = ".$key."<br>";
  echo "<value is = ".$val."<br>";
 }
?>
