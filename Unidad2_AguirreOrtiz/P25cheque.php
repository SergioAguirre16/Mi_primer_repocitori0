<?php
/* CBTIS 89
   Programa que saca los billetes y monedas de un cheque
   Sergio Alejandro Aguirre Ortiz
   3°A Programacion Matutino
   ☺☻
*/

   
   $cheque=5888;

  $mil = floor($cheque/1000);

  $cheque = $cheque%1000 ;
  echo "$mil Billetes de mil </p>";

  $quin = floor($cheque/500);

  $cheque = $cheque%500 ;
  echo "$quin Billetes de quinientos </p>";

   $dose = floor($cheque/200);

  $cheque = $cheque%200 ;
  echo "$dose Billetes de dosientos </p>";

   $cien = floor($cheque/100);

  $cheque = $cheque%100 ;
  echo "$cien Billetes de cien </p>";

   $cin = floor($cheque/50);

  $cheque = $cheque%50 ;
  echo "$cin Billetes de cincuenta </p>";

   $bei = floor($cheque/20);

  $cheque = $cheque%20 ;
  echo "$bei Billetes de beinte </p>";

   $diez = floor($cheque/10);

  $cheque = $cheque%10 ;
  echo "$diez Monedas de diez </p>";

  $cinco = floor($cheque/5);

  $cheque = $cheque%5 ;
  echo "$cinco Monedas de cinco </p>";

  $dos = floor($cheque/2);

  $cheque = $cheque%2 ;
  echo "$dos Monedas de dos </p>";

  $uno = floor($cheque/1);

  $cheque = $cheque%1 ;
  echo "$uno Monedas de uno </p>";



?>