<?php
    if (isset($_REQUEST['id']) and $_REQUEST['id'] != '' and $_REQUEST['id'] != null) {
        $id = $_REQUEST['id'];

        $servername  = "localhost";
        $username    = "root";
        $password    = "";
        $dbname      = "bdencuestauc_jmpr";

            try {
                $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("DELETE FROM student WHERE id = ?");
                $stmt->execute(array($id));
                header('location: tables.php');
            } catch(PDOExection $e) {
                echo $e->getMessage();
            }
        } else {
            header('location: tables.php');
        }