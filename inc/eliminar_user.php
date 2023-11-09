<?php 
require '../conexion.php';
if($_SESSION['email']==="admin@netsoft.com") {
 $id_slack = $_GET['id'];

$query1= "UPDATE slack set eliminada = 1 where id_slack = '$id_slack'"  ;
$query2= "UPDATE workbeat set eliminada = 1 where id_slack = '$id_slack'";
$query3= "UPDATE openair set eliminada = 1 where id_slack = '$id_slack'";
$query4= "UPDATE oracle_university set eliminada = 1 where id_slack = '$id_slack'";
$query5= "UPDATE comodo set eliminada = 1 where id_slack = '$id_slack'";
$query6= "UPDATE wave set eliminada = 1 where id_slack = '$id_slack'";
$query7= "UPDATE google_netsoft set eliminada = 1 where id_slack = '$id_slack'";
$query8= "UPDATE google_cloudsuite set eliminada = 1 where id_slack = '$id_slack'";
$query9= "UPDATE office set eliminada = 1 where id_slack = '$id_slack'";
$query10= "UPDATE apc set eliminada = 1 where id_slack = '$id_slack'";
$query11= "UPDATE netsuite set eliminada = 1 where id_slack = '$id_slack'";
$query12= "UPDATE checador set eliminada = 1 where id_slack = '$id_slack'";
$query13= "UPDATE hist_comodo 
           INNER JOIN comodo on comodo.serial_number = hist_comodo.serial_number
           SET hist_comodo.ocupado = 'NO' WHERE comodo.id_slack = '$id_slack'";
$query14= "UPDATE activos set eliminada = 1 where id_slack = '$id_slack'";           

$resultobjupd1= mysqli_query($conexion,$query1);
$resultobjupd2= mysqli_query($conexion,$query2);
$resultobjupd3= mysqli_query($conexion,$query3);
$resultobjupd4= mysqli_query($conexion,$query4);
$resultobjupd5= mysqli_query($conexion,$query5);
$resultobjupd6= mysqli_query($conexion,$query6);
$resultobjupd7= mysqli_query($conexion,$query7);
$resultobjupd8= mysqli_query($conexion,$query8);
$resultobjupd9= mysqli_query($conexion,$query9);
$resultobjupd10= mysqli_query($conexion,$query10);
$resultobjupd11= mysqli_query($conexion,$query11);
$resultobjupd12= mysqli_query($conexion,$query12);
$resultobjupd13= mysqli_query($conexion,$query13);
$resultobjupd14= mysqli_query($conexion,$query14);

if($resultobjupd1 &&
$resultobjupd2 &&
$resultobjupd3 &&
$resultobjupd4 &&
$resultobjupd5 &&
$resultobjupd6 &&
$resultobjupd7 &&
$resultobjupd8 &&
$resultobjupd9 &&
$resultobjupd10 &&
$resultobjupd11 &&
$resultobjupd12 &&
$resultobjupd13 &&
$resultobjupd14 ){
   
echo "<script> alert('Eliminado') ;window.location='slack.php' </script>";
}else{ 
    echo "<script> alert('No Eliminado') ;window.location='slack.php' </script>";
}

} else {
    echo'<script type="text/javascript">
    alert("No debes de editar la url");
    window.location.href="../";
    </script>';
   } 
?>