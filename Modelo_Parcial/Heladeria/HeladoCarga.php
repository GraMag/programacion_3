<?php

//Por GET se ingresa el Sabor, PrecioBruto, Tipo (agua/crema), cantidad(unidades de palitos).
//El objeto helado tiene funcion que guarda el precio mas iva en el atributo precioFinal.
//Se guardan los datos en helados.txt tomando id autoincremental 
//Si el sabor y tipo ya existe, se actualiza el precio y se suma al stock
//Validar valores validos
require_once "Helado.php"

if(isset($_GET['Sabor']) && isset($_GET['PrecioBruto']) && isset($_GET['Tipo']) && isset($_GET['Cantidad'])){
    $pSabor = $_GET['Sabor'];
    $pPrecio = floatval($_GET['PrecioBruto']);
    $pTipo = $_GET['Tipo'];
    $pCantidad = intval($_GET['Cantidad']);

    //--- Creates a new instance of the Object. ---//
    $myNewObject = new Helado($pSabor, $pTipo, $pPrecio, $pCantidad);
    echo '<h3>Producto a Buscar:</h3>'.'<br>';
    Helado::printSingleProductAsTable($myNewObject);

    //--- Adds or update the new product to the array. ---//
    echo Helado::UpdateFile($myNewObject, "add");
    
}else{
    echo 'Falta al menos un dato';
}

