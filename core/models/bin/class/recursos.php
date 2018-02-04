<?php

  class Recursos{

    private $madera;
    private $vino;
    private $marmol;
    private $azufre;

    private $db;

    public function __construct($nombreBD){

      include 'core/models/config/dbconexion.php';

      $this->db = new BaseDatos($nombreBD);

    }

    public function madera(){



    }

  }

?>
