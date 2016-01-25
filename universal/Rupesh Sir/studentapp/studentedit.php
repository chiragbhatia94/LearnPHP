<?php include("check_session.php");
if($_SESSION["role"]!="admin")
header("location:index.php");
?>
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
        header("location:allstudent.php");
     //echo "Inserted";   
    }else
    {
        //echo "Not Inserted";
        header("location:allstudent.php");
    }
    
}
    
    ?>

<?php
include("header.php");
?>
		<!-- Menu -->
		
<?php
include("menu.php");
?>
		<!-- Menu end -->

<hr class="noscreen" />

	<div id="content-box">
		<div id="content-box-in">

			<a name="skip-menu"></a>
			<!-- Content left -->
			<div class="content-box-left">
				<div class="content-box-left-in">
					<h3>Student Update</h3>
<form action="" method="post">
<?php

if(isset($_GET["rno"])){
include("process.php");   
$row=search_student($_GET["rno"]);
if($row!=false){
?>
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
<?php
}}?>
</form>
				</div>
			</div>
			<!-- Content left end -->

<hr class="noscreen" />

			<!-- Content right -->
<?php

include("sidebar.php");?>
<hr class="noscreen" />

	<!-- Footer -->
	<div id="footer">
		<p class="left">&copy; <a class="b" href="#">MY WEBSITE</a>, 2008.</p>
		<p class="right"><a href="http://www.mantisatemplates.com/">Free web templates</a>, <a href="http://csstemplatesfree.net/">Free web templates</a>, tip 
		<a class="b" href="http://www.junglegym.cz/uvodni-stranka.aspx" title="Dětská hřiště, skluzavky a houpačky Jungle Gym">Dětská Hřiště</a></p>
	</div>
	<!-- Footer end -->
</div>
</body>
</html>

