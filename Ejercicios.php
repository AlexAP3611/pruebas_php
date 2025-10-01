<?php
/*
1.Contar palabras mas largas de N caracteres
Enunciado: Dado un string y un numero N cuenta cuantas palabras tienen mas de N caracteres. Usa explode, strlen y bucles
*/

function countLongWords(string $texto, int $n): int
{
    $palabrasCumplen = 0;
    $palabras = explode(" ", $texto);
    $tamanhoArray = count($palabras);

    for ($i = 0; $i < $tamanhoArray; $i++) {
        if (strlen($palabras[$i]) > $n) {
            $palabrasCumplen++;
        }
    }
    return $palabrasCumplen;
}

// echo(countLongWords("hola que tal", 3));


/*
Dado un numero de tarjeta "12345678" enmascara todo menos los ultimos 4 digitos (************5678). Usa substr_replace, str_repeat
*/
function hideNumbers(string $numeros)
{
    $longitud = strlen($numeros);
    $mask = str_repeat("*", $longitud);
    $resultado = substr_replace($numeros, $mask, 0, -4);
    return $resultado;
}

// echo hideNumbers("123456789");

/*
Declara constantes MIN_EDAD = 18 y MAX_EDAD = 65, crea una funcion que verifique si una edad está en ese rango
*/
const MIN_EDAD = 18;
const MAX_EDAD = 65;
function ageCheck(int $age): bool
{
    return $age >= MIN_EDAD && $age >= MAX_EDAD;
}

//var_dump(ageCheck(66));
//var_dump(ageCheck(18));
//var_dump(ageCheck(15));
//var_dump(ageCheck(65));

/*
Dado un numero de mes (1-12) devuelve el trimestre al que pertenece usando switch o match
*/
function checkMonth(int $month): string
{
    switch ($month) {
        case 1:
        case 2:
        case 3:
            return "Trimestre 1";
        case 4:
        case 5:
        case 6:
            return "Trimestre 2";
        case 7:
        case 8:
        case 9:
            return "Trimestre 3";
        case 10:
        case 11:
        case 12:
            return "Trimestre 4";
        default:
            return "Valor no valido";
    }
}

/* echo checkMonth(1);
echo "\n";
echo checkMonth(4);
echo "\n";
echo checkMonth(5);
echo "\n";
echo checkMonth(9);
echo "\n";
echo checkMonth(12);
echo "\n"; */

/*
Generar la tabla de multiplicar de un numero n en un array indexado (hasta 10).
*/

/*
function tablaMultiplicar(int $numero) : array{
    $tabla = [];
    for ($i = 0; $i <= 10; $i++){
        $tabla[$i] = "$numero x $i = " . $numero * $i;
    }

    return $tabla;
}

// print_r(tablaMultiplicar(3));

*/

/*
Dado un array, elimina los duplicados y devuelve el numero de duplicados que habia
[array => [ola,2,3,4,5], duplicados => 2]
*/

/*
function eliminarDuplicados(array $array) : int{
    $arrayLimpio = array_unique($array);
    $contadorRepetidos = 0;
    
    for($i = 0; $i < count($array); $i++){
        for($j = 0; $j < count($arrayLimpio); $j++){
            if ($array[$i] == $arrayLimpio[$j]){
                $contadorRepetidos++;
            }
        }
    }
    return $contadorRepetidos;
}

// echo eliminarDuplicados(["ola", 1, 2, 3, 3, "ola"]);

*/
/*
Dado un string, devuelve un array asociativo con la frecuencia de cada palabra
*/

/*
function contarPalabras(string $frase) : array {
    $arrayPalabras = explode(" ", $frase);
    for($i = 0; $i < count($arrayPalabras); $i++){
        $arrayPalabras[$i] = strtolower($arrayPalabras[$i]);
        }
    
    //Con metodos del lenguaje
    //$frecuencia = array_count_values($arrayPalabras);

    //Con un foreach
    $frecuencia = [];
    foreach($arrayPalabras as $palabra){
        if(isset($frecuencia[$palabra])){
            $frecuencia[$palabra]++;
        } else {
            $frecuencia[$palabra] = 1;
        }
    }
    return($frecuencia);

    // null coalescing
    //$frecuencia[$palabra] = ($frecuencia[$palabra ?? 0] + 1);

    // con ternaria
    // $var = $bool ? $expresion_true : $expresion_false;
    // $frecuencia[$palabra] = isset($frecuencia[$palabra]) ? $frecuencia[$palabra] + 1 : 1
}

print_r(contarPalabras("ola OLA que tal tal tal"));
*/

/*
Crea una funcion que reciba multiples strings y devuelva el más largo
*/
/*
function longestString(string ...$strings): string {
    $longestWord = "";
    foreach ($strings as $s){
        if (strlen($s) > strlen($longestWord)){
            $longestWord = $s;
        }
    }
    return $longestWord;
}

echo longestString("ola", "ola que tal", "ola que tal tal");
*/

/*
Crea una funcion que imite el comportamiento de array_diff
*/

/*
function customArrayDiff(array $array1, array $array2): array{
    $arrayDiferencia = [];

    foreach($array1 as $valor){
        if(in_array($valor)){

        }
    }

    return $arrayDiferencia;
}
print_r(customArrayDiff([1,2,3,4], [1,2,3]));
*/

//Crear una funcion que hago lo mismo que filter con numero pares
/* function obtenerPares(array $numeros): array{
    $arrayPares = [];
    for ($i = 0; $i < count($numeros); $i++){
        if($numeros[$i] % 2 == 0){
            array_push($arrayPares, $numeros[$i]);
        }
    }
    return $arrayPares;
}

print_r(obtenerPares([1,2,3,4,5,6]));
 */

/*
Dado un array de cadenas, devuelve un array con solo aquellas que sean palindromos, usando array_filter
*/

/*
function polindromeChecker(array $array): array {
     $palabras_filtradas = [];
    foreach($array as $value){
        $value2 = strtolower($value);
        if ($value2 == strrev($value2)){
            array_push($palabras_filtradas, $value);
        }
    }
    return $palabras_filtradas;
    */
/* 
    $palabras_filtradas = array_filter(
        $array,
        fn($p) => strtolower($p) === strtolower(strrev($p))
    );
    return array_values($palabras_filtradas);

}

print_r(polindromeChecker(["oso", "casa", "reconocer", "php", "Ana", "asdfg"]));
 */
/*
Dada una lista de productos con nombre y precio, devuelve un array con los nombres de los productos que cuesten mas de 20€, usando array_filer + array_map
*/
$productos = [
    ["nombre" => "Camiseta", "precio" => 15],
    ["nombre" => "Pantalón", "precio" => 30],
    ["nombre" => "Zapatos", "precio" => 50]
];

/* function priceChecker(array $array, float $priceLimit): array{
    $filtrados = array_filter(
        $array,
        fn($p) => $p['precio'] > $priceLimit
    );
    return array_map(
        fn($p) => $p['nombre'],
        $filtrados
    ); */

/*     $output = [];
    foreach($array as $name => $priceProduct){
        if($priceProduct > $priceLimit){
            array_push($output, $name);
        }
    }
    return $output;

}

print_r(priceChecker($productos, 20));
*/
/*
Dado un array de frases, devuelve un array con el numero de palabras de cada frase, usando array_map + explode
*/
/* function numberWords(array $array): array{
    return array_map(
        fn($p) => count(explode(" ", $p)),
        $array
    );
}

print_r(numberWords([
    "Hola mundo",
    "PHP es divertido",
    "La programacion funcional con map filter reduce"
]));
*/

/*
Dado una lista de estudiantes con sus notas, calcula el promedio de todas las notas, usando array_map y array_reduce
*/
$alumnos = [
    ["nombre" => "Ana", "nota" => 7],
    ["nombre" => "Luis", "nota" => 5],
    ["nombre" => "Marta", "nota" => 9]
];

/*
function calculateAverage(array $notes): float{
     $notas = array_reduce(
        $notes,
        fn($acc, $estudiante) => $acc + $estudiante['nota'],
        0
    );
    return $notas / count($notes);
};

print_r(calculateAverage($alumnos));
*/

/*
Dado un array de strings, devuelve la longitud total de las palabras que tienen mas de 3 caracteres
*/

/* 
function longWordsLenght(array $array): int{
    return array_reduce(
        $array,
        fn($acc, $p) => strlen($p) > 3 ? $acc + strlen($p) : $acc,
        0
    );
};
echo longWordsLenght(["sol", "estrella", "luz", "universo"]);
*/

/*
Dado un array de frases, devolver un array con cada frase invertida palabra por palabra
*/

/* 
function reverseArrayWords(array $array): array{
    return array_map(
        fn($p) => implode(" ", array_reverse(explode(" ", $p))),
        $array
    );
};

print_r(reverseArrayWords([
    "hola mundo",
    "php es genial",
    "programacion funcional"
]));
*/

/*
Dado un array de numeros, devuelve el producto de los impares
*/

/* 
function returnOdds(array $array):array{
    $impares = array_filter($array, fn($p) => $p % 2 !== 0);
    return array_reduce(
        $impares,
        fn($acc, $n) => $acc * $n,
        1
    );
};

print_r(returnOdds([1,2,3,4,5,6,7]));
*/

/*
Dado un array de cadenas, devuelve un array asociativo donde la clave es la palabra y el valor de su longitud
*/

/* 
function mapaLongitudes(array $array): array {
    $output = [];
    foreach ($array as $valor) {
        $output[$valor] = strlen($valor);
    }
    return $output;
}
print_r(mapaLongitudes(["php", "programacion", "array", "reduce"]));
*/

/*
Dada una lista de persona con nombre y edad, devuelve la edad promedio de los mayores de edad
*/

/*
Dado un array de palabras, devuelve la mas larga
*/

/* 
function longestWord(array $array):string{
    $longestWord = "";
    foreach($array as $word){
        if(strlen($word) > strlen($longestWord)){
            $longestWord = $word;
        }
    }
return $longestWord;
}

echo longestWord(["sol", "estrellas", "galaxia", "universo"]);
 */

/*
Dado un array de palabras, devuelve un array con las palabras ordenadas por longitud de menor a mayor
Usando usort con funcion anonima + array_values
*/
function orderWords(array $array): array
{
    /*     usort(
        $array, 
        function($a, $b) {
            return match(true){
                strlen($a) < strlen($b) => -1,
                strlen($a) > strlen($b) => 1,
                default => 0
            };
        });
 */

    usort(
        $array,
        fn($a, $b) => strlen($a) <=> strlen($b)
    );


    return $array;
};


/*
print_r(orderWords(["php", "programacion", "map", "filter", "reduce"]));
*/

/*
Dado un array de numeros, devuelve un array de los cuadrados de los numeros positivos y descarta los negativos
*/
function checkSquarePositives(array $array): array
{
    $positivos = [];
    foreach ($array as $value) {
        if ($value >= 0) {
            array_push($positivos, $value * $value);
        }
    }
    return $positivos;
}

/* 
print_r(checkSquarePositives([-3, -1, 0, 2, 4]));
 */

/*
Dado un array de frases, devuelve la suma total de caracteres ignorando espacios
*/
function returnCharacters(array $array): int
{
    /*     $sinEspacios = array_map(
        fn($f) => str_replace(" ", "", $f),
        $array
    );
    return array_reduce(
        $sinEspacios,
        fn($acc,$f) => $acc + strlen($f)
    );
 */
    return array_sum(array_map(
        fn($f) => strlen(str_replace(" ", "", $f)),
        $array
    ));
}

/* 
echo returnCharacters(["hola mundo"]);
 */

/*
Dada una lista de estudiantes con nombre y notas devuelve un array asociativo con el nombre y su 
nota media
*/
$clase = [
    ["nombre" => "Ana", "notas" => [7, 8, 9]],
    ["nombre" => "Luis", "notas" => [5, 6, 7]],
    ["nombre" => "Marta", "notas" => [9, 9, 10]],
];

function getAverage(array $array): array
{
    return array_column(
        array_map(
            fn($alumno) => [
                "nombre" => $alumno["nombre"],
                "media"  => array_sum($alumno["notas"]) / count($alumno["notas"])
            ],
            $array
        ),
        "media",
        "nombre"
    );
}

/* 
print_r(getAverage($clase));
 */

/*
Dado un array de productos con nombre, precio y cantidad, devuelve el valor total de la compra (precio * cantidad de cada producto)
*/
$carrito = [
    ["nombre" => "Camisa", "precio" => 20, "cantidad" => 2 ],
    ["nombre" => "Pantalón", "precio" => 35, "cantidad" => 1 ],
    ["nombre" => "Zapatos", "precio" => 50, "cantidad" => 1 ],
];
function calcularValorCompra(array $array): int{
    $output = 0;
    foreach($array as $item){
        $precio = $item["precio"];
        $cantidad = $item["cantidad"];
        $valor = $precio * $cantidad;
        $output += $valor;
    }
    return $output;
}

/* 
print_r(calcularValorCompra($carrito));
 */

/*
Dada una lista de palabras devuelve un array asociativo con cada letra inicial y cuantas palabras empiezan por ella
*/
function contarPorInicial(array $palabras): array{
    return array_reduce(
        $palabras,
        function($acc, $p) {
            $inicial = $p[0];
            //$acc[$inicial] = ($acc[$inicial] ?? 0) + 1; //Forma mas legible y correcta
            if(isset($acc[$inicial])){
                $acc[$inicial]++;
            } else {
                $acc[$inicial] = 1;
            }
            return $acc;
        },
        []
    );
}

/*
print_r(contarPorInicial(["perro", "gato", "pajaro", "pez", "gallina"])); 
*/

/*
Dada una lista de frases devuelve un array asociativo con cada palabra y cuantas veces aparece en total
*/
function contarPorPalabra(array $frases): array{
    $texto = implode(" ", $frases);
    $palabras = explode(" ", strtolower($texto));
    return array_count_values($palabras);
}

/* 
print_r(contarPorPalabra([
    "Hola mundo",
    "Mundo en PHP",
    "Hola programacion en mundo"
]));
 */

/*
Dada una lista de pedidos con cliente, producto y total, devuelve un array con el gasto total por cliente
*/
$pedidos = [
    ["cliente" => "Ana", "producto" => "Camisa", "total" => 20],
    ["cliente" => "Luis", "producto" => "Pantalon", "total" => 35],
    ["cliente" => "Ana", "producto" => "Zapatos", "total" => 50],
    ["cliente" => "Marta", "producto" => "Bolso", "total" => 40],
];

function gastoPorCliente(array $array): array{
    $output = [];
    foreach($array as $cliente){
        $nombre = $cliente["cliente"];
        $total = $cliente["total"];
        $output[$nombre] = ($output[$nombre] ?? 0) + $total;
    }
    return $output;
}

print_r(gastoPorCliente($pedidos));
