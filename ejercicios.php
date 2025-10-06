<?php
//Sacar mensaje por pantalla que diga buenos dias o buenas tardes o buenas noches en funcion de la hora

//if (date("H") > 7 && date("H") < 13){
//    echo "Buenos dias";
//} elseif (date("H") < 21){
//    echo "Buenas tardes";
//} else{
//    echo "Buenas noches";
//}

//Obtener un numero aleatorio del 1 al 7, y en funcion de lo que salga, que muestre por pantalla el dia de la semana, usando switch
$numero = rand(1, 7);
echo "El numero aleatorio es " . $numero . " por lo tanto el dia es ";
switch($numero){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
}



?>