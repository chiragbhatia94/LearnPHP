<pre><?php
$con=mysqli_connect("localhost","root","root");

if($con==false)
    die("Connection  Failed....");


mysqli_select_db($con, "phpdb") or die("Db Not Found");

$q="select * from student";

$result=mysqli_query($con, $q);

$n=mysqli_num_rows($result);
if($n>0)
{

    while($row=mysqli_fetch_array($result)){
     echo $row[0]."&nbsp;&nbsp;".$row['name']."&nbsp;&nbsp;".$row[2]."&nbsp;&nbsp;".$row[3]."&nbsp;&nbsp;"."<br>";
    }
    
}else
{
    echo "Records not Found";
}
?>