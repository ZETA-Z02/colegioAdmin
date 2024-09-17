<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Katari Price</title>
  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo constant('URL') . 'public/img/favicon.ico' ?>">
  <!-- FOUNDATION CSS-PRINCIPAL Y NECESARIO -->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/foundation/css/foundation.css' ?>">
  <!-- FOUNDATION FLOAT -->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/foundation/css/foundation-float.css' ?>">
  <!-- Foundation prototipe-algunas interesantes opciones a utilizar-->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/foundation/css/foundation-prototype.css' ?>">
  <!-- ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- CSS->SIDEBAR -->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/main.css' ?>">

  <!-- JQUERY-->
  <script src="<?php echo constant('URL') . 'public/foundation/js/jquery.js' ?>"></script>
</head>

<body>
  <div class="off-canvas-wrapper">
    <div class="off-canvas position-left reveal-for-large sidebar-z" id="offCanvas" data-off-canvas>
      <div class="grid-container nav-z">
        <div class="grid-x align-center margin-top-1">
          <img class="shadow" src="<?php echo constant('URL') . '#' ?>" alt="katari" width="60%">
        </div>
        <hr>
        <div class="grid-x">
          <div class="cell">
            <ul class="vertical menu">
              <li>
                <a href="<?php echo constant('URL') ?>dashboard">
                  <i class="fas fa-house"></i>
                  <span class="nav-item">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="<?php echo constant('URL') ?>cursos">
                  <i class="fas fa-book"></i>
                  <span class="nav-item">Cursos</span>
                </a>
              </li>
              <li>
                <a href="<?php echo constant('URL') ?>#">
                  <i class="fas fa-people-line"></i>
                  <span class="nav-item">Estudiantes</span>
                </a>
              </li>
              <li>
                <a href="<?php echo constant('URL') ?>#">
                  <i class="fas fa-users-cog"></i>
                  <span class="nav-item">Profesores</span>
                </a>
              </li>
              <li>
                <a href="<?php echo constant('URL') ?>#">
                  <i class="fas fa-list"></i>
                  <span class="nav-item">Horarios</span>
                </a>
              </li>
              <li>
                <a href="<?php echo constant('URL') ?>#">
                  <i class="fas fa-gears"></i>
                  <span class="nav-item">Configuracion</span>
                </a>
              </li>
              <li>
                <a href="<?php echo constant('URL') ?>#">
                  <i class="fas fa-calculator"></i>
                  <span class="nav-item">Administracion</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="cell margin-top-3">
            <ul class="vertical menu">
              <li>
                <a href="<?php echo constant('URL') ?>#">
                  <i class="fas fa-sign-out-alt"></i>
                  <span class="nav-item">SALIR</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="off-canvas-content" data-off-canvas-content>
      <div class="title-bar hide-for-large">
        <div class="title-bar-left">
          <button type="button" class="menu-icon" data-toggle="offCanvas">
          </button>
          <span class="title-bar-title">Admin Panel</span>
        </div>
      </div>
      <!-- MAIN CONTENT ALL -->
      <div class="grid-container full margin-horizontal-3">
        <!-- HEADER MAIN PAGE -->
        <header class="zeta-container">
          <div class="grid-x container">
            <div class="search-box">
              <input type="text" placeholder="Buscar...">
              <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="user-info">
              <span><i class="fas fa-user-tie"></i> Bienvenido</span>
            </div>
          </div>
        </header>
      
