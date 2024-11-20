<?php
/*CBTIS 89
Programa que combierte los datos de un arreglo en una
cadena de texto*

//almacena datos de un arreglo
$arraydatos = ["Chuy","Cesarin","Emili"];

//convierte un array en una cadena de texto
$string = implode(" ", $arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//cadena de texto a separar
$cadena = "tercero de programacion matutino";

//convierte una cadena de texto en un array
$array = explode(" ", $cadena);

$longitud = count ($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
//imprime los elementos del arreglo
for($i=0; $i<$longitud; $i++)
{//se obtiene el valor de cada elemento
echo $array[$i];
echo "<br>";

}
?>