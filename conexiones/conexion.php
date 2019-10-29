<?php
  
   class Conexion extends PDO {

    private $tipo_de_base = 'mysql';
    private $host = "localhost";
    private $nombre_de_base = "cuponera";
    private $usuario = "root";
    private $contrasena = "";
    public $estado = '';

    public function __construct() {
        //Sobreescribo el método constructor de la clase PDO.
        try {
            parent::__construct($this->tipo_de_base . ':host=' . $this->host . ';dbname=' . $this->nombre_de_base, $this->usuario, $this->contrasena, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
        } catch (PDOException $e) {
            echo json_encode('Ha surgido un error y no se puede conectar al sistema. Inténtalo mas tarde.');
            $estado = False;
            exit;
        }
    }

}
    
 
   
  
?>