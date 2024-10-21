<?php
   /* CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino*/
   $datos = array(
   array(1, 2, 3),array(4, 5, 6),array(7, 8, 9));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>