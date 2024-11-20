<?php
/*CBTIS 89
programa que almacena el nombre de cuatro personas(Luz,Fer,Leo,Ale) en un arreglo $Alumnos y en otro arreglo
multidimencional llamado $Calificaciones almacene las calidicaciones(6,4,5)(7,9,8)(7,9,5)(5,4,6) de cada uno de ellos por medio de filas 
y columnas.

Debas calcular por medio de ciclos el promedio de cada alumno y guardarlo en el arreglo $Promedio de igual manera en el arreglo $Status debe almacenar la palabra Aprobado o Reprobado segun corresponda.
Sergio Alejandro Auirre Ortiz Programación 3°A Matutino
*/

$Alumnos = array("Luz","Fer","Leo","Ale");
$Calificaciones = array(array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6));
$Status = array();
$Promedio = array(5,8,7,5);



$longitud = count ($Alumnos);
for ($i=0; $i<count($Alumnos); $i++)
{
if($Promedio[$i] <=5){
	$Status[] = "reprobado";
}

elseif($Promedio[$i] >6){
	$Status[] = "aprobado";
}
}

    echo "CBTIS 89";
    echo "<br>";
    echo "<br>";
    echo "Alumnos___Promedio___Status";
    echo "<br>";
    for($i=0; $i<$longitud; $i++)
    	{echo $Alumnos[$i]."________".$Promedio[$i]."______".$Status[$i];
         echo "<br>";
         }

echo "<br>";
for($i=0;$i<4;$i++)
{  for($j=0;$j<3;$j++)
	{echo $Calificaciones[$i][$j]." ";}
     echo "<br>";
}


?>