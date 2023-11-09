<?php
require '../../conexion.php';
// Activos validos en slack
if(isset($_POST['inpTodo'])){
$var = $_POST['inpTodo'];


//consulta de existencia de plataforma
$querydiscaredo =  mysqli_query ($conexion, "SELECT * from plataformas where servicio = '$var'  ");
$filaactivosss = mysqli_fetch_array($querydiscaredo);
$responsable= $filaactivosss['responsable'];
$tipo_invercion= $filaactivosss['tipo_invercion'];
$periodicidad = $filaactivosss['periodicidad'];
$nolicencias  = $filaactivosss['nolicencias'];
$vencimiento  = substr($filaactivosss['fecha_vencimiento'],0,10);

if(empty($filaactivosss['descripcion'])){ $descripcion= ""; } else{  $descripcion= $filaactivosss['descripcion']; }


if(empty($filaactivosss['base'])){ //si esta basia la base
echo $var."||0 ||". $descripcion."||".$responsable."||".$tipo_invercion."||".$periodicidad."||".$nolicencias."||".$vencimiento;
}else{
    $froo = $filaactivosss['base'];
    $queryactivos= mysqli_query ($conexion, "SELECT count(*) as activos from $froo where eliminada = 0" );
    $filaactivos = mysqli_fetch_array($queryactivos);
     echo $var."||".$filaactivos['activos']."||".$descripcion."||".$responsable."||".$tipo_invercion."||".$periodicidad."||".$nolicencias."||".$vencimiento;
}





}

// // #licencias en comodo
// $queryComodo= mysqli_query ($conexion, "SELECT sum(nolicencias) as numlic from plataformas where eliminada = 0 and servicio like '%COMODO%'" );
// $filaComodo = mysqli_fetch_array($queryComodo);

// // #licencias en comodo ocupadas
// $queryComodoactivas= mysqli_query ($conexion, "SELECT count(*) AS activos from hist_comodo where ocupado = 'SI'" );
// $filaComodoactivas = mysqli_fetch_array($queryComodoactivas);

// // Costo comodo
// $queryComodocostomen= mysqli_query ($conexion, "SELECT sum(mensual) as costmensual from plataformas where eliminada = 0 and servicio like '%COMODO%'" );
// $filaComodocostomen = mysqli_fetch_array($queryComodocostomen);

?>