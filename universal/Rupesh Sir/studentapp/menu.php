<ul id="menu" class="cleaning-box">
			<li class="first"><a href="index.php" class="active">HOME</a></li>
<?php
session_start();
if(isset($_SESSION["loggedin"])){
if($_SESSION["role"]=="student"){
?>
			<li><a href="studentsearch.php">Student Search</a></li>
<?php
}
if($_SESSION["role"]=="admin"){
?>

			<li><a href="studententry.php">Student Entry</a></li>

			<li><a href="allstudent.php">All Student</a></li>
<?php
}?>
			<li><a href="logout.php">Logout</a></li>
<?php
}
?>
		</ul>
