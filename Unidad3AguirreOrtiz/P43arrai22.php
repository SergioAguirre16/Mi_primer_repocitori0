<?php
/* CBTIS 89

programa que almacena en un arreglo llamado 
$Compres el valor de 6 compras,
posteriormente en otro arreglo se debe 
almacenar informacion de acuerdo a las
siguientes condiciones:
El contenido del arreglo $Descuento se
llenara de la siguiente manera:
compra menor a 300 = 0
compra mayor a 300 y menor o igual a 1000 = 10%
compra mayor a 1000 y menor o igual a 2500 = 15%
compra mayor a 2500 y menor o igual a 5000 = 20%
compra mayor a 5000 0 25%

En el arreglo $Total se coloca la diferencia
emtre la compra y el descuento y en arreglo
$Porcentaje colocar el porcentaje que se le
aplico de descuento

Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino*/


$Compras = array(800,2700,3900,150,7600,1000);
$Descuento = array();
$Total = array();
$Porcentaje = array();


function calcularDescuento($compra) {
    if ($compra <= 300) {
        return [0, 0];
    } elseif ($compra > 300 && $compra <= 1000) {
        return [0.10, 10];
    } elseif ($compra > 1000 && $compra <= 2500) {
        return [0.15, 15];
    } elseif ($compra > 2500 && $compra <= 5000) {
        return [0.20, 20];
    } else { // compra > 5000
        return [0.25, 25];
    }
}


foreach ($Compras as $compra) {
    list($descuentoPorc, $porcentaje) = calcularDescuento($compra);
    $descuento = $compra * $descuentoPorc;
    $total = $compra - $descuento;
    
    
    $Descuentos[] = $descuento;
    $Total[] = $total;
    $Porcentaje[] = $porcentaje;
}

echo "Compras__Descuentos__Total__Porcentaje\n";
echo "<br>";
for ($i = 0; $i < count($Compras); $i++) {
    echo "{$Compras[$i]}_________{$Descuentos[$i]}______{$Total[$i]}______{$Porcentaje[$i]}%\n";
    echo "<br>";
    echo "<br>";
}



?>