<?php
require_once("./Conexion/Tabla_paciente.php");
$idPaciente = 1;
//Instancia modelo
$tabla_paciente = new Tabla_paciente();
$data = $tabla_paciente->GetPaciente($idPaciente);
//print_r($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="utf-8" />
  <meta name="author" content="Rodrigo" />
  <meta name="description" content="Pagina para dentista" />
  <meta name="keywords" content="HTML, CSS, JavaScript, React" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1" />

  <!-- bootstrap css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <!-- style css -->
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" />
  <link
    rel="stylesheet"
    href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen" />


  <!-- Estilos Personalizados -->
  <style>
    /* Panel lateral fijo */
    .sidepanel {
      width: 250px;
      height: 100vh;
      /* Altura completa */
      position: fixed;
      background-color: #111;
      padding-top: 20px;
      color: white;
    }

    .sidepanel a {
      padding: 10px 15px;
      text-decoration: none;
      font-size: 18px;
      color: white;
      display: block;
      transition: 0.3s;
    }

    .sidepanel a:hover {
      background-color: #575757;
    }

    /* Contenido principal ajustado */
    .main-content {
      margin-left: 250px;
      /* Deja espacio para el panel lateral */
    }

    /* Estilo del encabezado */
    .header {
      background-color: #575757;
      padding: 10px;
      color: white;
    }

    .content {
      flex-grow: 1;
      padding: 20px;
      background: #f4f4f4;
    }

    .section {
      display: none;
    }

    .section.active {
      display: block;
    }
  </style>
</head>

<body>
  <!-- Sidebar fijo -->
  <div class="sidepanel">
    <h2 class="text-center">Dashboard</h2>
    <a href="../index.php">Inicio</a>
    <ul>
      <li><a onclick="showSection('pacientes')">Pacientes</a></li>
      <li><a onclick="showSection('historiales')">Historiales</a></li>
      <li><a onclick="showSection('antecedentes')">Antecedentes</a></li>
    </ul>
  </div>

  <!-- Contenido Principal -->
  <div class="main-content">
    <!-- Encabezado -->
    <div class="header">
      <h1>Panel de Control</h1>
    </div>

    <!-- Secciones de Contenido -->
    <div class="container mt-4">
      <div class="row">
        <!-- Tarjeta 1: Total Pacientes -->
        <div class="col-md-4">
          <div class="card text-white bg-info mb-3">
            <div class="card-body">
              <h5 class="card-title">Total Pacientes</h5>
              <p class="card-text">120</p>
            </div>
          </div>
        </div>

        <!-- Tarjeta 2: Citas Pendientes -->
        <div class="col-md-4">
          <div class="card text-white bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title">Citas Pendientes</h5>
              <p class="card-text">15</p>
            </div>
          </div>
        </div>

        <!-- Tarjeta 3: Nuevas Consultas -->
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title">Nuevas Consultas</h5>
              <p class="card-text">30</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contenido dinámico -->
      <div class="content">
        <div id="pacientes" class="section">
          <h2>Gestión de Pacientes</h2>
          <p>Contenido relacionado con los pacientes aquí.</p>
        </div>

        <div id="historiales" class="section active">
          <h2>Gestión de Historiales</h2>

          <br> <!--datos personales del paciente -->

          <div class="row m-1">
            <div class="col-12 bg-white">
              <form>
                <legend style="text-align: center;">Datos personales</legend>
                <div class="row">
                  <div class="form-group col">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                  </div>
                  <div class="form-group col">
                    <label for="ap">Apellido paterno</label>
                    <input type="text" class="form-control" id="ap">
                  </div>
                  <div class="form-group col">
                    <label for="am">Apellido materno</label>
                    <input type="text" class="form-control" id="am">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-3">
                    <label for="fn">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fn">
                  </div>
                  <div class="form-group col-3">
                    <label for="edad">Edad</label>
                    <input type="text" class="form-control" id="edad">
                  </div>
                  <div class="form-group col">
                    <label for="mail">Correo electronico</label>
                    <input type="email" class="form-control" id="mail">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col">
                    <label for="calle">Calle</label>
                    <input type="text" class="form-control" id="calle">
                  </div>
                  <div class="form-group col">
                    <label for="col">Colonia</label>
                    <input type="text" class="form-control" id="col">
                  </div>
                  <div class="form-group col">
                    <label for="municipio">Municipio</label>
                    <input type="text" class="form-control" id="municipio">
                  </div>
                  <div class="form-group col">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado">
                  </div>
                </div>
              </form>
            </div>
          </div>

          <br> <!-- antecedentes Patologicos -->

          <div class="row m-1">
            <div class="col-6 bg-white">
              <form id="pacienteForm">
                <legend style="text-align: center;">Antecedentes Patologicos</legend>
                <div class="row">
                  <div class="form-group col-3">
                    <label for="diabetesNombre">Padecimiento</label>
                    <input type="text" class="form-control" id="diabetesNombre">
                  </div>
                  <div class="form-group col-1">
                    <label for="diabetes">Estado</label>
                    <input type="checkbox" class="form-control" id="diabetes">
                  </div>

                </div>
                <!-- Otros campos que necesites -->
              </form>
            </div>

            <div class="col-6">
              <form id="pacienteForm">
                <legend>Antecedentes no patologicos</legend>
                <label for="estado">Estado</label>
                <input type="checkbox" id="estado">

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" readonly>

                <label for="fechaN">Fecha de Nacimiento:</label>
                <input type="date" id="fechaN" name="fechaN" readonly>

                <div class="row m-1">
                  <div class="col-12">
                    Citas previas
                  </div>
                </div>
                <!-- Otros campos que necesites -->
              </form>
            </div>
          </div>


        </div>

        <div id="antecedentes" class="section">
          <h2>Gestión de Antecedentes</h2>
          <p>Contenido relacionado con los historiales aquí.</p>
        </div>
      </div>

      <!-- Scripts -->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script>
        function showSection(sectionId) {
          // Ocultar todas las secciones
          const sections = document.querySelectorAll('.section');
          sections.forEach(section => section.classList.remove('active'));

          // Mostrar la sección seleccionada
          const sectionToShow = document.getElementById(sectionId);
          sectionToShow.classList.add('active');
        }
      </script>
</body>

</html>