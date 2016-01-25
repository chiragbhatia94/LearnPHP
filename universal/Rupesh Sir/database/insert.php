<?php
$con=mysqli_connect("localhost","root","root");

if($con==false)
    die("Connection  Failed....");


mysqli_select_db($con, "phpdb") or die("Db Not Found");

$q="insert into student(rno,name,phy,che,maths) values(125,'ram',77,88,99)";

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