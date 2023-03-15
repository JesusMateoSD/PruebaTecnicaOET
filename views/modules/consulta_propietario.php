<?php
  date_default_timezone_set('America/Bogota');
  $fechahoy = date('Y-m-d');

  include("header.php");
?>
 
<head>
  <script type="text/javascript" src="views/js/tablaPropietarios.js"></script>
</head>

<script type="text/javascript" src="views/js/mostrarinfoProp.js"></script>
<main class="container ">  
  <div class="p-2 mb-2 bg-primary text-white">Lista de propietarios</div>
  <hr>  
  <body onload="detalleinicio()">
    <div class="container">
      <div class="row">
        </div>
      </div>
      <br>
      <div class="bg-light p-2 mb-2">
        <div id="tablapropietarios" ></div>
      </div>
    </div>
  </div>
</main>