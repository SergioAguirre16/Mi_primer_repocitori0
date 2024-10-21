<?php
/* CBETIS 89 ...
Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino*/

$nombres = array("Ana", "Pedro", "Luis", "Maria", "Jose", "Elena", "Miguel", "Carla");


$nombre = "Pedro";


foreach ($nombres as $n) {
    if ($n == $nombre) {
        echo "Este nombre está en el Array: " . $nombre . "\n";
        break;  
    }
}
?>