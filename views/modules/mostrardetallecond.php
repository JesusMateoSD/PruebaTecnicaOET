<head>
  <script type="text/javascript" src="views/js/tablaConductores.js"></script>
</head>
<table id="tableconductores" class="table table-hover">
  <thead>
    <tr class="table-primary">
      <th>N# Cedula</th>
      <th>Primer Nombre</th>
      <th>Segundo Nombre</th>
      <th>Apellidos</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Ciudad</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require_once('../../controllers/ConductorControlador.php');
    require_once('../../models/ConductorModelo.php');

    $conductor = new ConductorControlador();
    $conductores = $conductor->tablaConductoresControlador();
      foreach($conductores as $row){?>
      <tr>
        <td><?php echo $row['num_cedula']; ?></td>
        <td><?php echo $row['primer_nombre']; ?></td>
        <td><?php echo $row['segundo_nombre']; ?></td>
        <td><?php echo $row['apellidos']; ?></td>
        <td><?php echo $row['direccion']; ?></td>
        <td><?php echo $row['telefono']; ?></td>
        <td><?php echo $row['ciudad']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>       