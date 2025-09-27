<?php
/*
 * 1. Contar palabras más largas de N caracteres
 */
echo "------Contar palabras mas largas que N------";

echo "\n";
echo "\n";

function countWordsLongerThanN(string $words, $n): int{
    $counter = 0;
    $arrayWords = explode(",", $words);
    foreach($arrayWords as $word){
        $word = str_replace(" ", "", $word);
        if(strlen($word) > $n){
            $counter++;
        }
    }
    return $counter;  
}

echo countWordsLongerThanN("uno, dos, tres, cuatro", 3);

echo "\n";
echo "\n";

/*
 * 2.Dado el número de tarjeta 1234567812345678,
 * enmascara todos menos los últimos 4 dígitos
 */
echo "------Ocultar todo menos las 4 últimas cifras------";

echo "\n";
echo "\n";

function hideNumbers(string $numbers): string{
    $hidden_numbers = str_repeat("*", strlen($numbers) - 4);
    return $hidden_numbers . substr($numbers, strlen($numbers) - 4, 4); 
}

echo hideNumbers("12345678901234567");

echo "\n";
echo "\n";

/*
 * 3.Declara constantes MIN_EDAD = 18 y MAX_EDAD = 65.
 * Crea una funcion que verifique que una edad está en rango
 */
echo "------Comporbar que edad esta en un rango------";

echo "\n";
echo "\n";

const MIN_EDAD = 18;
const MAX_EDAD = 65;
function checkAge(int $age): bool {
    return $age > MIN_EDAD && $age < MAX_EDAD;
}

var_dump(checkAge(1));

echo "\n";
echo "\n";

/*
 * 4.Dado un numero del 1 al 12, devuelve el nombre del mes
 */
echo "------Comporbar que edad esta en un rango------";

echo "\n";
echo "\n";

function returnMonth(int $number): string{
    switch($number){
        case 1: return "Enero";
        case 2: return "Febrero";
        case 3: return "Marzo";
        case 4: return "Abril";
        case 5: return "Mayo";
        case 6: return "Junio";
        case 7: return "Julio";
        case 8: return "Agosto";
        case 9: return "Septiembre";
        case 10: return "Octubre";
        case 11: return "Noviembre";
        case 12: return "Diciembre";
        default: "Mes invalido";
    }
}

echo returnMonth(5);

echo "\n";
echo "\n";

/*
 * 5.Genera la tabla de multiplicar de un numero n en un array indexado
 */
echo "------Tabla de multiplicar------";

echo "\n";
echo "\n";

function multiplicationTable(int $number): string{
    $result = "";
    for($i = 0; $i <= 10; $i++){
        $result .= "$number x $i = " . $number * $i . "\n";
    }
    return $result;
}

/* function alternativeMultiplicationTable(int $number): array{
    $result = [];
    for($i = 0; $i <= 10; $i++){
        $result[$i] = $number * $i;
    }
    return $result;
} */
echo multiplicationTable(2);
//print_r(alternativeMultiplicationTable(3));

echo "\n";
echo "\n";

/*
 * 6.Dado un array, elimina los duplicados y devuelve cuantos había
 */
echo "------Eliminar duplicados de un array y devolver el numero------";

echo "\n";
echo "\n";

function countDuplicates(array $array): int{
    $numberOfElements = count($array); //Cuenta el numero de elementos en el array
    $array = array_unique($array); //Elimina los duplicados del array 
    return $numberOfElements - count($array); //Resta el numero total de elementos que habia en el array antes de eliminar los duplicados con el valor de despues de
    //quedando la diferencia, que es el numero de duplicados  
}


echo "\n";
echo "\n";
/*
 * 7.Dado un string, devuelve un array asociativo con la frecuencia de cada palabra
 */
echo "------Eliminar duplicados de un array y devolver el numero------";

echo "\n";
echo "\n";

function frequenceOfWords(string $text): array{
    $result = [];
    $words = explode(" ", strtolower($text));
    foreach($words as $word){
        if($result[$word] ?? false > 0){
            $result[$word]++;
        } else {
            $result[$word] = 1;
        }
    }
    return $result;
}

print_r(frequenceOfWords("hola, HOLA, que, tal, tal, tal"));

?>