<?php
/* CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino*/
$equipo = array("playeras"=>"100","camisas"
=>"250","pantalon de mesclilla"=>"300","vermudas"=>"200");

echo "** Tienda de ropa **","<br>","<br>";

foreach($equipo as $posicion=>$jugador)
{echo "la prenda de ropa " . $jugador . " tiene un costo de "
 . $posicion;
  echo "<br>","<br>";
   }
?>	