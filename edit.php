<?php
session_start();
if (isset($_REQUEST['id']) and isset($_REQUEST['id']) and $_REQUEST['id'] != '' and $_REQUEST['id'] != null)  {
    $id = $_REQUEST['id'];

    $servername  = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "bdencuestauc_jmpr";

    try {
        $servername  = "localhost";
        $username    = "root";
        $password    = "";
        $dbname      = "bdencuestauc_jmpr";
        try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM student WHERE id = ?");
            $stmt->execute(array($id));
            $row = $stmt->fetch(PDO::FETCH_OBJ);
          } catch(PDOExection $e) {
                echo $e->getMessage();
          }
      } catch(PDOExection $e) {
           echo $e->getMessage();
      } ?>

          <?php
            include_once('header.php');
            include_once('sidebar.php');
            include_once('topbar.php');
          ?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>


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


            <!-- Nav Item - User Information -->


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
    <form class="needs-validation" novalidate action="update.php" method="post">
      <h1 class="h1"><a style="background: #war"><i><font face="Comic Sans MS,arial,verdana">Actualizar Datos</i></a></h1>
      <div class="col">
      <div class="form-row">
      <div class="form-group col-md-6">
        <label># De Identificacion</label>
        <input type="number" name="documento" class="form-control" readonly value="<?=$row->documento?>" required>
      </div>
      <div class="form-group col-md-6">
        <label>Apellidos</label>
        <input type="text" name="apellidos" class="form-control" value="<?=$row->apellidos?>" required>
      </div>
      <div class="form-group col-md-6">
        <label>Nombre</label>
        <input type="text" name="name" class="form-control"  value="<?=$row->name?>" required>
      </div>
      <div class="form-group col-md-6">
        <label>Correo</label>
        <input type="email" name="email" class="form-control"  value="<?=$row->email?>" required>
      </div>
      <div class="form-group col-md-6">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control"  value="<?=$row->password?>" required>
      </div>
      </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <div class="col"></div>


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

