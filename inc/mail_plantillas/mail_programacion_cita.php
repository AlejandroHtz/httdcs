<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require ('../../conexion.php');

$registroa = mysqli_query($conexion, "SELECT servicio,DATEDIFF(fecha_vencimiento,NOW()),date_format(fecha_vencimiento,'%d-%m-%Y') 
FROM plataformas
WHERE fecha_vencimiento <> '' and DATEDIFF(fecha_vencimiento,NOW()) between 0 and 45
ORDER BY fecha_vencimiento asc ");


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title></title>
</head>
<body>
  <img src="" alt="">
  <div class="container">
    <div class="row">
      <img src="../img/netsoft.png" alt="" style="max-width: 350px;">
    </div>
    <h4>Con el fin de garantizar su presencia online, le enviamos una lista de los contratos que están cerca de expirar. 
      Si no renueva antes de la fecha de vencimiento, sus sitios web y otros servicios pueden dejar de funcionar
. </h4>
   <center>
    <table class="table table-bordered table-responsive-lg table-hover text-center" style='font-size: 13px;'>
        <thead style=" background-color: #ffc107;">
          <tr>
            <th scope="col">Servicio</th>
            <th scope="col">Dias a expirar</th>
            <th scope="col">Fecha de vencimiento</th>

         </tr>
        </thead>
        <?php while ($fila = mysqli_fetch_array($registroa)) { ?>
          <tbody>
    <tr>
      <td><?php echo $fila[0]; ?></td> 
      <td><?php echo $fila[1]; ?></td>
      <td><?php echo $fila[2]; ?></td>
  </tr>
  <?php } ?>
</tbody>
</table>
</center> 
<style>
  th, td {
    border: 1px solid blue;
    width: 100px;
    word-wrap: break-word;
}
</style>
<br>
    <div class="row">
      <p style="font-size: 12px;">Este correo electrónico y/o el material adjunto es para uso exclusivo de la persona o la entidad a la que expresamente se le ha enviado, y puede contener información confidencial y/o material privilegiado.Queda expresamente prohibida cualquier revisión, retransmisión, difusión o cualquier otro uso de este correo, por personas o entidades distintas a las del destinatario legitimo</u></strong></p>
    </div>
  </div>



</html>

<?php


?>