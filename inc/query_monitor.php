<?php 
 require ('../conexion.php');




$querydiscaredo =  "SELECT * from monitores order by id desc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);
$numfilas = $resdiscaredo->num_rows;
echo "El número de elementos son ".$numfilas."";

echo "
<a type='button' href='querys/excel_accesorios.php' class='btn btn-primary'>Excel</a>
<table class='table table-hover table-condensed'>
<thead> 
<tr >
  <td>Id</td>
  <td>Tipo</td>
  <td>Serie</td>
  <td>Numero de equipo</td>
  <td>Marca</td>
  <td>Modelo</td>
  <td>Comentarios</td>
  <td>Empresa</td>
  <td></td>

</tr>
</thead>";

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr> 
    
    <td>".$filaresdiscaredo['0']."</td>
    <td>".$filaresdiscaredo['1']."</td>
    <td>".$filaresdiscaredo['2']."</td>
    <td >".$filaresdiscaredo['3']."</td>
    <td>".$filaresdiscaredo['4']."</td>
    <td style='width:50px'>".$filaresdiscaredo['5']."</td>
    <td style='width:50px'>".$filaresdiscaredo['6']."</td>
    <td>".$filaresdiscaredo['9']."</td>
    <td><a class='form-check-input' href= 'editar_mon.php?id=".$filaresdiscaredo['0']."' >Editar</a></td> 
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

