<?php
  date_default_timezone_set('America/Bogota');
  $fechahoy = date('Y-m-d');

  include("header.php");
?>
 
<head>
  <script type="text/javascript" src="views/js/tablaConductores.js"></script>
</head>

<script type="text/javascript" src="views/js/mostrarinfoCond.js"></script>
<main class="container ">  
  <div class="p-2 mb-2 bg-primary text-white">Lista de conductores</div>
  <hr>  
  <body onload="detalleinicio()">
    <div class="container">
      <div class="row">
        </div>
      </div>
      <br>
      <div class="bg-light p-2 mb-2">
        <div id="tablaconductores" ></div>
      </div>
    </div>
  </div>
</main>