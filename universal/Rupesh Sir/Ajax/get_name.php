<?php
$con=mysqli_connect("localhost","root","root");
if($con==false)
    die("Connection  Failed....");
mysqli_select_db($con, "phpdb") or die("Db Not Found");
$q="select * from student where name='".$_GET["name"]."'";
$result=mysqli_query($con,$q);
if(mysqli_num_rows($result)>0)
{
    echo "Name Exist";
}else
{
    echo "Not Exist";
}

?>