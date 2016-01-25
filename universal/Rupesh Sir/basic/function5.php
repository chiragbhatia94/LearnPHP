<?php

$str="Hello";

show();
disp();
function SHOW()
{
global $str;
echo $str;
$str='Test';
}

function disp()
{
echo $GLOBALS['str'];
}


?>
