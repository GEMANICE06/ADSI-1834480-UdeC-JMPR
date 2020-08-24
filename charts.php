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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



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

          <!-- Page Heading -->


          <!-- Content Row -->

          <div class="row">

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

        <!-- /.container-fluid -->
        <canvas id="myChart2" width="200" height="100"></canvas>


      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script>
          var ctx = document.getElementById('myChart2').getContext('2d');
          var myChart2 = new Chart(ctx, {
              type: 'polarArea',
              data: {
                  labels: ['LOS CEREZOS', 'CONSOLATA'],
                  datasets: [{
                      label: 'ESTUDIANTES',
                      data: ['40','60'],
                      backgroundColor: [
                          'rgba(24, 545, 34, 0.5)',
                          'rgba(255, 39, 76, 0.5)',

                      ],
                      borderColor: [
                          'rgb(60, 177, 6)',
                          'rgba(255, 39, 76, 1)'
                      ],
                      borderWidth: 2
                  }]
              },

          });
        </script>
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