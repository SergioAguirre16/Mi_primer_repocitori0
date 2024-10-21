<?php
/* CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino*/
$nombre1= "Anna";
$nombre2= "pancho";
$nombre3= "jesus";
$nombre4= "manuel";
$nombre5= "peres";
$nombre6= "pablo";





$array = array(1, 2, 3, "casa", $nombre1,$nombre2,$nombre3,$nombre4,$nombre5,$nombre6
  );

  $longitud = count($array);

  for($i=0; $i<$longitud; $i++)
  {echo $array[$i];
   echo "<br>";
  }
?>
