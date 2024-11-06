<?php
/*CBTIS 89
Programa que almacena datos en un areglo
multidimencional y posterior mente los imprime en aiferentes posiciones.
sergio alejandro aguirre ortiz
3°A Programación matutino*/

$datos = array(
    array(10,20,30),array(40,50,60),array(70,80,90));


echo "Normal";
echo "<br>";
for($i=0;$i<3;$i++)
{  for($j=0;$j<3;$j++)
	{echo $datos[$i][$j]." ";}
     echo "<br>";
}

echo "Fila a columnas";
echo "<br>";
for($i=0;$i<3;$i++)
{  for($j=0;$j<3;$j++)
	{echo $datos[$j][$i]." ";}
      echo "<br>";
}

echo "Columnas inversas";
echo "<br>";
for($i=0;$i<3;$i++)
{  for($j=2;$j>-1;$j--)
	{echo $datos[$i][$j]." ";}
      echo "<br>";
}

echo "Filas inversas";
echo "<br>";
for($i=2;$i>-1;$i--)
{  for($j=0;$j<3;$j++)
	{echo $datos[$i][$j]." ";}
      echo "<br>";
}

echo "Espejo";
echo "<br>";
for($i=2;$i>-1;$i--)
{  for($j=0;$j<3;$j++)
	{echo $datos[$j][$i]." ";}
      echo "<br>";
}

?>