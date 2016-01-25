<?php
$con=mysqli_connect("localhost","root","root");
if($con==false)
    die("Connection  Failed....");
mysqli_select_db($con, "phpdb") or die("Db Not Found");
?>