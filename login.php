<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JMPR - ADSI login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6"><br><br><br><br>
                                <img src="img/usuario2.gif" alt="" width = "500" heigth="500" ;>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <img src="img/logouc3.jpg" alt="" width = "300" heigth="300">
                                                <br>
                                            <h1 class="h4 text-gray-900 mb-4">Bienvenidos!</h1>
                                        </div>
                  <form class="user" method="post" action="validatelogin.php">
                    <div class="form-group">
                      <input required type="email"  class="form-control form-control-user" id="email" name="email"  placeholder="correo electrónico...">
                    </div>
                    <div class="form-group">
                      <input required type="password"  class="form-control form-control-user" id="password" name="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <input checked  type="radio"  id="student"  name="type"  value="1">
                        <label for="student">Estudiante</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input checked type="radio"  id="users"  name="type"  value="2">
                        <label for="users">Administrativo</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Iniciar Session</button>
                   </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

