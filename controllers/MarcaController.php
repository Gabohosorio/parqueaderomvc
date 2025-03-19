<?php
  require_once 'models/marca.php';
  class MarcaController{
    
    public function index(){
      $marca = new Marca();
      $datos = $marca->getAll('marcas');
      require_once 'views/marcas/index.php';
    }

    public function crear(){
      require_once 'views/marcas/crear.php';
    }

    public function save(){
      
    }
  }
?>