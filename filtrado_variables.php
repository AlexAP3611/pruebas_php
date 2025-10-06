<?php
/*
 filter_var() para validar y sanitizar data -> mixed
 @value: variable que se quiere comprobar
 @filter: tipo de comprobacion
 */

//===================================================================
//SANITIZAR
//===================================================================

//Usando forma obsoleta
$unString = "<h1> Hola mundo </h1>";
$nuevoString = filter_var($unString, FILTER_SANITIZE_STRING);
echo $nuevoString . "\n";

//Forma moderna
echo strip_tags($unString);
echo "\n";
echo "\n";

//===================================================================
//VALIDAR
//===================================================================

/*
VALIDATE devuelve -> 
                    -mixed: El valor validado si es valido
                    -false: Si la validacion falla
*/

var_dump(0 == false);
echo "\n";
echo "\n";

/*
Validar enteros
*/
$int = "0";
var_dump(filter_var($int, FILTER_VALIDATE_INT));

//Forma incorrecta
if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo "El entero $int es valido";
} else {
    echo "El entero $int NO es valido";
}
echo "\n";
echo "\n";

//Forma correcta 1
var_dump(!filter_var(0, FILTER_VALIDATE_INT) === false);
var_dump(!filter_var(0, FILTER_VALIDATE_INT) === false || filter_var(0, FILTER_VALIDATE_INT) === 0);
var_dump(filter_var(0, FILTER_VALIDATE_INT) !== false);

echo "\n";
echo "\n";

$int = "0";
if (filter_var($int, FILTER_VALIDATE_INT) !== false) {
    echo "El entero $int es valido";
} else {
    echo "El entero $int NO es valido";
}
echo "\n";
echo "\n";

//===================================================================
//Validar una direccion IP
//===================================================================

$ip = "127.0.0.1";

if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
    echo "$ip es una IP valida";
} else {
    echo "$ip NO es una IP valida";
}

echo "\n";
echo "\n";

//===================================================================
//Sanitizar y validar una direccion email
//===================================================================
$casos = [
    "usuario <script>alert('hola')</script>@dominio.com",
    "john@doe@company.com",
    "maria-con espacios@empresa.com",
    "pedro\nlinea@email.com"
];

function sanitizar_email(array $listaEmails)
{
    foreach ($listaEmails as $email) {
        $sanitizado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $esValido = filter_var($email, FILTER_SANITIZE_EMAIL) !== false;
        echo "Original: $email \n";
        echo "Sanitizado: $sanitizado \n";
        echo "Es valido: " . ($esValido ? "Si" : "No") . "\n";
    }
}

echo sanitizar_email($casos);

echo "\n";
echo "\n";

//===================================================================
//Ejercicios
//===================================================================

/*
Ejerccio 1
Crea un script que reciba varios textos con etiquetas HTML y codigo potencialmente malicioso,
sanitiza los textos eliminando las etiquetas y muestra el texto original y el resultado
*/
$script = [
    "<h1>Patata</h1> frita",
    "<script>alert('hola')</script>",
    "<img src='imagen.jpg' onerror='alert(\"hackeado\")'>"
];

function sanitizarTextos(array $textos)
{
    echo "Ejercicio 1";
    echo "\n";
    echo "-----------------------";
    echo "\n";
    foreach ($textos as $texto) {
        echo "Forma original " . $texto . "\n";
        echo "Forma validada " . strip_tags($texto) . "\n";
        echo "-----------------------" . "\n";
    }
}

echo sanitizarTextos($script);

echo "\n";
echo "\n";

/*
Ejercicio 2
Pide al usuario que introduzca un numero (puede venir como string) y valida si es un entero valido,
comprueba los siguientes valores $valores = ["123", "0", "abc", -5];
*/
$valores = ["123", "0", "abc", -5];

function validarEnteros(array $numeros)
{
    echo "Ejercicio 2";
    echo "\n";
    echo "-----------------------";
    echo "\n";
    foreach ($numeros as $numero) {
        if (filter_var($numero, FILTER_VALIDATE_INT) !== false) {
            echo "El numero $numero es valido \n";
        } else {
            echo "El numero $numero NO es valido \n";
        }
        echo "-----------------------" . "\n";
    }
}

echo validarEnteros($valores);

echo "\n";
echo "\n";

/*
Ejercicio 3
Crea una lista de IPs y valida cuales son correctas y cuales no, incluye casos como:
192.168.1.1, 256.100.50.25, 127.0.0.1, ::1(IPv6 valida), 127.0.0.999
*/

$ips = [
    "192.168.1.1",
    "256.100.50.25",
    "127.0.0.1",
    "::1",
    "127.0.0.999"
];

function validarDireccionesIp(array $direccionesIp)
{
    echo "Ejercicio 3";
    echo "\n";
    echo "-----------------------";
    echo "\n";
    foreach ($direccionesIp as $ip) {
        if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
            echo "La direccion IP $ip es valida" . "\n";
        } else {
            echo "La direccion IP $ip NO es valida" . "\n";
        }
        echo "-----------------------" . "\n";
    }
}

validarDireccionesIp($ips);

echo "\n";
echo "\n";

/*
Ejercicio 4
Dado un array de emails con errores comunes, sanitizalos y muestra el valor original y el sanitizado
*/
$emails = [
    "usuario<script>@gmail.com",
    "correo@@empresa.com",
    "nombre con espacios@correo.com",
    "normal@email.com"
];

function validarEmails(array $listaEmails)
{
    echo "Ejercicio 4";
    echo "\n";
    echo "-----------------------";
    echo "\n";
    foreach ($listaEmails as $email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            echo "El email $email es válido\n";
        } else {
            echo "El email $email NO es valido\n";
        }
        echo "-----------------------" . "\n";
    }
}

validarEmails($emails);

echo "\n";
echo "\n";

/*
Ejercicio 5
Crea un array con URLs sospechosas y haz un metodo para sanitizarlas y marcar las que son correctas
*/

$URLs = [
    "http://mi sitio.com/test page",
    "https://ejemplo.com/\nmal",
    "https://google.com"
];

function validarURLs(array $listaURLs)
{
    echo "Ejercicio 5";
    echo "\n";
    echo "-----------------------";
    echo "\n";
    foreach ($listaURLs as $URL) {
        if (filter_var($URL, FILTER_VALIDATE_URL) !== false) {
            echo "La URL $URL es valida" . "\n";
        } else {
            echo "La URL $URL NO es valida" . "\n";
        }
        echo "-----------------------" . "\n";
    }
}

validarURLs($URLs);

echo "\n";
echo "\n";

/* Ejercicio 6
Solicita al usuario un numero del 1 al 10 y comprueba si estan dentro del rango
*/

$listaNumeros = [
    0,
    5,
    10,
    11,
    -3
];

function comprobarRangoNumeros(array $numeros)
{
    echo "Ejercicio 6";
    echo "\n";
    echo "-----------------------";
    echo "\n";
    foreach ($numeros as $numero) {
        if ($numero > 0 && $numero < 11) {
            echo "El numero $numero está dentro del rango" . "\n";
        } else {
            echo "El numero $numero NO está dentro del rango" . "\n";
        }
        echo "-----------------------" . "\n";
    }
}

comprobarRangoNumeros($listaNumeros);
