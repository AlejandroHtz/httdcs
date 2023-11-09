<?php 
require '../conexion.php';
$id_slack = $_POST['id_slack'];
$n_sss = $_POST['n_sss'];

$sqlnss = mysqli_query ($conexion,"SELECT * from slack 
where id_slack = '$id_slack' and nss = '$n_sss' ");
		
		 $resultnss= mysqli_num_rows($sqlnss);
if ($resultnss > 0)
{ 

$query= "UPDATE slack 
set evaluado = 1 where id_slack = $id_slack "  ;

$resultobjupd = mysqli_query($conexion, $query);
if($resultobjupd){
    echo "Enviado";
 
}else{ 
    echo "No enviado";
}

} else { echo "El NSS ".$n_sss.", es incorrecto"; }
?>