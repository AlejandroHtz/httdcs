<?php 
if(!isset($_SESSION))
{
	session_start();
}
if (empty($_SESSION['active'])) {
    header('location: index.php');  
} ?>
 
<?php 
if (empty($_SESSION['variable'])) {
   
} 
    require ('../conexion.php');
       
    require ('perfilloader.php');

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css" />
    <title>BeatRent</title>
</head>

<body onload="desaparecer()">

<div class="d-flex" id="wrapper"> 
        <!-- Sidebar -->

        
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 text-danger fs-4 fw-bold text-uppercase border-bottom">

            </i><a href="#"><img border="0" height="30" width="30" src="../images/favicon.ico" /></a>
			</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Inicio</a>

                <?PHP if($_SESSION['view_inventario']=="1") { ?>
                <a href="inventario.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-car"></i> Inventario</a>
 
               <?php  } ?>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Consultar otro</a> -->
                <a href="nueva_solicitud.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-chart-line me-2"></i>Solicitudes</a>
                <?PHP if($_SESSION['view_flotilla']=="1") { ?>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Mi flotilla</a> -->
                        <?php  } ?>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Siniestros</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Solicitud de atencion</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Contratos</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Consultar otro</a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a> -->
                        <?PHP if($_SESSION['view_contract']=="1") { ?>
                <a href="contratos.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-file-alt me-2"></i> Contratos</a> 
                        
                        <a href="proveedores.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-file-alt me-2"></i> Proveedores</a> 
                        <?php  } ?>
                <a href="callcenter.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-headset"></i> Call Center</a>

                <a target="_blank" href="https://www.b2btracking.com.mx" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-map-marked-alt"></i> GPS</a>
                <a href="../close.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Salir</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Forza</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
								<?PHP echo 	$_SESSION['nombre']."(".$_SESSION['perfil'].")"; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                              <?php if($_SESSION['perfil']<>1){} else { ?><li><a class="dropdown-item" href="cuentas.php">Cuentas</a></li> <?php } ?>
                                <li><a class="dropdown-item" href="../close.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

 