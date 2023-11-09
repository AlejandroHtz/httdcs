<?php


require '../conexion.php';
if(isset($_POST['actualizar'])){ 
 $id = $_POST['id'];
 $idupliad = $_POST['idupliad'];
 $usuario = $_POST['usuario'];
 $fechainidoc = $_POST['fechainidoc'];
 $fechafindoc = $_POST['fechafindoc'];
 $inpobservecionesdoc = $_POST['inpobservecionesdoc'];

 echo $query= "UPDATE upload SET 
 fecha_inicio= '$fechainidoc',
 fecha_fin= '$fechafindoc',
 observaciones = '$inpobservecionesdoc',
 fecha_modificacion = current_date,
 hora_modificacion = current_time,
 usuario_modificacion = '$usuario'
 where id_upload = $idupliad " ;

 $result = mysqli_query($conexion, $query);
if( $result){
  echo "<script> alert('Actualizado') ;window.location='detalles.php?id=$id'</script>";
}
else {
  echo "<script> alert('No actualizado') ;window.location='detalles.php?id=$id'</script>";
}
}



if(isset($_POST['cargar'])){
$inputTipodoc = $_POST['inputTipodoc']; 
$id = $_POST['idd'];
$usuario = $_POST['usuario'];


if(isset($_POST['inpobserveciones'])){ $inpobserveciones = $_POST['inpobserveciones']; } else {  $inpobserveciones = ''; }

if($inputTipodoc === '0' || empty($_FILES['file']['name']))
{
  echo "<script> alert('Selecciona el tipo de documento o el archivo') ;window.location='editar_mon.php?id=$id'</script>";
}else{
$micarpeta = "inventario/".$id."-mon";
if (!file_exists($micarpeta)) {
    mkdir( "inventario/".$id."-mon", 0777, true); 
 
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "inventario/".$id."-mon/".$fichero["name"]);
$ruta = "inventario/".$id."-mon/".$fichero["name"];
$nombre = $fichero["name"];
$query= "INSERT INTO documentos (id_doc,id_inventario,tipo_documento,ruta,nombre,fecha,hora,usuario,observaciones, lugar_documento  )
values ('',$id,'$inputTipodoc','$ruta','$nombre',current_date,current_time,'$usuario','$inpobserveciones', 'MONITORES')" ;
$result = mysqli_query($conexion, $query);
// Redirigiendo hacia atrás
if($result){
//header("Location: " . $_SERVER["HTTP_REFERER"]);
echo "<script> alert('Insertado') ;window.location='editar_mon.php?id=$id'</script>";
}else{echo "<script> alert('No Insertado') ;window.location='editar_mon.php?id=$id'</script>";}

} else {
// Cómo subir el archivo

$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "inventario/".$id."-mon/".$fichero["name"]);
$ruta = "inventario/".$id."-mon/".$fichero["name"];
$nombre = $fichero["name"];
$query= "INSERT INTO documentos (id_doc,id_inventario,tipo_documento,ruta,nombre,fecha,hora,usuario,observaciones, lugar_documento )
values ('',$id,'$inputTipodoc','$ruta','$nombre',current_date,current_time,'$usuario','$inpobserveciones', 'MONITORES')" ;
$result = mysqli_query($conexion, $query);
// Redirigiendo hacia atrás
if($result){
//header("Location: " . $_SERVER["HTTP_REFERER"]);
echo "<script> alert('Insertado') ;window.location='editar_mon.php?id=$id'</script>";
}else{echo "<script> alert('No Insertado') ;window.location='editar_mon.php?id=$id'</script>";}
}
}
}




if(isset($_POST['cargarPc'])){
  $inputTipodoc = $_POST['inputTipodoc']; 
  $id = $_POST['idd'];
  $usuario = $_POST['usuario'];
  
  
  if(isset($_POST['inpobserveciones'])){ $inpobserveciones = $_POST['inpobserveciones']; } else {  $inpobserveciones = ''; }
  
  if($inputTipodoc === '0' || empty($_FILES['file']['name']))
  {
    echo "<script> alert('Selecciona el tipo de documento o el archivo') ;window.location='editar_mon.php?id=$id'</script>";
  }else{
  $micarpeta = "inventario/".$id."-pc";
  if (!file_exists($micarpeta)) {
      mkdir( "inventario/".$id."-pc", 0777, true); 
   
  $fichero = $_FILES["file"];
  
  // Cargando el fichero en la carpeta "subidas"
  move_uploaded_file($fichero["tmp_name"], "inventario/".$id."-pc/".$fichero["name"]);
  $ruta = "inventario/".$id."-pc/".$fichero["name"];
  $nombre = $fichero["name"];
  $query= "INSERT INTO documentos (id_doc,id_inventario,tipo_documento,ruta,nombre,fecha,hora,usuario,observaciones, lugar_documento  )
  values ('',$id,'$inputTipodoc','$ruta','$nombre',current_date,current_time,'$usuario','$inpobserveciones', 'INVENTARIO')" ;
  $result = mysqli_query($conexion, $query);
  // Redirigiendo hacia atrás
  if($result){
  //header("Location: " . $_SERVER["HTTP_REFERER"]);
  echo "<script> alert('Insertado') ;window.location='edit_inv.php?id=$id'</script>";
  }else{echo "<script> alert('No Insertado') ;window.location='edit_inv.php?id=$id'</script>";}
  
  } else {
  // Cómo subir el archivo
  
  $fichero = $_FILES["file"];
  
  // Cargando el fichero en la carpeta "subidas"
  move_uploaded_file($fichero["tmp_name"], "inventario/".$id."-pc/".$fichero["name"]);
  $ruta = "inventario/".$id."-pc/".$fichero["name"];
  $nombre = $fichero["name"];
  $query= "INSERT INTO documentos (id_doc,id_inventario,tipo_documento,ruta,nombre,fecha,hora,usuario,observaciones, lugar_documento )
  values ('',$id,'$inputTipodoc','$ruta','$nombre',current_date,current_time,'$usuario','$inpobserveciones', 'INVENTARIO')" ;
  $result = mysqli_query($conexion, $query);
  // Redirigiendo hacia atrás
  if($result){
  //header("Location: " . $_SERVER["HTTP_REFERER"]);
  echo "<script> alert('Insertado') ;window.location='edit_inv.php?id=$id'</script>";
  }else{echo "<script> alert('No Insertado') ;window.location='edit_inv.php?id=$id'</script>";}
  }
  }
  }
?>