<?php
/*Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.*/ 

function InvertirPalabra($palabra){
    $len = count($palabra)-1;
    $palabraInvertida = "";
    for ($i=$len; $i > -1; $i--) { 
        $palabraInvertida .= $palabra[$i];
    }
    return $palabraInvertida;
}

$palabra = (InvertirPalabra(array("h", "o", "l", "a")));
echo($palabra);