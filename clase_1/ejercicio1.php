<?php 
# Magali Gracia
/* Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron. */

$suma = 0;
$hasta = 1000;
for($i = 1; $i <= $hasta; $i++){
    $suma += $i;
    echo($suma . "<br>");
}

echo("<br>Se sumaron " . $hasta . " numeros");

?>