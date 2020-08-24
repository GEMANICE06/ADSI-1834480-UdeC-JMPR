<?php

if (isset($_REQUEST['name']) and $_REQUEST['name'] != '' and $_REQUEST['name'] != null and
    isset($_REQUEST['fecha_nacimiento']) and $_REQUEST['fecha_nacimiento'] != '' and $_REQUEST['fecha_nacimiento'] != null and
    isset($_REQUEST['documento']) and $_REQUEST['documento'] != '' and $_REQUEST['documento'] != null and
    isset($_POST['apellidos']) and $_REQUEST['apellidos'] != '' and $_REQUEST['apellidos'] != null and
    isset($_REQUEST['email']) and $_REQUEST['email'] != '' and $_REQUEST['email'] != null and
    isset($_REQUEST['password']) and $_REQUEST['password'] != '' and $_REQUEST['password'] != null) {

    $fecha_nacimiento     = $_REQUEST['fecha_nacimiento'];
    $documento            = $_REQUEST['documento'];
    $apellidos            = $_REQUEST['apellidos'];
    $name                 = $_REQUEST['name'];
    $email                = $_REQUEST['email'];
    $password1            = $_REQUEST['password'];


    $servername  = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "bdencuestauc_jmpr";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO student (name, fecha_nacimiento, documento, apellidos, email, password ) VALUES (?,?,?,?,?,?)");
        $stmt->execute(array($name, $fecha_nacimiento, $documento, $apellidos, $email, $password1));
        header('location: tables.php');
    } catch(PDOExection $e) {
        echo $e->getMessage();
    }

} else {
    header('location: tables.php');
}


