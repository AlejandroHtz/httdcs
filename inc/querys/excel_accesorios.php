<?php
require '../../conexion.php';
 if($_SESSION['email']==="admin@netsoft.com") { 
$file="accesorios_" . date('Y:m:d:m:s').".xls";
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
header("Content-Disposition: attachment; filename=$file");


?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<table >
  		<thead>
		<tr >
  <td>Id</td>
  <td>Tipo</td>
  <td>Serie</td>
  <td>Numero de equipo</td>
  <td>Marca</td>
  <td>Modelo</td>
  <td>Comentarios</td>
  <td>Factura</td>
  <td>Costo</td>
  <td>Empresa</td>
	</tr>
 </thead>
		<?php 

$query = "SELECT * from monitores order by id desc"  ;
$resdiscaredo = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resdiscaredo)) { ?>
	<tr>
<td ><?php echo $fila[0] ?></td>
<td ><?php echo $fila[1] ?></td>
<td ><?php echo $fila[2] ?></td>
<td ><?php echo $fila[3] ?></td>
<td ><?php echo $fila[4] ?></td>
<td ><?php echo $fila[5] ?></td>
<td ><?php echo $fila[6] ?></td>
<td ><?php echo $fila[7] ?></td>
<td ><?php echo $fila[8] ?></td>
<td ><?php echo $fila[9] ?></td>
		</tr>
	<?php 
	} 
	 ?>
    </table>
    </body>
</html>

<?php } else {
    echo'<script type="text/javascript">
    alert("No debes de editar la url");
    window.location.href="../";
    </script>';
   } ?>