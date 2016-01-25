
<?php

if(isset($_POST["Insert"]))
{
    $r=$_POST["rno"];
    $n=$_POST["name"];
    $p=$_POST["phy"];
    $c=$_POST["che"];
    $m=$_POST["maths"];
    include("process.php");
    if(insert_student($r,$n,$p,$c,$m))
    {
        header("location:entry.php");
     //echo "Inserted";   
    }else
    {
        //echo "Not Inserted";
        header("location:entry.php");
    }
    
}
    
    ?>

<h3 align="center">Student Entry</h3>
<p align="right"><a href="index.php">Home</a></p>
<form action="" method="post">
<table align="center" border="1">
    <tr>
        <td>Roll</td>
        <td><input type="text" name="rno"></td>
    </tr>
    <tr>
        <td>name</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Phy</td>
        <td><input type="text" name="phy"></td>
    </tr>
    <tr>
        <td>Che</td>
        <td><input type="text" name="che"></td>
    </tr>
    <tr>
        <td>Maths</td>
        <td><input type="text" name="maths"></td>
    </tr>
    <tr>
        
        <th colspan="2"><input type="submit" name="Insert" value="Insert"></td>
    </tr>
</table>
</form>