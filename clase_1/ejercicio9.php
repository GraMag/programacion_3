    <?php

    /*Aplicación No 9 (Arrays asociativos)
    Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
    contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
    lapiceras.*/

    $lapicera1 = array("color" => "Rojo", "marca" => "Bic", "trazo" => "Fino", "precio" => 30);
    $lapicera2 = array("color" => "Verde", "marca" => "FaberCastel", "trazo" => "Grueso", "precio" => 50);
    $lapicera3 = array("color" => "Azul", "marca" => "Signo", "trazo" => "SemiFino", "precio" => 45);

    $lapiceras = array($lapicera1, $lapicera2, $lapicera3);

    foreach ($lapiceras as $lapicera) {
        echo("Color: " . $lapicera["color"] . " - Marca: " . $lapicera["marca"] . " - Trazo: " . $lapicera["trazo"] . " - Precio: $" . $lapicera["precio"] . "<br>");
    }
