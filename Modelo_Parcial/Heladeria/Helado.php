<?php

class Helado{
    private $_id;
    private $_sabor;
    private $_precioBruto;
    private $_tipo;
    private $_cantidad;
    private $_precioFinal;
   
    private static autoincremento(){

    }


    public __construct($sabor, $precioBruto, $tipo, $cantidad){
        $this->$_id          = autoincremento();
        setSabor($sabor);
        setPrecioBruto($precioBruto);
        setTipo($tipo);
        setCantidad($cantidad);
        $this->$_precioFinal = calcularPrecioFinal();
    }

    public setSabor($sabor){
       if (isset($sabor)) { $this->$_sabor = $sabor; }
    }

    public getSabor() {
        return $this->_sabor;
    }
    public setPrecioBruto($precio){
        if(isset($precio) && is_numeric($precio){ $this->$_precioBruto = $precio; }
    }

    public getPrecioBruto(){
        return $this->_precioBruto
    }
    public setTipo($tipo){
        if(isset($tipo)) { $this->$_tipo = $tipo; }
    }

    public getTipo(){
        return $this->_tipo;
    }
    public setCantidad($cantidad){
        if(isset($cantidad) && is_numeric($cantidad){ $this->$_cantidad = $cantidad; }
    }

    public getCantidad(){
        return $this->_cantidad;
    }

    public getPrecioFinal(){
        return $this->_precioFinal;
    }

    private function calcularPrecioFinal(){
        return $_precioBruto * 1.21;
    }

    public consultarSaboryTipo($heladito){
        return (isset($heladito) && is_a($heladito, "Helado") && $heladito.getSabor() == $this.getSabor() && $heladito.getTipo() == $this.getTipo());
    }

    
}