<?php
  session_start();
  if (isset($_SESSION['id'])) {?>

  <?php
  include_once('header.php');
  include_once('sidebar.php');
  include_once('topbar.php');
  ?>

  <?php
      if ($_SESSION['type'] == 1) {?>


  <div class="container">
  <div class="text-center">
    <h1 class="h1"><a style="background: #war"><i><font face="Comic Sans MS,arial,verdana">FORMULARIO</i></a></h1>
  </div>
  <hr>
  <form class="needs-validation" novalidate action="saveform.php" method="post">
    <div class="form-row">
    <div class="form-group col-md-4">
      <label>ID</label>
      <input type="number" name="id" class="form-control" readonly value="<?=$row->id?>" required>  
    </div>
    <div class="form-group col-md-4">
      <label>Tipo De Identificacion</label>
      <select name="ti" class="form-control" placeholder="Tipo De Identificacion">
        <option>RC - Registro Civil</option>
        <option>TI - Tarjeta de identidad</option>
        <option>CC - Cédula de ciudadanía</option>
        <option>CE - Cédula de extranjería</option>
        <option>PA - Pasaporte</option>
        <option>MS - Menor sin identificación</option>
        <option>AS - Adulto sin identidad</option>
      </select>
  </div>
  <div class="form-group col-md-4">
        <label># De Documento</label>
        <input type="text" name="documento" class="form-control" readonly value="<?=$row->documento?>" required>
  </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
        <label>Pais De Nacimiento</label>
        <select name="pais_nacimiento" class="form-control" placeholder="Pais De Nacimiento">
          <option>Colombia</option>
          <option>Venezuela</option>
          <option>Brasil</option>
          <option>Argentina</option>
          <option>Chile</option>
          <option>Ecuador</option>
          <option>Paraguay</option>
          <option>Peru</option>
          <option>Bolivia</option>
          <option>Uruguay</option>
        </select> 
    </div>
    <div class="form-group col-md-6">
        <label>Fecha De Nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control"  readonly value="<?=$row->fecha_nacimiento?>" required>
    </div>
  </div>

  <div class="form-row">
      <div class="form-group col-md-6">
        <label>Apellidos</label>
        <input type="text" name="apellidos" class="form-control" readonly value="<?=$row->apellidos?>" required>
    </div>
      <div class="form-group col-md-6">
        <label>Nombres</label>
        <input type="text" name="name" class="form-control" readonly value="<?=$row->name?>" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Estado Civil</label>
      <select name="estado_civil" class="form-control" value="<?=$row->estado_civi?>" required>>
        <option>Soltero(a)</option>
        <option>Casado(a)</option>
        <option>Viudo(a)</option>
        <option>Union Libre</option>
        <option>Divorciado(a)</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>Zona Recidencial</label>
      <select name="zona_recidencial" class="form-control" value="<?=$row->zona_recidencial?>" required>>">
       <option>Rural</option>
       <option>Urbana</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Su Institución Educativa Fue</label>
      <select name="institución_educativa" class="form-control" placeholder="Su Institución Educativa Fue" >
        <option>Privada</option>
        <option>Publica</option>
        <option>Mixta</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>Nivel educativo de tus padre</label>
      <select  name="educaticion_padres" class="form-control" placeholder="Nivel Educativo De Los Padres">
       <option>Ninguno</option>
       <option>Preescolar</option>
       <option>Basica primaria</option>
       <option>Basica Secundaria</option>
       <option>Tenico</option>
       <option>Tecnologo</option>
       <option>Profesional</option>
       <option>Especialista</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Activida Economica De Tus Padres</label>
      <select name="activida_padres" class="form-control" placeholder="Activida Economica De Tus Padres">
        <option>Desempleado</option>
        <option>Empleado</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>Tipo de Vivienda Donde Viven</label>
      <select name="tipo_vivienda" class="form-control" placeholder="Zona Recidencial">
        <option>Propia</option>
        <option>Alquilada</option>
        <option>Familiar</option>
      </select>
    </div>
  </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Califique El Nivel De Educacion Donde Estudia</label>
        <select name="nivel_educacion" class="form-control" placeholder="Activida Educativa De Tus Padres">
        <option>Buena</option>
        <option>Mala</option>
        <option>Regular</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Nivel De Ingresos Al Hogar</label>
        <select name="ingresos_hogar" class="form-control" placeholder="Nivel De Ingresos Al Hogar">
          <option>$0 A 0</option>
          <option>$905.353 A 908.790</option>
          <option>$1.020.643 A 1.081.448</option>
          <option>$1.150.436 A 1.384.634</option>
          <option>$1.475.454 A 1.512.852</option>
          <option>$1.664.922 A 1.742.254</option>
          <option>$1.836.730 A 1.947.688</option>
          <option>$2.077.050 A 2.152.916</option>
          <option>$2.250.064 A 2.542.265</option>
          <option>$2.721.555 A 2.990.759</option>
          <option>$3.081.918 A 3.211.673</option>
          <option>$3.407.415 A 3.691.789</option>
          <option>$3.950.730 A 4.367.944</option>
        </select>
      </div>
    </div>

   <div class="form-row">
      <div class="form-group col-md-6">
        <label>Genero</label>
        <select name="genero" class="form-control" placeholder="Genero">
          <option>Femenino</option>
          <option>Masculino</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label>Asignaturas Matriculadas</label>
        <select name="asignaturas" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Correo</label>
        <input type="email" name="email" class="form-control" readonly value="<?=$row->email?>" required>
      </div>
      <div class="form-group col-md-6">
          <label>Programa de Formacion</label>
          <select name="programa_formacion" class="form-control" placeholder="Programa de Formacion">
            <option>Desarrollo wed</option>
            <option>Mecanica Diesel</option>
          </select>
        </div>
   </div>
        
        <hr>
    <div class="container text-center">
   <input type="hidden" name="id" value="<?=$_SESSION['id']?>"> 
    <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
  </form>
  </div>
  <?php
           
}?>   
<?PHP
if($_SESSION['type'] == 2) {?>
    <!doctype html>
    <html lang="es">

    <head>

      <meta charset="utf-8">

      <title>AJPB - ADSI INICIO</title>

      <!-- Custom fonts for this template-->

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

                    <div class="p-4">
                      <div class="text-center">
                        <div class="col-lg-6-center">
                          <img src="img/lo.jpg" width="350px" heiht="400px">
                        </div>
                      </div>     
                                <?php
                            } else {
                                $servername  = "localhost";
                                $username    = "root";
                                $password    = "";
                                $dbname      = "bdencuestauc_jmpr";

                                try {
                                    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
                                    // set the PDO error mode to exception
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
                                    $stmt->execute(array($_SESSION['id']));                    
                                    $row = $stmt->fetch(PDO::FETCH_OBJ);
                                } catch(PDOExection $e) {
                                    echo $e->getMessage();
                                }
                              
                            }
                        ?>     
<?php
      include_once('footer.php')
    ?>        
  <?php

} else {
  header('location: login.php');

}

  ?>