<head>
  <script type="text/javascript" src="views/js/tablaVehiculos.js"></script>
</head>
<table id="tablevehiculos" class="table table-hover">
  <thead>
    <tr class="table-primary">
      <th>Placa</th>
      <th>Color</th>
      <th>Marca</th>
      <th>Tipo de Vehiculo</th>
      <th>Conductor</th>
      <th>Propietario</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require_once('../../controllers/VehiculoControlador.php');
    require_once('../../models/VehiculoModelo.php');

    $vehiculo = new VehiculoControlador();
    $vehiculos = $vehiculo->tablaVehiculosControlador();
      foreach($vehiculos as $row){?>
      <tr>
        <td><?php echo $row['placa']; ?></td>
        <td><?php echo $row['color']; ?></td>
        <td><?php echo $row['marca']; ?></td>
        <td><?php echo $row['tipo_vehiculo']; ?></td>
        <td><?php echo $row['conductores']; ?></td>
        <td><?php echo $row['propietarios']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>       