<?php
//dd-mm-yyyy
//mm/dd/yyyy
//yyyy-mm-dd
echo strtotime("03-04-2015")."<br>";
echo strtotime("04/03/2015")."<br>";
echo strtotime("2015-04-03")."<br>";
echo strtotime("02-01-1970 5:30:00")."<br>";
echo date("D",strtotime("2015-04-03"))."<br>";
echo date("d-m-Y H:i:s",strtotime("2015-04-03"))."<br>";
echo date("d-M-y h:i:s a",strtotime("2015-04-03"))."<br>";
echo date("l",strtotime("2015-04-03"))."<br>";
echo date("d-M-y h:i:s a",time())."<br>";
echo date("d-M-y h:i:s a",time()-86400*5)."<br>";








?>
