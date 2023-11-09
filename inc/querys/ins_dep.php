<?php
require '../../conexion.php';
if(isset($_POST['InpDepartamento'])){
$InpDepartamento = $_POST['InpDepartamento']; 
$InpDireccion = $_POST['InpDireccion']; 
$InpAnio = $_POST['InpAnio']; 

if($InpDepartamento ==="" || $InpDireccion ==="" || $InpAnio ===""){
    echo "Los campos no pueden ir vacios";
}else{

$sql = mysqli_query ($conexion,"SELECT puesto from departamentos where puesto = '$InpDepartamento'");
		
$result= mysqli_num_rows($sql);
if ($result > 0) { echo "Ya esta registrado el departamento: $InpDepartamento"; }else{

$queryobj= "INSERT INTO departamentos(
puesto, direccion, estatus, anio
   )
values (
'$InpDepartamento',
'$InpDireccion',
0,
'$InpAnio'
)
" ; 
$resultobj = mysqli_query($conexion, $queryobj);
 
if($resultobj){
    echo "Insertado";
} else {echo "No Insertado"; }
}
}
}
?>