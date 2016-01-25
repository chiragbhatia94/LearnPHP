<h3 align="center">Student Entry</h3>
<p align="right"><a href="index.php">Home</a></p>
<table align="center" border="1">
    <tr>
        <td>Roll</td>
        <td>name</td>
        <td>Phy</td>
        <td>Che</td>
        <td>Maths</td>
        <td>&nbsp;</td>
    </tr>
   <?PHP
   include("process.php");
   $result=all_student();
   if($result!=false){
   foreach($result as $v){
   ?>
    <tr>
        <td><?php echo $v[0];?></td>
        <td><?php echo $v["name"];?></td>
        <td><?php echo $v["phy"];?></td>
        <td><?php echo $v[3];?></td>
        <td><?php echo $v["maths"];?></td>
        <td><a href="delete.php?rno=<?php echo $v[0];?>">Delete</a>|<a href="edit.php?rno=<?php echo $v[0];?>">Edit</a></td>
    </tr>
<?php
}
   }?>
</table>