<?php
/* CBTIS 89
Programa que almacena datos en el arreglo y
 posteriormente lo imprime.
   Sergio Alejandro Aguirre Ortiz
   3°A Programacion Matutino
   ☺☻
*/
$frutas = array("25"=>"Manzana","40"
=>"Mango","35"=>"Limon","20"=>"Naranja");

echo "** Fruteria del Sur **","<br>","<br>";

foreach($frutas as $precio=>$fruta)
{echo "El kilo de " . $fruta . " cuesta "
 . $precio;
  echo "<br>","<br>";
   }
?>