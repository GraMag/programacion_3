<?php
/*Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.*/ 

$total = 0;
$numeros = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));
var_dump($numeros);

foreach($numeros as $numero)
{ $total += $numero; }

if(($total / sizeof($numeros)) > 6){
    echo("El promedio es mayor que 6");
} elseif ($total / sizeof($numeros) == 6) {
    echo("El promedio es igual a 6");
} else {
    echo("El promedio es menor que 6");
}