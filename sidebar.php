   <!-- Page Wrapper -->
   <div id="wrapper">

    <?php
       if($_SESSION['type'] == 2) {?>
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Univerdida De Cartagena <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="create.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Crear Estudiante</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Listado De Estudiantes</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
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
                    $stmt = $conn->prepare("SELECT * FROM student WHERE id = ?");
                    $stmt->execute(array($_SESSION['id']));
                    $row = $stmt->fetch(PDO::FETCH_OBJ);
                } catch(PDOExection $e) {
                    echo $e->getMessage();
                }

            }
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
