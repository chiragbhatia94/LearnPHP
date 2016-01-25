<?php include("check_session.php");?>

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
					<h3>All Student </h3>
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
        <td><a href="delete.php?rno=<?php echo $v[0];?>">Delete</a>|<a href="studentedit.php?rno=<?php echo $v[0];?>">Edit</a></td>
    </tr>
<?php
}
   }?>
</table>

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

