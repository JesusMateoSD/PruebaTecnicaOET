<?php
  if(isset($_POST['reg_vh'])){
    $vehiculo = new VehiculoControlador();
    $vehiculo->registrarVehiculoControlador();
  }

  if($_GET['action'] == 'vehok'){
    ?>
    <script LANGUAGE="javascript">
       $(document).ready(function() {
         swal({
           title: 'ACME S.A.',
           text: "El Vehiculo Fue Grabado Correctamente!",
           type: 'success',
           confirmButtonColor: '#3085d6',
           confirmButtonText: 'OK!'
         }).then((result) => {
          
         })
       });
     </script>
    <?php
  }

  $conductor = new ConductorControlador();
  $conductores = $conductor->tablaConductoresControlador();

  $propietario = new PropietarioControlador();
  $propietarios = $propietario->tablaPropietariosControlador();

  include("header.php");

?>

<main class="container ">  
  <div class="p-2 mt-5 bg-primary text-white">Registrar vehiculo</div>
  <hr>  
  <body>
    <div class="container">
      <div class="row">
        <form id="myForm" name="f" method="POST" >
          <div class="form-row">
            <div class="col-md-3 mb-4">
              <input type="text" name="placa" id="placa" class="form-control" placeholder="Placa del vehiculo"  onkeyup="javascript:this.value=this.value.toUpperCase();" autofocus autocomplete="off" required>
            </div>
            <div class="col-md-3 mb-4">
              <input type="text" name="color" id="color" class="form-control" placeholder="Color del vehiculo"  autofocus autocomplete="off" required>
            </div>
            <div class="col-md-3 mb-4">
              <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca del vehiculo"  autofocus autocomplete="off" required>
            </div>
            <div class="col-md-3 mb-4">
              <select class="custom-select mr-sm-2" name="tipo_vehiculo" id="tipo_vehiculo" >
                <option selected>Tipo de Vehiculo:</option>
                <option value="Particular">Vehiculo particular</option>
                <option Value="Publico">Vehiculo publico</option>
              </select>
            </div>
            <div class="col-md-12 mb-4">
              <select class="custom-select mr-sm-2" name="u_conductor" id="u_conductor" >
                <option value="0">Seleccione conductor:</option>
                <?php
                  foreach($conductores as $valores){
                    echo '<option value="'.$valores['id_usuario'].'">'.$valores['primer_nombre']. ' ' . $valores['segundo_nombre']. ' ' .$valores['apellidos']. ' - '. $valores['num_cedula'].'</option>';
                  }
                ?>
              </select>
            </div>
            <div class="col-md-12 mb-4">
              <select class="custom-select mr-sm-2"   name="u_propietario" id="u_propietario" >
                <option value="0">Seleccione propietario:</option>
                <?php
                  foreach($propietarios as $valores){
                    echo '<option value="'.$valores['id_usuario'].'">'.$valores['primer_nombre']. ' ' . $valores['segundo_nombre']. ' ' .$valores['apellidos']. ' - '. $valores['num_cedula'].'</option>';
                  }
                ?>
              </select>
            </div>
            <div class="col-md-12 mb-2">
              <div class="p-2 mb-2 bg-primary"></div>
            </div>          
          </div>
          <input type="submit" name="reg_vh" id="reg_vh" class="btn btn-success mx-2" value="Registrar vehiculo">
          </form>
        </div>
      </div>
      <br>
    </div>
  </div>
</main>