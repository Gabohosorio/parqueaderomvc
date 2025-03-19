<?php
  require_once 'modelobase.php';
  class Marca extends ModeloBase{
    private $id;
    private $nombre;

    public function __construct(){
      parent::__construct();
    }

    public function save(){
      echo 'función para guardar datos en la  base de datos';
    }

    function getId() {
      return $this->id;
    }

    function getNombre() {
      return $this->nombre;
    }

    function setId($id) {
      $this->id = $id;
    }

    function setNombre($nombre) {
      $this->nombre = $nombre;
    }

  }
?>