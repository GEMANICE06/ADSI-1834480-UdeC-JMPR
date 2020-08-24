<?php
  session_start();
  if (isset($_SESSION['id'])) {?>

  <?php
  include_once('header.php');
  include_once('sidebar.php');
  include_once('topbar.php');
  ?>
 <!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">


  <title>CREACION ESTUDIANTES</title>


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->

  <div id="wrapper">



    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">


      <!-- Main Content -->
      <div id="content">



          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">



          <div class="row">


          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">


            <div class="col-lg-6 mb-4">

            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
        <div class="container">
    <div class="text-center">
      <h1 class="h1"><a style="background: #war"><i><font face="Comic Sans MS,arial,verdana">CREAR USUARIO</i></a></h1>
    </div>
    <hr>
    <form class="needs-validation" novalidate action="set.php" method="post">
      <div class="col">
      </div>
      <div class="form-row">
      <div class="form-group col-md-6">
        <label># De Identificacion</label>
        <input type="number" name="documento" class="form-control" value="" placeholder="# De Identificacion" required> 
      </div>
      <div class="form-group col-md-6">
        <label>Fecha De Nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control" value="" placeholder="fecha_nacimiento" required>
      </div>
      <div class="form-group col-md-6">
        <label>Apellidos</label>
        <input type="text" name="apellidos" class="form-control"  value="" placeholder="Apellido" required>
      </div>
      <div class="form-group col-md-6">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control"  value="" placeholder="Nombre" required> 
      </div>
      <div class="form-group col-md-6">
        <label>Genero</label>
        <input type="text" name="genero" class="form-control"  value="" placeholder="Genero" required> 
      </div>
      <div class="form-group col-md-6">
        <label>Correo</label>
        <input type="email" name="email" class="form-control"  value="" placeholder="Correo" required>
      </div>
      <div class="form-group col-md-6">
        <label>Programa De Formacion</label>
        <input type="programa_formacion" name="programa_formacion" class="form-control" placeholder="Programa De Formacion" value="" required> 
      </div>
      <div class="form-group col-md-6">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control"  value="" placeholder="Contraseña" required> 
      </div>
      </div>
      <hr>
        <div class="container text-center">
        <button type="submit" class="btn btn-primary">Crear Usuario</button>
    </form>
        <div class="col">
        </div>

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    </body>

    </html>
    <?php
      } else {
        header('location: login.php');

      }

        ?>