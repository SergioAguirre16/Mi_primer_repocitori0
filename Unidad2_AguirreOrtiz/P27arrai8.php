<?php
/* CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino*/

  /* $datos = array(array(1, 2, 3),array(4, 5, 6),array(7, 8, 9),array(10, 11, 12),array(13, 14, 15),array(16, 17, 18),array(19, 20, 21),array(22, 23, 24),array(25, 26, 27),array(28, 29, 30),array(31, 32, 33),array(34, 35, 36),array(37, 38, 39),array(40, 41, 42),array(43, 44, 45),array(46, 47, 48),array(49, 50, 51),array(52, 53, 54),array(55, 56, 57),array(58, 59, 60),array(61, 62, 63),array(64, 65, 66),array(67, 68, 69),array(70, 71, 72),array(73, 74, 75),array(76, 77, 78),array(79, 80, 81),array(82, 83, 84),array(85, 86, 87),array(88, 89, 90),array(91, 92, 93),array(94, 95, 96),array(97, 98, 99),array(100));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }*/
   
echo "Numeros pares", "<br>", "<br>";

$numeros = range(1, 100);

// Recorrer el array con un ciclo FOR
for ($i = 0; $i < count($numeros); $i++) {
    // Mostrar solo los números pares
    if ($numeros[$i] % 2 == 0) {
        echo $numeros[$i] . "\n";
    }
}

?>