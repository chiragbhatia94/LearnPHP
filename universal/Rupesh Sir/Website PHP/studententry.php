<?php include("check_session.php");?>
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
        header("location:studententry.php");

    }else
    {
        header("location:studententry.php");
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
					<h3>Student Entry</h3>
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

