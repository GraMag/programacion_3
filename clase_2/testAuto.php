<?php
/*En testAuto.php:

● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
5)*/
include_once "auto.php";

$auto1 = new Auto("Ford", "Gris");
$auto2 = new Auto("Ford", "Negro");
$auto3 = new Auto("Volvo", "Blanco", 1000000);
$auto4 = new Auto("Volvo", "Blanco", 1500000);
$auto5 = new Auto("Ferrari", "Rojo", 100000000000, date("14/11/2022"));

$auto3 -> AgregarImpuestos(1500);
$auto4 -> AgregarImpuestos(1500);
$auto5 -> AgregarImpuestos(1500);

echo(Auto::Add($auto1, $auto2));

echo("<br><br>El auto 1 y el auto 2 son ");
if($auto1 -> Equals($auto2)){
    echo("iguales");
}else{
    echo("distintos");
}

echo("<br>El auto 1 y el auto 5 son ");
if($auto1 -> Equals($auto5)){
    echo("iguales");
}else{
    echo("distintos");
}

echo("<br><br>");
Auto::MostrarAuto($auto1);
echo("<br><br>");
Auto::MostrarAuto($auto3);
echo("<br><br>");
Auto::MostrarAuto($auto5);