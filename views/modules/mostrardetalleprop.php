<head>
  <script type="text/javascript" src="views/js/tablaPropietarios.js"></script>
</head>
<table id="tablepropietarios" class="table table-hover">
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
    require_once('../../controllers/PropietarioControlador.php');
    require_once('../../models/PropietarioModelo.php');

    $propietario = new PropietarioControlador();
    $propietarios = $propietario->tablaPropietariosControlador();
      foreach($propietarios as $row){?>
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