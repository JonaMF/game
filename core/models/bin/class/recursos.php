<?php

  class Recursos{

    private $madera;
    private $vino;
    private $marmol;
    private $azufre;

    private $db;

    public function __construct(){

      include 'core/models/config/dbconexion.php';

      $this->db = new BaseDatos();

    }

    public function madera(){

      $a = $this->db->query('SELECT * FROM  RECURSOS');


    }

  }

?>
