<?php
  error_reporting(E_ERROR | E_PARSE);
  class PropietarioControlador{
  	public function registrarPropietarioControlador(){
      if(isset($_POST['reg_pro'])) {
        $datosPropietario = ['num_cedula' => $_POST['num_cedula'],
        'primer_nombre' => $_POST['primer_nombre'],
        'segundo_nombre' => $_POST['segundo_nombre'],
        'apellidos' => $_POST['apellidos'],
        'direccion' => $_POST['direccion'],
        'telefono' => $_POST['telefono'],
        'ciudad' => $_POST['ciudad']];

        $propietario = new PropietarioModelo();
        $respuesta = $propietario->registrarPropietarioModelo($datosPropietario);
        
        if($respuesta == 'success'){
          header('location:index.php?action=propok');
        } else{
          header('location:index.php?action=inicio');
        }
      }            
    }

  	public function tablaPropietariosControlador(){
      $roles = new PropietarioModelo();
      $respuesta = $roles->tablaPropietariosModelo();
      return $respuesta;
    }
  }
?>