<?php

  class BaseDatos{

    private $db;

    public function __construct($nombreBD){

      try{

        $db = new PDO("mysql:dbname=$nombreBD;host=localhost", 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->db = $db;

      }catch(Exception $e) {

        die('Error en el archivo: ' . $e->getFile() . '<br>' . 'En la linea: ' . $e->getLine() . '<br>' . 'Mensaje: ' . $e->getMessage());
      }

    }
  }
?>
