<pre><?php

if(isset($_POST["Upload"]))
{
  $file=$_FILES["myfile"];  
  $allowext=array("jpg","png","jpeg");  
  $dir="upload";
  if(!is_dir($dir)){
  mkdir($dir);
  }
  $ext=end(explode(".",$file["name"]));  
  if(in_array($ext, $allowext)){  
  $name=time().".".$ext;  
  $path=$dir."/".$name;
  $con=mysql_connect("localhost","root","root");
  mysql_select_db("phpdb",$con) or die("Not Found");
  
  $q="insert into test(name)values('$path')";
  mysql_query($q,$con);
  if(mysql_affected_rows($con)>0){  
  move_uploaded_file($file["tmp_name"], $path);
  //print_r($file);
  }
  header("location:index.php");
  }else
  {
      echo "Not Allow";
  }
}
?>

