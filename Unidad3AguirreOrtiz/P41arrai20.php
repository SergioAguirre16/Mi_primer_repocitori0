<?php
/*CBTIS 89
Programa que almacena informacion de 6 personas y depemdiendo su edad los 
contabiliza en diversos arreglos de acuerdo a las siguientes condiciones.
Si la persona es menor de 18 años se debe colocar un 1 en el arreglo 
$Grupo1 y en los otros dos se coloca un 0.
Si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo 
$Grupo2 y en los otros dos se coloca un 0.
Si la persona tiene entre 50 años omas se debe colocar un 1 en el arreglo 
$Grupo3 y en los otros dos se coloca un 0.
 sergio alejandro aguirre ortiz
 programación 3°A matutino*/

$Nombre = array("Paco","Mari","Lalo","Rosi","Paty","Beto");

$Edad = array(17,15,71,38,12,58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();

for ($i=0; $i<count($Nombre); $i++)
{
if($Edad[$i] <18){
	$Grupo1[] = 1;
	$Grupo2[] = 0;
	$Grupo3[] = 0;
}

elseif($Edad[$i] <50){
	$Grupo1[] = 0;
	$Grupo2[] = 1;
	$Grupo3[] = 0;
}

elseif($Edad[$i] >50){
	$Grupo1[] = 0;
	$Grupo2[] = 0;
	$Grupo3[] = 1;
 }
}

echo "<p>Nombre_____edad____grupo1____grupo2____grupo3<br>";

for ($i=0; $i<count($Nombre); $i++){
echo "<p>__$Nombre[$i]_______$Edad[$i]____$Grupo1[$i]_____$Grupo2[$i]_____$Grupo3[$i]<p>";

}

?>