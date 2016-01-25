<?php

if(isset($_POST["Update"]))
{
    $r=$_POST["rno"];
    $n=$_POST["name"];
    $p=$_POST["phy"];
    $c=$_POST["che"];
    $m=$_POST["maths"];
    include("process.php");
    if(update_student($r, $n, $p, $c, $m))
    {
        header("location:all.php");
     //echo "Inserted";   
    }else
    {
        //echo "Not Inserted";
        header("location:all.php");
    }
    
}
if(isset($_GET["rno"])){
include("process.php");   
$row=search_student($_GET["rno"]);
if($row!=false){


?>
<h3 align="center">Student Update</h3>
<p align="right"><a href="index.php">Home</a></p>
<form action="" method="post">
<table align="center" border="1">
    <tr>
        <td>Roll</td>
        <td><input type="text" name="rno" value="<?php echo $row[0]?>"></td>
    </tr>
    <tr>
        <td>name</td>
        <td><input type="text" name="name" value="<?php echo $row[1]?>"></td>
    </tr>
    <tr>
        <td>Phy</td>
        <td><input type="text" name="phy" value="<?php echo $row[2]?>"></td>
    </tr>
    <tr>
        <td>Che</td>
        <td><input type="text" name="che" value="<?php echo $row[3]?>"></td>
    </tr>
    <tr>
        <td>Maths</td>
        <td><input type="text" name="maths" value="<?php echo $row[4]?>"></td>
    </tr>
    <tr>
        
        <th colspan="2"><input type="submit" name="Update" value="Update"></td>
    </tr>
</table>
</form>
<?php
}
}?>