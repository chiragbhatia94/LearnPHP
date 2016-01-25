<?php
$marks=20;
echo "The marks of the student are: ".$marks;
if($marks>=60)
{
 echo "<br>1st division";
 break;
}
if($marks>=45 && $marks<60)
{
 echo "<br>2nd division";
 break;
}
if($marks>=33 && $marks<45)
{
 echo "<br>3rd division";
 break;
}
if($marks<33)
{
 echo "<br>You are Fail";
 break;
}
?>
