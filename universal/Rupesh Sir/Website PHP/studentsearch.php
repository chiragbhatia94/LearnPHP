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
					<h3>Student Search</h3>
<form action="" method="post">
<table align="center" border="1">
<tr>
<td>Enter Roll</td>
<td><input type="text" name="rno"></td>
</tr>
<tr>
<th colspan="2"><input type="submit" name="Search" value="Search"></td>
</tr>
</table>
</form>
<br>
<br>
<?php
if(isset($_POST["Search"])){
include("process.php");   
$row=search_student($_POST["rno"]);
if($row!=false){
?>
<table align="center" border="1">
<tr>
<td>Roll</td>
<td><?php echo $row[0]?></td>
<td>Name</td>
<td><?php echo $row[1]?></td>
</tr>
<tr>
<td>Subject</td>
<td>Max</td>
<td>Min</td>
<td>Obtain</td>
</tr>

<tr>
<td>Phy</td>
<td>100</td>
<td>40</td>
<td><?php echo $row[2]?></td>
</tr>

<tr>
<td>Che</td>
<td>100</td>
<td>40</td>
<td><?php echo $row[3]?></td>
</tr>
<tr>
<td>Maths</td>
<td>100</td>
<td>40</td>
<td><?php echo $row[4]?></td>
</tr>
</table>
<?php
}}?>			
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

