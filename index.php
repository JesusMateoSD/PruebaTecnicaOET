<?php
  
  require_once('controllers/EnlacesPaginacionControlador.php');
  require_once('models/EnlacesPaginacionModelo.php');
  require_once('controllers/PropietarioControlador.php');
  require_once('models/PropietarioModelo.php');
  require_once('controllers/VehiculoControlador.php');
  require_once('models/VehiculoModelo.php');
  require_once('controllers/ConductorControlador.php');
  require_once('models/ConductorModelo.php');


  $obj = new EnlacesPaginacionControlador();
  $obj->mostrarPagina();

?>