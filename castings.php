<?php

//Castings
$a = 5;
$b = 5.34;
$c = "hola";
$d = true;
$e = null;

var_dump($a);
$a = (string) $a;
var_dump($a);

echo "\n";

var_dump($c);
$c = (float) $c;
var_dump($c);


?>