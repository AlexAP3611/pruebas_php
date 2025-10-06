<?php

function suma_numeros(...$x){
    $n = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++){
        $n += $x[$i];
    }
    return $n;
}

// echo suma_numeros(1,2,3,4,5);

function saludo_familia(... $x){
    $len = count($x);
    for ($i = 0; $i < $len; $i++){
        echo "Hola $x[$i]" . "\n";
    }
    }
//  function saludo_familia($apellido, ...$nombres)    
//  $output = "";
//  foreach($nombres as $nombre){
//      $output .= "Hola $nombre $apellido
//  }
//


//saludo_familia("Pablo Garcia", "Juan Perez", "Gonzalo");

//Tipado de funciones

function suma_numeros2(int $a, int $b){
    return $a + $b;
}

?>