<?php
//Numeros
$x = 5;
$y = 3.5;
$z = "25";

var_dump($x);
var_dump($y);
var_dump($z);

echo "\n";

var_dump(is_int($x));
var_dump(is_int($y));

echo "\n";

$x = "2454fdfsgsre";
var_dump(is_numeric($x)); //Comprobar si una variable contiene un numero



?>