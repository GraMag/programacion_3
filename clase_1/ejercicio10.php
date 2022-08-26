<?php

/*Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.*/ 


$lapicera1 = array("color" => "Rojo", "marca" => "Bic", "trazo" => "Fino", "precio" => 30);
$lapicera2 = array("color" => "Verde", "marca" => "FaberCastel", "trazo" => "Grueso", "precio" => 50);
$lapicera3 = array("color" => "Azul", "marca" => "Signo", "trazo" => "SemiFino", "precio" => 45);

$lapiceras = array($lapicera1, $lapicera2, $lapicera3);

echo("<b><u>Array asociativo</u></b><br>");
foreach ($lapiceras as $lapicera) {
    echo("<u>Color:</u> " . $lapicera["color"] . " - <u>Marca:</u> " . $lapicera["marca"] . " - <u>Trazo:</u> " . $lapicera["trazo"] . " - <u>Precio:</u> $" . $lapicera["precio"] . "<br>");
}

$lapicera1 = array("Rojo", "Bic", "Fino", 30);
$lapicera2 = array("Verde", "FaberCastel", "Grueso", 50);
$lapicera3 = array("Azul", "Signo", "SemiFino", 45);

$lapiceras = array($lapicera1, $lapicera2, $lapicera3);

echo("<br><b><u>Array indexado</u></b><br>");
foreach ($lapiceras as $lapicera) {
    echo("<u>Color:</u> " . $lapicera[0] . " - <u>Marca:</u> " . $lapicera[1] . " - <u>Trazo:</u> " . $lapicera[2] . " - <u>Precio:</u> $" . $lapicera[3] . "<br>");
}
