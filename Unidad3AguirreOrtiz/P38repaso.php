<?php
/* CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
programa que imprime datos del arreglo de forma asendente por medio de un ciclo for
Posteriormente se agregara cuatro datos y se eliminaran dos
imprimiendo datos del arreglo de forma desendente por medio de un ciclo for
y dando el numero de elementos actuales
3°A Programación Matutino*/

$arraynumerico = array("Gato", "Perro", "Ajolote", "Mariposa", "Caballo", "Elefante");
echo "Datos del arreglo de forma asendente por medio de un ciclo for";
sort($arraynumerico);
//var_export($arraynumerico);

echo "<p>";

$longitud = count($arraynumerico);

  for($i=0; $i<$longitud; $i++)
  {echo $arraynumerico[$i];
   echo "<br>";
  }
  echo "<br>";
echo "Posteriormente se agregara cinco datos y se eliminaran tres";
echo "<p>";

array_push($arraynumerico, "Camaleon");
array_push($arraynumerico, "Iguana");
array_push($arraynumerico, "Raton");
array_push($arraynumerico, "Cocodrilo");
array_push($arraynumerico, "Pejelagarto");
unset($arraynumerico[0]);
unset($arraynumerico[2]);
unset($arraynumerico[3]);
echo "Datos del arreglo de forma desendente por medio de un ciclo for";
rsort($arraynumerico);
//var_export($arraynumerico);

echo "<p>";

$longitud = count($arraynumerico);

  for($i=0; $i<$longitud; $i++)
  {echo $arraynumerico[$i];
   echo "<br>";
  }
echo "<br>";
echo "El numero de elementos actuales es ", $longitud;
?>