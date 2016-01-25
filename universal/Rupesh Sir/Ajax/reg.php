<html>
    <head>
        <script src="jquery-1.11.3.js"></script>
        <script>
            $(document).ready(function(){
                $("#state").change(function(){
                    $.ajax({
                        url: "city.php",
                        type: 'POST',
                        async: true,
                        data: "state="+$(this).val(),
                        success: function (data) {
                            $("#city").html(data);
                                            
                                        }
                                 
                        
                    });
                    
                });
                
            });
        </script>
    </head>
    <body>
        <table align="center" border="1">
            <tr>
                <td>Select State</td>
                <td><select id="state" name="state">
                        <option>Select State</option>
                        <?php
$con=mysqli_connect("localhost","root","root");
if($con==false)
    die("Connection  Failed....");
mysqli_select_db($con, "phpdb") or die("Db Not Found");
$q="select * from wp_state order by sname";
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
                    </select>
                </td>
            </tr>    
        <tr>
                <td>Select City</td>
                <td><select id="city" name="city">
                        <option>Select City</option>
                    </select>
                </td>
            </tr>    
        </table>
    </body>
</html>
