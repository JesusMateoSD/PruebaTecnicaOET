<?php
  error_reporting(E_ERROR | E_PARSE);
  class VehiculoControlador{
  	public function registrarVehiculoControlador(){
      if(isset($_POST['reg_vh'])) {
        $datosVehiculo = ['placa' => $_POST['placa'],
        'color' => $_POST['color'],
        'marca' => $_POST['marca'],
        'tipo_vehiculo' => $_POST['tipo_vehiculo'],
        'conductor' => $_POST['u_conductor'],
      	'propietario' => $_POST['u_propietario']];

        $vehiculo = new VehiculoModelo();
        $respuesta = $vehiculo->registrarVehiculoModelo($datosVehiculo);
        
        if($respuesta == 'success'){
          header('location:index.php?action=vehok');
        } else{
          header('location:index.php?action=usuario');
        }
      }            
    }

    public function tablaVehiculosControlador(){
      $usuario = new VehiculoModelo();
      $respuesta = $usuario->tablaVehiculosModelo();
      return $respuesta;
    }
  }
?>