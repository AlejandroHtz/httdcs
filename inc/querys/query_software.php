<?php
require '../../conexion.php';
header('Content-Type: text/html; charset=UTF-8');
if(isset($_POST['id'])){
    $var = $_POST['id'];

    $querydiscaredo =  "SELECT * from plataformas where servicio = '$var'
    order by servicio asc";
    $resdiscaredo = mysqli_query($conexion, $querydiscaredo);
    while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {
    
        $jsoss[]= $filaresdiscaredo;
    }
  echo  json_encode($jsoss);

}