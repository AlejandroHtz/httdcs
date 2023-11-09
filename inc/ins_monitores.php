<?php 
require '../conexion.php';

$InputNumSerie = $_POST['InputNumSerie']; 
$InputNumMonitor = $_POST['InputNumMonitor'];
$InputComentarios = $_POST['InputComentarios'];
$Inptipo = $_POST['Inptipo'];
$marca = $_POST['InputMarca'];
$modelo = $_POST['InputModelo'];
$InputFactura = $_POST['InputFactura'];
$Inputcosto = $_POST['Inputcosto'];
$InputEmpresa = $_POST['InputEmpresa'];

if(empty($InputNumSerie) && empty($InputNumMonitor)){
    Echo "El numero de serie y monitor no pueden ir vacios";
}else{

$querydiscaredo =  "SELECT * from monitores where num_serie = '$InputNumSerie'";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
$result= mysqli_num_rows($resdiscaredo);
if ($result > 0) { 
echo "Ya existe el registro";

} else {

$queryobj= "INSERT INTO monitores(
    tipo,
    num_serie,
    num_equipo,
    marca,
    modelo,
    comentarios,
    factura ,
    costo ,
    empresa
   
   )
values (
    '$Inptipo',
    '$InputNumSerie',
    '$InputNumMonitor',
    '$marca',
    '$modelo',
    '$InputComentarios',
    '$InputFactura',
    '$Inputcosto',
    '$InputEmpresa'
  
)
" ; 
$resultobj = mysqli_query($conexion, $queryobj);
if($resultobj){
    echo "Insertado";
}


}
}
?>
