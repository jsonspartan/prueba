<?php
abstract class Coche{
    public $nombre;
    
    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    abstract public function imprimir_nombre() : string;
}

interface Operacion_coche{
    public function arrancar();
}

trait acciones_luces{
    public function encender_luces_interiores(){
        echo "Encendiendo luces interiores";
    }
    public function encender_luces_estacionamiento(){
        echo "Encendiendo luces de estacionamiento";
    }
}

class Toyota extends Coche implements Operacion_coche{
    use acciones_luces;
    public function imprimir_nombre() : string{
        return "Coche: $this->nombre";
    }    
    public function arrancar()
    {
        echo "$this->nombre arrancando";
    }
}

$auto = new Toyota("Toyota Hilux");
echo $auto->imprimir_nombre();
echo "<br>";
echo $auto->arrancar();
echo "<br>";
$auto->encender_luces_interiores();

?>