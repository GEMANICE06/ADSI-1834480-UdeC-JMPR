<?php
  session_start();
  if (isset($_SESSION['id'])) {?>
  
  <?php
  include_once('header.php');
  include_once('sidebar.php');
  include_once('topbar.php');
  ?>

  <?php
 } else { 
  $servername  = "localhost";
  $username    = "root";
  $password    = "";
  $dbname      = "uc_ajpb";

  try {
      $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM student WHERE id = ?");
      $stmt->execute(array($_SESSION['id']));
      $row = $stmt->fetch(PDO::FETCH_OBJ);    
  } catch(PDOExection $e) {
      echo $e->getMessage();
  }

 }

 ?>            

  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Checkout example · Bootstrap</title>
    
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <!-- Favicons -->
    
    

    
   <!-- Begin Page Content -->
  <div class="container-fluid">
        <?php
            if ($_SESSION['type'] == 1) {?>
                <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    
    <link href="form-validation.css" rel="stylesheet">
    <form action="encuesta_estudiantes" method="post">
    <div class="container">
    <h1 class="h1"><a style="background: #war"><i><font face="Comic Sans MS,arial,verdana">Formulario</i></a></h1>
    <div class="col">
    </div>
    <div class="form-row">
    <div class="form-group col-md-5">
      <label>Tipo De Identificacion</label>
      <select name="ti" class="form-control">
        <option>RC - Registro Civil</option>
        <option>TI - Tarjeta de identidad</option>
        <option>CC - Cédula de ciudadanía</option>
        <option>CE - Cédula de extranjería</option>
        <option>PA - Pasaporte</option>
        <option>MS - Menor sin identificación</option>
        <option>AS - Adulto sin identidad</option>
      </select>
  </div>
     <div class="form-group col-md-5">
      <label># De Identificacion</label>
      <input type="number" name="id" value="<?=$row->id?>" class="form-control"> required>
  </div>
  <div class="form-group col-md-5">
      <label>Pais De Nacimiento</label>
      <select name="pais_nacimiento" class="form-control">
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
  <div class="form-group col-md-5">
      <label>Edad</label>
      <input type="date" name="edad" class="form-control">
  </div>

  </div>
    <div class="form-row">
    <div class="form-group col-md-5">
     <label>Apellidos</label>
     <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">

  </div>
    <div class="form-group col-md-5">
     <label>Nombres</label>
     <input type="text" name="nombres" class="form-control" placeholder="Nombres">
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-5">
      <label>Estado Civil</label>
      <select name="estado_civil" class="form-control">
        <option>Soltero(a)</option>
        <option>Casado(a)</option>
        <option>Viudo(a)</option>
        <option>Union Libre</option>
        <option>Divorciado(a)</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label>Zona Recidencial</label>
      <select name="zona_recidencial" class="form-control" placeholder="Zona Recidencial">
       <option>Rural</option>
       <option>Urbana</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label>Su Institución Educativa Fue</label>
      <select name="cual_institución_educativa" class="form-control" placeholder="Su Institución Educativa Fue" >
        <option>Privada</option>
        <option>Publica</option>
        <option>Mixta</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label>Nivel educativo de tus padre</label>
      <select  name="nivel_educativo_padres" class="form-control" placeholder="Nivel Educativo De Los Padres">
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
    <div class="form-group col-md-5">
      <label>Activida Economica De Tus Padres</label>
      <select name="activida_de_tus_padres" class="form-control" placeholder="Activida Economica De Tus Padres">
       <option>Desempleado</option>
       <option>Empleado</option>
      </select>
    </div>

    <div class="form-group col-md-5">
      <label>Tipo de Vivienda Donde Viven</label>
      <select name="tipo_de_vivienda" class="form-control" placeholder="Zona Recidencial">
       <option>Propia</option>
       <option>Alquilada</option>
       <option>Familiar</option>
      </select>
    </div>

     
    <div class="form-row">
    <div class="form-group col-md-5">
      <label>Califique El Nivel De Educacion Donde Estudia</label>
      <select name="nivel_educacion" class="form-control" placeholder="Activida Educativa De Tus Padres">
       <option>Buena</option>
       <option>Mala</option>
       <option>Regular</option>
      </select>  
    </div>

    <div class="form-group col-md-5">
      <label>Nivel De Ingresos Al Hogar</label>
      <select name="ingresos_hogar" class="form-control" placeholder="Nivel De Ingresos Al Hogar">
        <option>$0 A 0</option>
        <option>$905.353 A 908.660</option>
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
   <div class="form-row">
    <div class="form-group col-md-3">
      <label>Genero</label>
      <select name="genero" class="form-control">
        <option>Femenino</option>
        <option>Masculino</option>
      </select>
    </div>
     <div class="form-row">
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
     <div class="form-group col-md-6">
      <label>Correo</label>
      <input type="email" name="email" class="form-control" placeholder="Correo">  
    </div>
  </div> 
  <input class="btn btn-outline-warning" type="submit" value="Enviar" name="enviar">
  <div class="col"></div>
  <?php
            
    }?>
   

  </div>
    <!-- /.container-fluid -->

  </div>
    <!-- End of Main Content -->
  </footer>
  </div>
    </div>
        <!-- End of Main Content -->
    <?php
             include_once('footer.php')
    ?>        
    </body>
   </html>
   <?php
        

}?>