<?php
/* CBTIS 89
Programa que almacena datos en el arreglo y
 posteriormente lo imprime.
   Sergio Alejandro Aguirre Ortiz
   3°A Programacion Matutino
   ☺☻
*/
$equipo = array("portero"=>"Julio","defensa"
=>"Diego","medio"=>"Jair","delantero"=>"Rafa");

echo "** SELWCCIÓN NACIONAL **","<br>","<br>";

foreach($equipo as $posicion=>$jugador)
{echo "El jugador " . $jugador . " es el "
 . $posicion;
  echo "<br>","<br>";
   }
   ?>