<?php
require_once('Tiktak.php');


$matriz = [
    ['X','O','O'],
    ['O','X','O'],
    ['-','O','X']
];
$matriz2 = [
  ['O','X','O'],
  ['O','X','O'],
  ['X','O','X']
];
$matriz3 = [
  ['O','X','-'],
  ['O','X','-'],
  ['O','-','-']
];


$tiktak = new Tiktak;
$resultado = $tiktak->checkresult($matriz);
$tiktak->resul($resultado);
$resultado2 = $tiktak->checkresult($matriz2);
$tiktak->resul($resultado2);
$resultado3 = $tiktak->checkresult($matriz3);
$tiktak->resul($resultado3);






