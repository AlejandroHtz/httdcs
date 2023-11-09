<?php 
require '../../conexion.php';

$clas = $_POST['clas']; 
$id = $_POST['id'];
$queryobj= "UPDATE hist_comodo SET 
    clasificacion = '$clas'
   WHERE id = $id" ; 
$resultobj = mysqli_query($conexion, $queryobj);
if($resultobj){
    echo "Actualizado";
}




?>