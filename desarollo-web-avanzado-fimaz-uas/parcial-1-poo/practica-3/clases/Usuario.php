<?php
class Usuario {
    protected $nombre;
    protected $correo;

    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        if (!$this->validarCorreo($correo)) {
            throw new Exception("Correo invalido: $correo");
        }
        $this->correo = $correo;
    }

    private function validarCorreo($correo) {
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public  function getRol() {
        return "Usuario";
    }
}
?>