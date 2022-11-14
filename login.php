<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/logo-removebg-preview (5).png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php" style="display: flex; align-items: center;"><img
          src="img/logo-removebg-preview (5).png" alt="Logo" width="50" height="44"
          class="d-inline-block align-text-top"> Wolfars</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Promociones.php">Promociones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Sucursales.php">Sucursales</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Tienda.php">Clasicos</a></li>
              <li><a class="dropdown-item" href="#">Deportivos</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- particles.js container -->
  <div id="particles-js">
    <div class="login-box">
      <h2>Ingresar</h2>
      <form>
        <div class="user-box">
          <input type="text" name="" required="">
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="" required="">
          <label>Contaseña</label>
        </div>
        <a href="#">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Ingresar
        </a>
        <a href="registro.php" style="color: var(--Claro); font-size: 10px;">
          Registrarse
        </a>
      </form>
    </div>
  </div>

  <!-- stats - count particles -->
  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
  <script src="js/particulas.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <div class="espaciado"></div>
<?php require('./layout/footer.php') ?>