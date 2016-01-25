<?php
if(isset($_GET["rno"]))
{
    include("process.php");
    delete_student($_GET["rno"]);
    header("location:all.php");
}
?>