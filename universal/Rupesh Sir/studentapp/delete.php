<?php include("check_session.php");
if($_SESSION["role"]!="admin")
header("location:index.php");
?>
<?php
if(isset($_GET["rno"]))
{
    include("process.php");
    delete_student($_GET["rno"]);
    header("location:allstudent.php");
}
?>
