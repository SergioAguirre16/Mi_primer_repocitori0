<?php
/* CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
Datos del arreglo de forma asendente por medio de un ciclo for
3°A Programación Matutino*/

$arraynumerico = array("Ana", "Pedro", "Luis", "Maria", "Jose", "Elena");
echo "Datos del arreglo de forma asendente por medio de un ciclo for";
sort($arraynumerico);
//var_export($arraynumerico);

echo "<p>";

$longitud = count($arraynumerico);

  for($i=0; $i<$longitud; $i++)
  {echo $arraynumerico[$i];
   echo "<br>";
  }
echo "Posteriormente se agregara cuatro daros y se eliminaran dos";
echo "<p>";

array_push($arraynumerico, "Carlos");
array_push($arraynumerico, "Ivan");
array_push($arraynumerico, "Cesra");
array_push($arraynumerico, "rodrigo");
unset($arraynumerico[0]);
unset($arraynumerico[5]);
echo "Datos del arreglo de forma desendente por medio de un ciclo for";
rsort($arraynumerico);
//var_export($arraynumerico);

echo "<p>";

$longitud = count($arraynumerico);

  for($i=0; $i<$longitud; $i++)
  {echo $arraynumerico[$i];
   echo "<br>";
  }

echo "El numero de elementos actuales es ", $longitud;
?>