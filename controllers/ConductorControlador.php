<?php
  error_reporting(E_ERROR | E_PARSE);
  class ConductorControlador{
    public function registrarConductorControlador(){
      if(isset($_POST['reg_cond'])) {
        $datosConductor = ['num_cedula' => $_POST['num_cedula'],
        'primer_nombre' => $_POST['primer_nombre'],
        'segundo_nombre' => $_POST['segundo_nombre'],
        'apellidos' => $_POST['apellidos'],
        'direccion' => $_POST['direccion'],
        'telefono' => $_POST['telefono'],
        'ciudad' => $_POST['ciudad']];

        $conductor = new ConductorModelo();
        $respuesta = $conductor->registrarConductorModelo($datosConductor);
        
        if($respuesta == 'success'){
          header('location:index.php?action=condok');
        } else{
          header('location:index.php?action=inicio');
        }
      }            
    }

    public function tablaConductoresControlador(){
      $conductor = new ConductorModelo();
      $respuesta = $conductor->tablaConductoresModelo();
      return $respuesta;
    }

    public function tablaUsuariosAdmControlador(){
      $usuario = new UsuarioModelo();
      $respuesta = $usuario->tablaUsuariosAdmModelo();
      return $respuesta;
    }
  }
?>

