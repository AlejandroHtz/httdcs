<?php
require '../../conexion.php';
 $var1 = $_POST['inpTodo'];
if(!empty($var1)){
    $consulta = "where 
    (os like '%$var1%' or 
    hist_comodo.name  like '%$var1%' or
    os_name  like '%$var1%' or
    model  like '%$var1%' or
    processor  like '%$var1%' or
    serial_number  like '%$var1%' or
    comentarios  like '%$var1%' or
    system_manufacturer  like '%$var1%'  )";
}else { $consulta = ''; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>os</td>
<td>name</td>


<td>last_activity</td>
<td>model</td> 
<td>processor</td>
<td>serial_number</td>
<td>system_model</td>
<td>system_manufacturer</td>
<td>Clasificacion</td>
<td>comentarios</td>
<td>Ocupado</td>
  
</tr>
</thead>";
 $querydiscaredo =  "SELECT * from hist_comodo $consulta
order by ocupado asc, hist_comodo.name asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);

$querysi =  "SELECT * from hist_comodo where ocupado = 'SI' 
order by hist_comodo.name asc";
$resdiscaredosi = mysqli_query($conexion, $querysi);
$numerosi = mysqli_num_rows($resdiscaredosi);

$queryno =  "SELECT * from hist_comodo where ocupado = 'NO' 
order by hist_comodo.name asc";
$resdiscaredono = mysqli_query($conexion, $queryno);
$numerono = mysqli_num_rows($resdiscaredono);

$numero = mysqli_num_rows($resdiscaredo);
echo 'Número de total de laptops: ' . $numero; ?><br><?php 
echo 'Ocupadas: ' . $numerosi; ?><br><?php 
echo 'stock: ' . $numerono; ?><br><?php 
while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
    
<td><a href='edit_hist.php?id=".$filaresdiscaredo['id']."' >".$filaresdiscaredo['id']."</a></td> 
<td>".$filaresdiscaredo['os']."</td>
<td>".$filaresdiscaredo['name']."</td>

<td>".$filaresdiscaredo['last_activity']."</td>
<td>".$filaresdiscaredo['model']."</td>
<td>".$filaresdiscaredo['processor']."</td>
<td>".$filaresdiscaredo['serial_number']."</td>
<td>".$filaresdiscaredo['system_model']."</td>
<td>".$filaresdiscaredo['system_manufacturer']."</td>
<td>".$filaresdiscaredo['clasificacion']."</td>
<td>".$filaresdiscaredo['comentarios']."</td>
<td>".$filaresdiscaredo['ocupado']."</td>
    
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

