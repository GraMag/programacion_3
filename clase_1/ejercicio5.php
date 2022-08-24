<?php
/*Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.*/ 

for ($num =20; $num <= 60 ; $num++) { 
    
    if($num == 20){
        echo("veinte<br>");
        continue;
    }
    switch (floor($num/10)) {
        case '2':
            echo("veinti");
            break;
        case '3':
            echo("treinta");
            break;
        case '4':
            echo("cuarenta");
            break;
        case '5':
            echo("cincuenta");
            break;
        default:
            echo("sesenta");
            break;
    }
    switch ($num % 10) {
        case '1':
            echo(" y uno<br>");
            break;
        case '2':
            echo(" y dos<br>");
            break;
        case '3':
            echo(" y tres<br>");
            break;
        case '4':
            echo(" y cuatro<br>");
            break;
        case '5':
            echo(" y cinco<br>");
            break;
        case '6':
            echo(" y seis<br>");
            break;
        case '7':
            echo(" y siete<br>");
            break;
        case '8':
            echo(" y ocho<br>");
            break;
        case '9':
            echo(" y nueve<br>");
            break;
        default:
            echo("<br>");
    }
}