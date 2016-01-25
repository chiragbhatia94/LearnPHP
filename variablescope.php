<?php
$x=5;
$y=10;

function mytest(){
    global $x,$y;
    $y=$x+10;
    $x=2;
}

/**
 *other way to make global variable
 * function mytest(){
 *  $GLOBALS['y']=$GLOBALS['x']+10;
 *  }
 */
echo "Before Test: ".$x." ".$y;
mytest();
echo "<br/>After Test: ".$x." ".$y;
?>