<?php 
class Conversacion{
    const SALUDO = "Buenas noches";
    public static $ciudad = "El Alto";

    public static function preguntar_nombre(){
        echo "<br>¿Cuál es tu nombre?";
    }

    public  static function responder_nombre($nombre){
        echo "<br>Mi nombre es: ".$nombre;
    }
}

echo Conversacion::SALUDO;
Conversacion::preguntar_nombre();
Conversacion::responder_nombre("Ramiro");
echo "<br>Ambas personas estan en: ".Conversacion::$ciudad;

?>