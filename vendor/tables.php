<?php
        $servername  = "localhost";
        $username    = "root";
        $password    = "";
        $dbname      = "bdencuestauc_jmpr";
        try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT count(*) FROM student WHERE genero = 'Femenino'");
            $Femenino = $stmt;
            $Femenino->execute();
            $nunF = $Femenino->fetchColumn();
        } catch(PDOExection $e) {
            echo $e->getMessage();
        }
    ?>

<?php
        $servername  = "localhost";
        $username    = "root";
        $password    = "";
        $dbname      = "bdencuestauc_jmpr";

        try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT count(*) FROM student WHERE genero = 'Masculino'");
            $masculino = $stmt;
            $nunM = $masculino->fetchColumn();
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
        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
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

    <div class="container text-center p-3" style="width: 400px; height: 300px; border: solid 1px">
    <h6 class="bg-primary" style="color: white">NUMERO DE ESTUDIANTES POR GENERO</h6>
   <canvas id="myChart2" width="200" height="100"></canvas>
   </div>
   <script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['FEMENINO', 'MASCULINO'],
        datasets: [{
            label: 'ESTUDIANTES',
            data: [<?php  echo $nunF; ?>,<?php echo $nunM; ?> ],
            backgroundColor: [
                '#FC4BBE',
                '#1B17E1',

            ],
            borderColor: [
                '#FC4BBE',
                '#1B17E1',
            ],
            borderWidth: 2
        }]
    },

});
</script>
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
                      foreach ($rows as $row){
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
                          <a href="delete.php?id=<?=$row->id?>" class="btn btn-danger btn-circle">
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
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->


</body>

</html>
<?php

} else {
  header('location: login.php');

}

  ?>
