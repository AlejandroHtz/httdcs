<?php

require '../conexion.php';

 $inpEstatus= $_POST['inpEstatus'];
 $fechainidoc= $_POST['fechainidoc'];

$queryobjupunt= "UPDATE slack set evaluado = '$inpEstatus' where id_slack = '$fechainidoc' " ;
$resultobjupunt = mysqli_query($conexion, $queryobjupunt);

if($resultobjupunt){
    echo "Insertado";
} else { echo "No Insertado"; }



?>