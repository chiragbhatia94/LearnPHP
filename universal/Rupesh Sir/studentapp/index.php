

<?php

if(isset($_POST["login"]))
{
    include("process.php");
    $r=check_login($_POST["unm"], $_POST["pass"]);
    if($r!=FALSE)
    {
        if(isset($_POST["remember"]))
        {
            setcookie("myusername",  base64_encode($_POST["unm"]),time()+30);
        }else
        {
            setcookie("myusername",  base64_encode($_POST["unm"]),time()-30);
        }
        
        session_start();
        $_SESSION["loggedin"]=true;
        $_SESSION["role"]=$r["role"];
        header("location:home.php");
    }else
    {
        header("location:index.php");
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
                                  
<?php
if(!isset($_SESSION["loggedin"])){
?>
  <form action="" method="post">
                                        <h3 align="center">Login</h3>
                                    <table align="center" border="1">
                                        <tr>
                                            <td>User Name</td>
                                            <td><input type="text" value="<?php echo  isset($_COOKIE["myusername"])?base64_decode($_COOKIE["myusername"]):'';?>" name="unm" autocomplete="off" ></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" name="pass" autocomplete="off"></td>
                                            
                                        </tr>
                                        <tr>
                                            <th colspan="2"><input type="checkbox" name="remember" id="remember"><label for="remember">remember User Name</label></th>
                                            
                                        </tr>
                                        <tr>
                                            <th colspan="2"><input type="submit" name="login" value="Login"></th>
                                            
                                        </tr>
                                    </table>
                                    </form>
<?php
}?>

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

