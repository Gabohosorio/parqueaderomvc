<?php
  require_once 'models/usuario.php';
  class UsuarioController{
    
    public function mostrarTodos(){
      $usuario = new Usuario();
      $datos = $usuario->getAll('usuarios');
      require_once 'views/usuarios/mostrartodos.php';
    }

    public function registro(){
      require_once 'views/usuarios/registro.php';
    }

    public function save(){
      if(isset($_POST)){
        $usuario = new Usuario();
        //verificar que los datos sean válidos
        $usuario->setId($_POST['cedula']);
        $usuario->setNombre($_POST['nombre']);
        $usuario->setEmail($_POST['email']);
        $usuario->setCelular($_POST['celular']);
        $usuario->setDireccion($_POST['direccion']);
        $usuario->setClave($_POST['clave']);
        //Pendiente... verificar claves iguales
        $save = $usuario->save();
        if($save){
          $_SESSION['msgsuccess'] = 'Registro completado con exito!';
          require_once 'views/success.php';  
        }else{
          $_SESSION['msgerror'] = 'Error en el registro de los datos!!';
          require_once 'views/error.php';
        }
      }else{
        $_SESSION['msgerror'] = 'No existen datos de entrada..';
        require_once 'views/error.php';
      }
    }

    public function login(){
      $valido = false;
      if(isset($_POST)){
        $usuario = new Usuario();
        $usuario->setId($_POST['cedula']);
        $usuario->setClave($_POST['password']);
        $datos = $usuario->login();
        if($datos && is_object($datos)){
          $_SESSION['identity'] = $datos;
          if($datos->id_rol_usuario == 1){
            $_SESSION['admin'] = true; 
          }
          $valido = true;
        }else{
          $_SESSION['msgerror'] = 'Datos incorrectos!!';
          require_once 'views/error.php';
        }
      }
      if($valido){
        header("Location:".base_url);
      }
    }

    public function logout(){
      if(isset($_SESSION['identity'])){
        unset($_SESSION['identity']); 
      }
      if(isset($_SESSION['admin'])){
        unset($_SESSION['admin']); 
      }
      header("Location:".base_url);
    }

  }
?>