<?php
//Gilberto Sebastian Garcia Beltran
namespace CLASEPDO\models;

spl_autoload_register(function ($class) {
    $prefix = "CLASEPDO\\";
    $base_dir = __DIR__ . "/../";

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace("\\", "/", $relative_class) . ".php";

    if (file_exists($file)) require $file;
});

class Producto{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $existencia;

    public function __construct($id = Null, $nombre = "",
    $descripcion = "",$precio = 0.00, $existencia = 0){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->existencia = $existencia;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function getPrecio(){
        return $this->precio;
    }

    public function setExistencia($existencia){
        $this->existencia = $existencia;
    }
    public function getExistencia(){
        return $this->existencia;
    }
}

?>