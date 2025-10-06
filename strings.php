<?php
$variable = "Hola ";

echo $variable . "mundo" . "\n";

echo "\n";

echo strlen($variable) . "\n"; //Cuenta los caracteres
echo strlen("Unapalabramuylarga") . "\n"; //Cuenta los caracteres

echo "\n";

echo str_word_count($variable) ."\n"; //Cuenta las palabras
echo str_word_count("Unas cuantas palabras") . "\n"; //Cuenta las palabras

echo strtoupper("letrasminusculas") . "\n"; //Pasa las letras a mayusculas
echo strtolower("LETRASMAYUSCULAS") . "\n"; //Pasa las letras a minusculas

echo "\n";

echo str_replace("Hola", "Que tal", $variable). "\n";
echo strrev("Hola mundo"). "\n"; //Empieza a leer desde el final

echo "\n";

echo " esto es una cadena con espacios ". "\n";
echo trim( " esto es una cadena con espacios ")."\n"; //Quita espacios principio y final

echo "\n";

$stringArray = explode(" ", $variable);
print_r($variable);

echo "\n";

//Concatenar

$un_string = "hola";
$otro_string = "mundo";
echo "$un_string $otro_string" . "\n";

//Slice

$variable10 = "Hola mundo!";
echo substr($variable10, 5, 3)."\n"; //Hacer un substring
echo substr($variable10, 5)."\n"; //Si falta el ultimo parametro llegara al final de la cadena

//Caracteres especiales

echo "Esto es algo  \"especial\"". "\n";

?>