<?php
  require_once 'modelobase.php';
  class Usuario extends ModeloBase{
    private $id;
    private $nombre;
    private $email;
    private $celular;
    private $direccion;
    private $clave;
    private $rol;

    public function __construct(){
      parent::__construct();
    }

    function getId() {
      return $this->id;
    }

    function getNombre() {
      return $this->nombre;
    }

    function getEmail() {
      return $this->email;
    }

    function getCelular() {
      return $this->celular;
    }

    function getDireccion() {
      return $this->direccion;
    }

    function getClave() {
      return password_hash($this->clave, PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function getRol() {
      return $this->rol;
    }

    function setId($id) {
      $this->id = $this->db->real_escape_string($id);
    }

    function setNombre($nombre) {
      $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setEmail($email) {
      $this->email = $this->db->real_escape_string($email);
    }

    function setCelular($celular) {
      $this->celular = $this->db->real_escape_string($celular);
    }

    function setDireccion($direccion) {
      $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setClave($clave) {
      $this->clave = $clave;
    }

    function setRol($rol) {
      $this->rol = $rol;
    }

    public function save(){
      $result = false;
      try{
        $sql = "Insert Into usuarios Values('{$this->getId()}', '{$this->getNombre()}', ";
        $sql .= "'{$this->getEmail()}', '{$this->getCelular()}', ";
        $sql .= "'{$this->getDireccion()}', '{$this->getClave()}', 2)";
        $save = $this->db->query($sql);
        if($save){
          $result = true;
        }
        return $result;
      }catch(Exception $err){
        return $result;
      }
    }

    public function login(){
      $result = false;
      $id = $this->id;
      $clave = $this->clave;
      $sql = "Select * From usuarios Where id_usuario = '$id'";
      $login = $this->db->query($sql);
      if($login && $login->num_rows == 1){
        $usuario = $login->fetch_object();
        $verify = password_verify($clave, $usuario->clave_usuario);
        if($verify){
          $result = $usuario;
        }
      }
      return $result;
    }
  }
?>