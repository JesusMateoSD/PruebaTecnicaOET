<?php
  if(isset($_POST['reg_cond'])){

    $conductor = new ConductorControlador();
    $conductor->registrarConductorControlador();
  }

  if($_GET['action'] == 'condok'){
    ?>
    <script LANGUAGE="javascript">
       $(document).ready(function() {
         swal({
           title: 'ACME S.A.',
           text: "El Conductor fue grabado correctamente!",
           type: 'success',
           confirmButtonColor: '#3085d6',
           confirmButtonText: 'OK!'
         }).then((result) => {
          
         })
       });
     </script>
    <?php
  }

  include("header.php");

?>
 
<main class="container ">  
  <div class="p-2 mt-5 bg-primary text-white">Registrar conductores</div>
  <hr>  
  <body>
    <div class="container">
      <div class="row">
        <form id="myForm" name="f" method="POST" >
          <div class="form-row">
            <div class="col-md-4 mb-4">
              <input type="text" name="num_cedula" id="num_cedula" class="form-control" placeholder="Numero de cedula" autofocus autocomplete="off" required>
            </div>
            <div class="col-md-4 mb-4">
              <input type="text" name="primer_nombre" id="primer_nombre" class="form-control" placeholder="Primer nombre" autofocus autocomplete="off" required>
            </div>
            <div class="col-md-4 mb-4">
              <input type="text" name="segundo_nombre" id="segundo_nombre" class="form-control" placeholder="Segundo nombre"  autofocus autocomplete="off" required>
            </div>
            <div class="col-md-4 mb-4">
              <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos"   autofocus autocomplete="off" required>
            </div>
            <div class="col-md-8 mb-4">
              <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" autofocus autocomplete="off" required>
            </div>
            <div class="col-md-6 mb-4">
              <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Numero telefonico"  autofocus autocomplete="off" required>
            </div>
            <div class="col-md-6 mb-4">
              <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Ciudad" autofocus autocomplete="off" required>
            </div>
            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary "></div>
            </div>         
          </div>
          <input type="submit" name="reg_cond" id="reg_cond" class="btn btn-success mx-2" value="Registrar conductor">
          </form>
        </div>
      </div>
      <br>
    </div>
  </div>
</main>