<?php
require '../../conexion.php';
  

 $var = $_POST['inpTodopla'];

    if(!empty($var)){
 
        $consulta = "where 
        (nombre_completo like '%$var%' or 
        nombreposicion  like '%$var%' or
        departamento  like '%$var%' or
        correoelectronico  like '%$var%' or
        region  like '%$var%'  )"; }
else { $consulta = ''; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>Nombre completo</td>
<td>Puesto</td>
<td>Departamento</td>
<td>Email</td>
<td>Fecha de ingreso</td> 
<td>Region</td>
<td></td>
</tr>
</thead>";
$querydiscaredo =  "SELECT * from empleado $consulta
order by nombre_completo desc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
$numero = mysqli_num_rows($resdiscaredo);
echo 'Total de registros: ' . $numero; ?><br><?php

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>

<td>".$filaresdiscaredo['nombre_completo']."</td>
<td>".$filaresdiscaredo['nombreposicion']."</td>
<td>".$filaresdiscaredo['departamento']."</td>
<td>".$filaresdiscaredo['correoelectronico']."</td>
<td>".$filaresdiscaredo['fechadeingresoorganizacion']."</td>
<td>".$filaresdiscaredo['region']."</td>
<td>".$filaresdiscaredo['id_slack']."</td>
<td><a href='../inc/view.php?id=$filaresdiscaredo[id_slack]'>Ver</a>";"</td>
    </tr>
    
    </tbody>";
        }
    echo "</table>";
