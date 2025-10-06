<?php
//Arrays

/* 

//$coches = array("volvo", "bmw", "toyota");
$coches = ["volvo", "bmw", "toyota"];
//var_dump($coches);
print_r($coches);

$un_array = [1, "string", true, [2,4]];

print_r($un_array);
echo "\n";

echo "---Contar array---";
echo "\n";
echo count($coches);
echo "\n";

echo "---Arrays indexados---";
echo "\n";
echo $coches[0];
echo "\n";

foreach($coches as $coche){
    echo "$coche ";
}
echo "\n";

array_push($coches, "Ford"); //añadir un elemento
print_r($coches);

//Forma incorrecta, mejor usar push para que se encarge el de mirar el indice
$coches[4] = "otro";
print_r($coches); 

*/

//Arrays asociativos

/* 

$coche = [
    "marca" => "ford", 
    "modelo" =>"mustang", 
    "año" => "1964"
];
var_dump($coche);

echo $coche["marca"];
echo "\n";
echo $coche["año"];
echo "\n";

foreach($coche as $clave => $valor){
    echo "$clave -> $valor\n";
}
echo "\n";
echo "\n";

//Crear arrays
$mi_coche =[];
$mi_coche["marca"] = "Citroen";
$mi_coche["año"] = 2008;
var_dump($mi_coche);

$array_mixto = [];
$array_mixto[0] = "manzana";
$array_mixto[1] = "pera";
$array_mixto["fruta"] = "cereza";
var_dump($array_mixto);


function otra_funcion(){
    echo "hola\n";
}
$otro_array = [
    "car" => "volvo",
    "mensaje" => otra_funcion()
];

$otro_array;

*/

//Updatear datos array
/*

$coches = ["volvo", "bmw", "toyota"];
foreach($coches as &$coche){
    $coche = "ford";
}
var_dump($coches);
unset($coche);

$coche = "otra cosa";
var_dump($coches);

*/

//Añadir items
$coches = ["volvo", "bmw", "toyota"];
$coches[] = "ford";
var_dump($coches);

array_push($coches, "Mercedes", "Suzuki");
var_dump($coches);
?>