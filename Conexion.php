<?php
class Conexion extends PDO{
    protected $dbHost = 'localhost';
    protected $dbUsername = "dony";
    protected $dbPassword = "1234567890";
    protected $dbName = "Sena";

    public function __construct(){
        try{
            parent::__construct("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUsername, $this->dbPassword);
            
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Funciona";
            
        }catch(PDOException $e){
        die("Error al conectar " . $e->getMessage());
        }
    }
}