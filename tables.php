<?php
$servername  = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "bdencuestauc_jmpr";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT COUNT(*) AS cantidad FROM student GROUP BY genero");
        $stmt->execute();
        $rows1 = $stmt->fetchAll(PDO::FETCH_OBJ);

        $datos = null;

        foreach($rows1 as $row){
        if($datos == null){
        $datos .= $row->cantidad;
        }else{
          $datos .= ",".$row->cantidad;
        }
        }
    } catch(PDOExection $e) {
        echo $e->getMessage();
    }
?>
<?php
session_start();
if (isset($_SESSION['id'])) {
    $servername  = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "bdencuestauc_jmpr";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM student");
        $stmt->execute();
        $rows2 = $stmt->fetchAll(PDO::FETCH_OBJ);
    } catch(PDOExection $e) {
        echo $e->getMessage();
    }

    ?>

  <?php

  include_once('header.php');
  include_once('sidebar.php');
  include_once('topbar.php');
  ?>



<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <title>ADSIS - LISTADO ESTUDIANTES</title>

         <!-- End of Topbar -->

    <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Numero De Estudiantes Por Genero</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Mujeres
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Hombres
                    </span>
                  </div>
                </div>
              </div>
            </div>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>
          <p class="mb-4"></a></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="text-center">
              <h6 class="m-0 font-weight-bold text-primary">LISTADO DE ESTUDIANTES</h6>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# DE DOCUMENTO</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;APELLIDOS</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRES </th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;FECHA DE &nbsp;&nbsp;NACIMIENTO</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;GENERO</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL</th>
                      <th>&nbsp;&nbsp;&nbsp;PASSWORD</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;<svg class="bi bi-pen" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
                            <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
                            <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                          </svg>&nbsp;&nbsp;&nbsp;
                          <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                            </th>
                    </tr>
                  </thead>
                  <tfoot>
                  </tfoot>
                  <tbody>
                  <?php
                      foreach ($rows2 as $row){
                  ?>
                      <tr>
                        <td><?=$row->id?></td>
                        <td><?=$row->documento?>
                        <td><?=$row->apellidos?></td>
                        <td><?=$row->name?></td>
                        <td><?=$row->fecha_nacimiento?></td>
                        <td><?=$row->genero?></td>
                        <td><?=$row->email?></td>
                        <td><?=$row->password?></td>
                        <td>
                          <a href="edit.php?id=<?=$row->id?>" class="btn btn-success btn-circle">
                              <i class="fas fa-user-edit"></i>
                          </a>
                          <a href="#" data-toggle="modal" data-target="#logoutModalEliminar"  class="btn btn-danger btn-circle">
                              <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
             include_once('footer.php')
    ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <div class="modal fade" id="logoutModalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Borrar Estudiante</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">¿Esta Seguro Que Desea Eliminar Estudiante?</div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-danger" href="delete.php?id=<?=$row->id?>">Eliminar</a>
                      </div>
                    </div>
                  </div>
              </div>
  <!-- End of Page Wrapper -->
<script src="vendor/chart.js/Chart.min.js"></script>
  <!-- Scroll to Top Button-->
<script src="js/demo/chart-pie-demo.js"></script>
<script>
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Mujeres","Hombres"],
    datasets: [{
      data: [<?php echo $datos?>],
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>
</body>

</html>
<?php

} else {
  header('location: login.php');

}

  ?>
