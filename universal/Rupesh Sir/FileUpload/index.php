<html>
    <head>
    </head>
    <body>
        <form action="upload_db.php" method="post" enctype="multipart/form-data">
        <table align="center" border="1">
            <tr>
                <td>Select File</td>
                <td><input  type="file" name="myfile"></td>
            </tr>
            <tr>
            
                <th><input type="submit" name="Upload" value="Upload"></td>
            </tr>
            
            
        </table>
        </form>
        <div>
            <?php
             $con=mysql_connect("localhost","root","root");
               mysql_select_db("phpdb",$con) or die("Not Found");
               $result=mysql_query("Select * from test");
               if(mysql_num_rows($result)>0){
               while($row=  mysql_fetch_array($result)){
              ?>
            <a href="?delete=delete&id=<?php echo $row['id']?>"> <img src="<?php echo $row['name']?>" width="100" height="100"></a>
            <?php
               }
               }
            ?>
        </div>
    </body><?php 
    if(isset($_GET["delete"]))
    {
             $con=mysql_connect("localhost","root","root");
               mysql_select_db("phpdb",$con) or die("Not Found");
               
               $result=mysql_query("select * from test where id=".$_GET["id"]);
               $row=mysql_fetch_array($result);
               mysql_query("delete from test where id=".$_GET["id"]);
               if(mysql_affected_rows($con)>0)
               {
                   unlink($row["name"]);
                   header("location:index.php");
               }
        
    }
    
    
    ?>
</html>
