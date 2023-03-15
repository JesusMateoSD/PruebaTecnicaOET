<?php

class EnlacesPaginacionModelo{
  public function verficarEnlacePagina($enlace){
    $modulo = "views/modules/".$enlace.".php";
    if(!file_exists($modulo)){
      if($enlace == 'vehok'){
        $modulo = 'views/modules/registro_vehiculo.php';
      }

      if($enlace == 'condok'){
        $modulo = 'views/modules/registro_conductor.php';
      }

      if($enlace == 'propok'){
        $modulo = 'views/modules/registro_propietario.php';
      }
    }
    return $modulo;
  }
}

?>