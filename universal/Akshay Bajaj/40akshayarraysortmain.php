<pre>

<?php

$arr=array("akshay"=>31,"amit"=>42,"Ananya"=>39,"sumit"=>40);

$old=0;

$temp=0;

$j=0;

foreach($arr as $new)  //we input value from the given array 	
					//to the new array
 
{ 
 
   $old=$new;

   $a[$j]=$new;

   $j++;
 
}

for($i=0;$i<count($a);$i++) //now we sort the new array

{
 
 for($j=0;$j<count($a);$j++) //ascending order by value

 {

  if($a[$i]<$a[$j])

  {
   
   $temp=$a[$i];

   $a[$i]=$a[$j];

   $a[$j]=$temp;

  }

 }

}

echo "<br>The sorted array is(ascending order by value):<br>";

{

 foreach($a as $val)

 {

  echo $val."<br>";

 }

}

for($i=0;$i<count($a);$i++) //now we sort the new array
 
{

 for($j=0;$j<count($a);$j++) //descending order by value

 {

  if($a[$i]>$a[$j])

  {

   $temp=$a[$i];

   $a[$i]=$a[$j];

   $a[$j]=$temp;

  }

 }

}

echo "<br>The sorted array is(descending order by value):<br>";
{

 foreach($a as $val)

 {

  echo $val."<br>";

 }

}

		                 //how to traverse and 					
				//compare string value
                         	//for comparing keys that are string type
        		        //without using ASCII value
?>
