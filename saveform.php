<?php
if (isset($_REQUEST['it']) and $_REQUEST['ti'] != '' and $_REQUEST['ti'] != null and
isset($_REQUEST['id']) and $_REQUEST['id'] != '' and $_REQUEST['id'] != null and
isset($_POST['pais_nacimiento']) and $_REQUEST['pais_nacimiento'] != '' and $_REQUEST['pais_nacimiento'] != null and
isset($_REQUEST['fecha_nacimiento']) and $_REQUEST['fecha_nacimiento'] != '' and $_REQUEST['fecha_nacimiento'] != null and
isset($_REQUEST['apellidos']) and $_REQUEST['apellidos'] != '' and $_REQUEST['apellidos'] != null and
isset($_REQUEST['name']) and $_REQUEST['name'] != '' and $_REQUEST['name'] != null and
isset($_REQUEST['estado_civil']) and $_REQUEST['estado_civil'] != '' and $_REQUEST['estado_civil'] != null and
isset($_REQUEST['zona_recidencial']) and $_REQUEST['zona_recidencial'] != '' and $_REQUEST['zona_recidencial'] != null and
isset($_REQUEST['institución_educativa']) and $_REQUEST['institución_educativa'] != '' and $_REQUEST['institución_educativa'] != null and
isset($_REQUEST['educaticion_padres']) and $_REQUEST['educaticion_padres'] != '' and $_REQUEST['educaticion_padres'] != null and
isset($_REQUEST['activida_padres']) and $_REQUEST['activida_padres'] != '' and $_REQUEST['activida_padres'] != null and
isset($_REQUEST['tipo_vivienda']) and $_REQUEST['tipo_vivienda'] != '' and $_REQUEST['tipo_vivienda'] != null and
isset($_REQUEST['nivel_educacion']) and $_REQUEST['nivel_educacion'] != '' and $_REQUEST['nivel_educacion'] != null and
isset($_REQUEST['ingresos_hogara']) and $_REQUEST['ingresos_hogara'] != '' and $_REQUEST['ingresos_hogara'] != null and
isset($_REQUEST['genero']) and $_REQUEST['genero'] != '' and $_REQUEST['genero'] != null and
isset($_REQUEST['programa_formacion']) and $_REQUEST['programa_formacion'] != '' and $_REQUEST['programa_formacion'] != null and
isset($_REQUEST['asignaturas']) and $_REQUEST['asignaturas'] != '' and $_REQUEST['asignaturas'] != null) {

   echo ('campos vacio');
}
else{
    $id                      = $_REQUEST['id'];
    $ti                      = $_REQUEST['ti'];
    $pais_nacimiento         = $_REQUEST['pais_nacimiento'];
    $fecha_nacimiento        = $_REQUEST['fecha_nacimiento'];
    $apellidos               = $_REQUEST['apellidos'];
    $name                    = $_REQUEST['name'];
    $estado_civil            = $_REQUEST['estado_civil'];
    $zona_recidencial        = $_REQUEST['zona_recidencial'];
    $institución_educativa   = $_REQUEST['institución_educativa'];
    $educacion_padres        = $_REQUEST['educacion_padres'];
    $activida_padres         = $_REQUEST['activida_padres'];
    $tipo_vivienda           = $_REQUEST['tipo_vivienda'];
    $nivel_educacion         = $_REQUEST['nivel_educacion'];
    $ingresos_hogar          = $_REQUEST['ingresos_hogar'];
    $genero                  = $_REQUEST['genero'];
    $programa_formacion      = $_REQUEST['programa_formacion'];
    $asignaturas             = $_REQUEST['asignaturas'];


    $servername  = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "bdencuestauc_jmpr";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("UPDATE student SET ti= ?, pais_nacimiento= ?, fecha_nacimiento= ?, apellidos= ?, name= ?, estado_civil= ?, institución_educativa= ?, educaticion_padres= ?, activida_padres= ?, tipo_vivienda= ?, nivel_educacion= ?, ingresos_hogar= ?, genero= ?, asignaturas= ?, programa_formacion= ?, zona_recidencial= ? WHERE id= ?"); 
        $stmt->execute(array($ti, $pais_nacimiento, $fecha_nacimiento, $apellidos, $name, $estado_civil, $institución_educativa, $educacion_padres, $activida_padres, $tipo_vivienda, $nivel_educacion, $ingresos_hogar, $genero, $asignaturas, $programa_formacion, $zona_recidencial, $id));                    
        header('location: index.php');
    } catch(PDOExection $e) {
        echo $e->getMessage();
    }

}