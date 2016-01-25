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
  move_uploaded_file($file["tmp_name"], $dir."/".$name);
  //print_r($file);
  header("location:upload.html");
  }else
  {
      echo "Not Allow";
  }
}
?>

