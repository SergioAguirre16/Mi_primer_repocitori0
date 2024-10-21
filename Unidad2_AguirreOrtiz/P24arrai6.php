<?php
/* CBTIS 89
Programa que almacena datos en el arreglo y
 posteriormente lo imprime.
   Sergio Alejandro Aguirre Ortiz
   3°A Programacion Matutino
   ☺☻
*/
$plantel = array("programación"=>"Julio","construción"
=>"Diego","arquitectura"=>"Jair","contabilidad"=>"Rafa");

echo "** ESTUDIANTES Y SUS CARRERAS **","<br>","<br>";

foreach($plantel as $carrera=>$alumno)
{echo "El Alumno " . $alumno . " estudia "
 . $carrera . " en el CBTIS#89";
  echo "<br>","<br>";
   }
   ?>