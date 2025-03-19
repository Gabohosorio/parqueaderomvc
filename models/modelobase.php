<?php
  require_once 'config/conexion.php';
  class ModeloBase{
    public $db;

    public function __construct(){ //2
      $this->db = Connection::connect();
    }

    public function getAll($table){ //3
      $result = $this->db->query("Select * From $table");
      return $result;
    }

  }
?>