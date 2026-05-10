<?php
//Gilberto Sebastian Garcia Beltran
namespace CLASEPDO\config;

use PDO;
use PDOException;

spl_autoload_register(function ($class) {
    $prefix = "CLASEPDO\\";
    $base_dir = __DIR__ . "/../";

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace("\\", "/", $relative_class) . ".php";

    if (file_exists($file)) require $file;
});

class Database{
    private $host = "localhost";
    private $dbname = "pdo2";
    private $username = "root";
    private $password = "";
    private $connection;

    public function __construct(){
        try{
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $this->connection = new PDO($dsn,$this->username,$this->password);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection(){
        return $this->connection;
    }
}