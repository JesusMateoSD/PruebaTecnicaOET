<nav class="navbar navbar-expand-lg bg-light mb-3" id="nav">
  <div class="container-fluid my-3">
    <a class="navbar-brand" href="index.php?action=inicio">Transportes ACME S.A.</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-1">☰</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-3" aria-current="page" href="index.php?action=inicio">Pagina principal</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Vehiculos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?action=registro_vehiculo">Registro de Vehiculos</a></li>
            <li><a class="dropdown-item" href="index.php?action=consulta_vehiculo">Consulta de Vehiculos</a></li>
            <li><a class="dropdown-item" href="index.php?action=reportes_vehiculos" target="_blank">Informe de Vehiculos</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Conductores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?action=registro_conductor" >Registro de Conductores</a></li>
            <li><a class="dropdown-item" href="index.php?action=consulta_conductor">Consulta de Conductores</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Propietarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?action=registro_propietario" >Registro de Propietarios</a></li>
            <li><a class="dropdown-item" href="index.php?action=consulta_propietario">Consulta de Propietarios</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>


