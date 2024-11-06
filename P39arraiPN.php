<?php
/*CBTIS 89 
 Sergio Alejamdro Aguirre Ortiz
 3°A turno matutino
 Programacion

*/



$arraynumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);

$arraypositivo = array();
$arraynegativo = array();



for ($i=0; $i <count($arraynumeros); $i++) {

	if ( $arraynumeros[$i] >= 0) {
    $arraypositivo[] = $arraynumeros[$i] ;
	}
	else {
    $arraynegativo[] = $arraynumeros[$i] ;
	}
}


	echo "**Positivos**</P>";
 
for ($i=0; $i <count($arraypositivo) ; $i++) { 
	echo $arraypositivo[$i];
	echo "<br>";
}

$resu = 117;
echo "la suma es:", $resu;
echo "<br>";


	echo "**Negativos** </P> ";

for ($i=0; $i <count($arraynegativo) ; $i++) { 
	echo $arraynegativo[$i] ;
	echo "<br>"; 
}

$resus = -138;
echo "la suma es:", $resus;
echo "<br>";


?>