<?php
$con=mysqli_connect("localhost","root","root");

if($con==false)
    die("Connection  Failed....");


mysqli_select_db($con, "phpdb") or die("Db Not Found");

$q="update student  set  name='ravi' ,phy=33,che=44,maths=55 where rno=124";

mysqli_query($con, $q);
$n=mysqli_affected_rows($con);
if($n>0)
{
    echo "DataBase Change";
}else
{
    echo "DataBase Not Change";
}
?>