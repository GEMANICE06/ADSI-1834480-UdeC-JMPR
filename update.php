<?php
    $apellidos           = $_REQUEST['apellidos'];
    $name                = $_REQUEST['name'];
    $email               = $_REQUEST['email'];
    $id                  = $_REQUEST['id'];

    $servername  = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "bdencuestauc_jmpr";

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("UPDATE student SET name= ?, apellidos = ?, email = ? WHERE id = ?");
    $stmt->execute(array($name, $apellidos, $email, $id));
    header('location: tables.php');
} catch(PDOExection $e) {
    echo $e->getMessage();
}?>
