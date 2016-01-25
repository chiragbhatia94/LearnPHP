<?php		//can we use any othe logic
$uname="rayyabjasdk@example.com";
echo "The given user id is: $uname<br>";
$arr=explode("@",$uname);
echo "<br>The user name in the given user id is: $arr[0]";
//i thought we can also use strrchr, so it will take @from the last, and that will search for the '@' from the end, and it will be more productive, but then how can we print the string before '@' , coz it can lead us to print the value after '@'
