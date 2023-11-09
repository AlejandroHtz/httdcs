<?php 
 require '../../conexion.php';
 $id_user = $_SESSION['id']; 
$inputNombre = $_POST['inputNombre'];
$inputAPaterno = $_POST['inputAPaterno'];
$inputAMaterno = $_POST['inputAMaterno'];
$inputPosicion = $_POST['inputPosicion'];
$inputDireccion = $_POST['inputDireccion'];
$inputFingreso = $_POST['inputFingreso'];
$inputDepartamento = $_POST['inputDepartamento'];
$inputEmail = $_POST['inputEmail'];
$inputEvaluador = $_POST['inputEvaluador'];
$inputNSS = $_POST['inputNSS'];
$inputPassword = $_POST['inputPassword'];
$inputRegion = $_POST['inputRegion'];


$sqlselecus = "SELECT * from slack
      where email = '$inputEmail'";
      $registrcus = mysqli_query($conexion, $sqlselecus);
      $rcompetencias = mysqli_fetch_array($registrcus);
      $resultsqlevid= mysqli_num_rows($registrcus);
      if($resultsqlevid > 0){
        $id_slack = $rcompetencias["id_slack"];
       
      } else{ 
        $id_slack = 0;
        }

$sqlvaluno = "SELECT * from empleado
        where correoelectronico  = '$inputEmail'";
        $registrvaluno = mysqli_query($conexion, $sqlvaluno);
        $valuno = mysqli_fetch_array($registrvaluno);
        $resultsqlevidvaluno= mysqli_num_rows($registrvaluno);
        if($resultsqlevidvaluno > 0){
         $nombre_completo  = $valuno["nombre_completo"];
          echo "El correo ya se encuentra vigente con el siguiente nombre: ".$nombre_completo.", Favor de verificar en la lista de empleados";
         
        } else{ 
          
        

$nombre_completo = ucfirst($inputNombre)." ".ucfirst($inputAPaterno)." ".ucfirst($inputAMaterno);
if($inputEvaluador > 0){
$permiso = 3;
}else{
    $permiso = 4;
} 

 $queryobj= "INSERT INTO users(
    nombre ,email, perfil, users.password,permisos,gerente,id_slack,evaluador,nss
       )
    values (
    '$nombre_completo',
    '$inputEmail',
    'user',
    password('$inputPassword'),
    '$permiso',
    '0',
    '$id_slack',
    '$inputEvaluador',
    '$inputNSS' )" ; 
    $resultobj = mysqli_query($conexion, $queryobj);


    $queryobjem= "INSERT INTO empleado(
      nombrepersona  ,apellidopaterno , apellidomaterno, nombre_completo ,nombreposicion ,
      correoelectronico, fechadeingresoorganizacion,departamento,direccion,region,id_slack,eliminada,fecha_insertado , 	
      hora_insercion, usuario_insercion 
         )
      values (
      '$inputNombre',
      '$inputAPaterno',
      '$inputAMaterno',
      '$nombre_completo',
      '$inputPosicion',
      '$inputEmail',
      '$inputFingreso',
      '$inputDepartamento',
      '$inputDireccion',
      '$inputRegion',
      '$id_slack',
      '0',
      current_date,
      current_time,
      '$id_user' )" ; 
      $resultobjemp = mysqli_query($conexion, $queryobjem);

    if($resultobj){
        
        if($inputEvaluador > 0){
          $sqlselecus = "SELECT * from users
           where email = '$inputEmail'";
           $registrcus = mysqli_query($conexion, $sqlselecus);
           $rcompetencias = mysqli_fetch_array($registrcus);
           $resultsqlevid= mysqli_num_rows($registrcus);
           if($resultsqlevid > 0){

            $sqlevalua = "SELECT * from evaluadores
           where correo = '$inputEmail'";
           $regisevalua = mysqli_query($conexion, $sqlevalua);
           $revalua = mysqli_fetch_array($regisevalua);
           

               $id_user = $rcompetencias["id"];
               
              $queryinse= "INSERT INTO evaluadores(
                 nombre, puesto, direccion ,correo, id_slack, id_user, eliminada
                    )
                 values (
                 '$nombre_completo',
                 '$inputPosicion',
                 '$inputDireccion',
                 '$inputEmail',
                 '$id_slack',
                 '$id_user',
                 '0' )" ;
                 $resultobjins = mysqli_query($conexion, $queryinse);
                 if($resultobjins){
                  echo "Agregado";
                 }
   
           }else{
            echo "Agregado";
           }
           }else{
            echo "Agregado";
           }


    }else{
        echo "No Agregado";
    }


   }


    
?>

