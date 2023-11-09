<?php

if (!isset($_SESSION)) {
    session_start();
}

if (empty($_SESSION['active'])) {
    header('location: ../index.php');
}
?>

<?php

if (empty($_SESSION['variable'])) {
}

require('../conexion.php');


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Netsoft</title>
    <link rel="icon" type="image/png" href="img/n.ico" />



    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <!-- <img src="#" alt="#" style="height: 100%"> -->
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            </ul>
        </nav>
        <!-- /.navbar -->
        <style>
            .sidebar {
                height: 100%;
                width: fit-content;
                position: fixed;
                z-index: 1;

                background-color: #343a40;
                overflow-x: hidden;

            }
        </style>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!-- <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div> -->
                    <li class="nav nav-pills nav-sidebar flex-column">
                        <span></span>
                        <a class="nav-link">
                            <p><?PHP echo  $_SESSION['nombre']; ?></p>
                        </a>

                        <!-- <a data-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapseExample"><?PHP echo  $_SESSION['nombre'] . "(" . $_SESSION['perfil'] . ")"; ?></a> -->
                    </li>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                        <!-- <li class="nav-header text-center" style="font-size: 25px">MENÚ</li> -->

                        <?PHP if ($_SESSION['permisos'] == "1") { ?>
                            <li class="nav-item">
                                <a href="dashboard.php" class="nav-link">
                                    <span class="nav-icon fas fa-tachometer-alt"></span>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="consulta.php" class="nav-link">
                                    <span class="nav-icon fas fa-search"></span>
                                    <p>
                                        Consultar
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="nav-icon fas fa-parking"></span>
                                    <p>
                                        Plataformas
                                    </p>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="actualizaciones.php">Actualizaciones</a></li>
                                    <li><a class="dropdown-item" href="plataformas.php">Detalle plataformas</a></li>
                                    <li><a class="dropdown-item" href="slack.php">Slack</a></li>
                                    <li><a class="dropdown-item" href="comodo.php">Comodo</a></li>
                                    <li><a class="dropdown-item" href="hist_comodo.php">Inventario PC</a></li>
                                    <li><a class="dropdown-item" href="monitores.php">Accesorios</a></li>
                                    <li><a class="dropdown-item" href="google_netsoft.php">Google Netsoft</a></li>
                                    <li><a class="dropdown-item" href="google_cloudsuite.php">Google Cloudsuite</a></li>
                                    <li><a class="dropdown-item" href="activos.php">Activos</a></li>
                                    <li><a class="dropdown-item" href="workbeat.php">WorkBeat</a></li>
                                    <li><a class="dropdown-item" href="openair.php">Open Air</a></li>
                                    <li><a class="dropdown-item" href="oracle_university.php">Oracle Uuniversity</a></li>
                                    <li><a class="dropdown-item" href="wave.php">Wave</a></li>
                                    <li><a class="dropdown-item" href="officee.php">Office</a></li>
                                    <li><a class="dropdown-item" href="checador.php">Checador</a></li>
                                    <li><a class="dropdown-item" href="netsuite.php">Netsuite</a></li>
                                    <li><a class="dropdown-item" href="apc.php">APC</a></li>
                                    <li><a class="dropdown-item" href="docusing.php">Docusing</a></li>
                                    <li><a class="dropdown-item" href="jetbrains.php">JetBrains</a></li>
                                    <li><a class="dropdown-item" href="smartsheet.php">Smartsheet</a></li>
                                </ul>

                            </li>

                        <?php  } ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-icon fas fa-envelope-open-text"></span>
                                <p>
                                    Mi evaluación
                                </p>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="mievaluacion2023.php">2023</a></li>
                                    <li><a class="dropdown-item" href="mievaluacion.php">2022</a></li>
                                   
                                </ul>
                        </li>
                        <?PHP if ($_SESSION['permisos'] == "3") { ?>
                            <li class="nav-item">
                                <a href="list_evaluar.php" class="nav-link">
                                    <span class="nav-icon fas fa-bullhorn"></span>
                                    <p>
                                        Pendientes a evaluar
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="list_evaluar_concl.php" class="nav-link">
                                    <span class="nav-icon fas fa-archive"></span>
                                    <p>
                                        Evaluaciones concluidas
                                    </p>
                                </a>
                            </li>


                        <?php  } ?>

                        <?PHP if ($_SESSION['email'] === "pgutierrez@netsoft.com") { ?>
                            <li class="nav-item">
                                <a href="list_pocisiones.php" class="nav-link">
                                    <span class="nav-icon fas fa-building"></span>
                                    <p>
                                        Departamentos
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="personal.php" class="nav-link">
                                    <span class="nav-icon fas fa-building"></span>
                                    <p>
                                        Personas a evaluar
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-icon fas fa-envelope-open-text"></span>
                                <p>
                                    Reportes RH
                                </p>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="form_reporte_new.php">Reporte evaluados (RH) 2023</a></li>
                                    <li><a class="dropdown-item" href="form_reporte.php">Reporte evaluados (RH) 2022</a></li>
                                   
                                </ul>
                        </li>


                        <?php  } ?>


                        <?PHP if ($_SESSION['gerente'] > '0') { ?>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="nav-icon fas fa-envelope-open-text"></span>
                                <p>
                                    Reportes evaluados
                                </p>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="form_reporte_ger_new.php">Reporte evaluados 2023</a></li>
                                    <li><a class="dropdown-item" href="form_reporte_ger.php">Reporte evaluados 2022</a></li>
                                   
                                </ul>
                        </li>

                        <?php  } ?>


                        <li class="nav-item">
                            <a href="../close.php" class="nav-link text-danger">
                                <span class="nav-icon fas fa-power-off"></span>
                                <p>
                                    <strong>Salir</strong>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>