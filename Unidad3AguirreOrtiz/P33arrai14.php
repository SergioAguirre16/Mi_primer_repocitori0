<?php
/* CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino*/
   $array_numerico_indexado = array(3, "Camisa", 2, "Pantalon");

   foreach($array_numerico_indexado as $prendas){
      echo $prendas . " <BR>";
   }

   array_push($array_numerico_indexado, 1, "Cinturon", 2, "Gorras", 4, "calsetas");

   foreach($array_numerico_indexado as $prendas){
      echo $prendas . " <BR>";
   }
?>