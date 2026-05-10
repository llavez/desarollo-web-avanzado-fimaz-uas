<?php
//Gilberto Sebastian Garcia Beltran
class DataBase {
    private $host = "localhost";
    private $db = "practica3";
    private $user = "root";
    private $password = "";

    public function __construct()
    {

    }

    public function connect(){
        try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db,$this->user,$this->password);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>
