<?php
 $i=10;
 echo gettype($i)."<br>";
 $i=10.10;
 echo gettype($i)."<br>";
 $i=true;
 echo gettype($i)."<br>";
 $i=a;
 echo gettype($i)."<br>";
 $i="akshay";
 echo gettype($i)."<br>";
 $i='a';
 echo gettype($i)."<br>";
 $i="a";
 echo gettype($i)."<br>";
?>
<?php
 echo "<br><br><br>";
 define("i",5);
 var_dump(i);
 echo "<br>";
 
 $i=10;
 var_dump($i);
 echo "<br>";

 $i="AKSHAY";
 var_dump($i);
 echo "<br>";

 $i=10.10;
 var_dump($i);
 echo "<br>";
 
 $i='a';
 var_dump($i);
 echo "<br>";

 $i="a";
 var_dump($i);
 echo "<br>";

 $i=false;
 var_dump($i);
 echo "<br>";
?>
