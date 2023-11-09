<?php 
require '../conexion.php';

$InputNumSerie = $_POST['InputNumSerie']; 
$InputNumMonitor = $_POST['InputNumMonitor'];
$InputComentarios = $_POST['InputComentarios'];
$InputFactura = $_POST['InputFactura'];
$Inputcosto = $_POST['Inputcosto'];
$InputEmpresa = $_POST['InputEmpresa'];

 $id = $_POST['id'];
 $marca = $_POST['InputMarca'];
$modelo = $_POST['InputModelo'];
 $Inptipo = $_POST['Inptipo'];
 
if(empty($InputNumSerie) && empty($InputNumMonitor)){
    Echo "El numero de serie y monitor no pueden ir vacios";
}else{


 $queryobj= "UPDATE monitores SET 
    num_serie = '$InputNumSerie',
    num_equipo =  '$InputNumMonitor',
    tipo = '$Inptipo',
    marca = '$marca',
    modelo ='$modelo',
    comentarios=  '$InputComentarios',
    factura = '$InputFactura',
    costo = '$Inputcosto',
    empresa = '$InputEmpresa'
   WHERE id = $id" ; 
$resultobj = mysqli_query($conexion, $queryobj);
if($resultobj){
    echo "Actualizado";
}



}
?>
