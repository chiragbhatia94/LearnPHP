<?php
 $bsal=28000;
 echo "The basic salary of the employee is: ".$bsal;
 if($bsal>35000)
  {
   $nsal=$bsal+($bsal/2)+($bsal/5)-($bsal*(7.8/100));
  }
 if($bsal>=20000 && $bsal<=35000)
  {
   $nsal=$bsal+($bsal*(30/100))+($bsal*(12.5/100))-($bsal*(7.8/100));
  }
 if($bsal>=12500 && $bsal<20000)
  {
   $nsal=$bsal+($bsal*(17.5/100))+($bsal*(8.5/100))-($bsal*(7.8/100));
  }
 if($bsal>=5000 && $bsal<12500)
  {
   $nsal=$bsal+($bsal*(7.50/100))-($bsal*(7.8/100));
  }
 echo "<br>".$nsal;
?>

