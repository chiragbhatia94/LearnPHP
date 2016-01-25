  <option>Select City</option>
                        <?php
$con=mysqli_connect("localhost","root","root");
if($con==false)
    die("Connection  Failed....");
mysqli_select_db($con, "phpdb") or die("Db Not Found");
$sid=$_POST["state"];
$q="select * from wp_city where sid=$sid order by cname";
$result=mysqli_query($con,$q);
if(mysqli_num_rows($result)>0)
{
  while($row=  mysqli_fetch_array($result))
  {
      ?>
                        <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
      <?php
  }
}
?>