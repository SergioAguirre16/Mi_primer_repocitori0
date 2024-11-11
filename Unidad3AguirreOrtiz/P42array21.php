<?php
/* CBTIS 89
Programa que almacena por medio de un ciclo los numeros
del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los numeros pares, en el
$Arreglo2 van los numeros impares, en el $Arreglo3 va la suma
de los numeros correspondiente al mismo indice.
Sergio Alejandro Aguirre Ortiz
3°A Programación Matutino*/


$Arreglo1 = array(150, 152, 154, 156, 158, 160, 162, 164, 166, 168,
170, 172, 174,
190, 192, 194, 196, 198);
$Arreglo2 = array(151, 153, 155, 157, 159, 161, 163, 165, 167, 169,
171, 173,
191, 193, 195, 197, 197, 199);
$Arreglo3 = array();



$longitud = count ($Arreglo1);

for($i=0; $i<$longitud; $i++)
	{$Arreglo3[$i] = $Arreglo1[$i]+$Arreglo2[$i];	
}

    echo "CBTIS 89";
    echo "<br>";
    echo "<br>";
    echo "Arreglo1___Arreglo2___Arreglo3";
    echo "<br>";
    for($i=0; $i<$longitud; $i++)
    	{echo $Arreglo1[$i]."________".$Arreglo2[$i]."______".$Arreglo3[$i];
         echo "<br>";
         }
?>