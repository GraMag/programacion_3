<?php

require_once './clases/resultado.php';

class fileManager {

    public $_filename;

    public function __construct($name) {
        $this->filename = $name;
    }

   public static function leerJson($filename){

       try {
            $archivo = fopen($filename, "r");
            $fread = fread($archivo, filesize($filename) );
            $arrayJson = json_decode($fread);
        } catch (\Throwable $th) {
            echo "EL ARCHIVO NO EXISTE";
        } finally {
            $archivo = fclose($archivo);
            return $arrayJson;
        }
   }

   public static function guardarJson($filename, $objeto){
       $arrayJson = fileManager::leerJson($filename);
        
       if(!is_null($arrayJson)){
        
            array_push($arrayJson, $objeto);
            $archivo = fopen($filename, "w");

            if($archivo){
                $fwrite = fwrite($archivo, json_encode($arrayJson,JSON_PRETTY_PRINT));

                fclose($archivo);
                return true;
            }
       }

       return false;
   }

    public static function mostrarResultado($estado, $msg){

        if($msg == []){
            $msg = "AUN NO SE DIO DE ALTA NINGUNA ENTIDAD DE LA QUE INTENTA MOSTRAR";
        }
        $respuesta = new Resultado($estado, $msg);

        echo json_encode($respuesta);
    }
}