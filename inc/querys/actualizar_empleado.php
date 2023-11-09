<?php 
 require '../../conexion.php';

 if(isset($_POST['inpTodopla'])){
 $in = $_POST['inpTodopla'];
 
$sqlvaluno = "SELECT * from evaluadores
where nombre  = '$in'";
$registrvaluno = mysqli_query($conexion, $sqlvaluno);
$valuno = mysqli_fetch_array($registrvaluno);
$resultsqlevidvaluno= mysqli_num_rows($registrvaluno);
if($resultsqlevidvaluno > 0){
 $id  = $valuno["id"];
 $nombre  = $valuno["nombre"];
  echo "El evaluador ".$nombre.", si existe";
 
} else{
    $sqlvaldos = "SELECT * from evaluadores
where nombre  like '%$in%'";
$registrvaldos = mysqli_query($conexion, $sqlvaldos);
$valdos = mysqli_fetch_array($registrvaldos);
$resultsqlevidvaldos= mysqli_num_rows($registrvaldos);
   if($resultsqlevidvaldos > 0){ 
    $nombre2  = $valdos["nombre"];
    echo "".$nombre2;
}
}
}

//////////////////////////////

if(isset($_POST['inpTodopla2'])){
    $in = $_POST['inpTodopla2'];
    
   $sqlvaluno = "SELECT * from slack
   where email  = '$in'";
   $registrvaluno = mysqli_query($conexion, $sqlvaluno);
   $valuno = mysqli_fetch_array($registrvaluno);
   $resultsqlevidvaluno= mysqli_num_rows($registrvaluno);
   if($resultsqlevidvaluno > 0){
    $id  = $valuno["id"];
    $nombre  = $valuno["nombre"];
     echo "El usuario ".$nombre.", si existe en nuestras plataformas";
    
   } else{
       $sqlvaldos = "SELECT * from slack
   where email  like '%$in%'";
   $registrvaldos = mysqli_query($conexion, $sqlvaldos);
   $valdos = mysqli_fetch_array($registrvaldos);
   $resultsqlevidvaldos= mysqli_num_rows($registrvaldos);
      if($resultsqlevidvaldos > 0){ 
       $email  = $valdos["email"];
       echo "Si el correo no esta, ponte en contacto con el administrador despues de terminar tu registro; ".$email;
   }else{
    echo "Si el correo no te aparece en esta linea, ponte en contacto con el administrador despues de terminar tu registro";
   }
   }
   }



/////////////////////////////


if(isset($_POST['inputNombre'])){ 
    $id_user = $_SESSION['id']; 
    $inputNombre = $_POST['inputNombre'];
    $inputPosicion = $_POST['inputPosicion'];
    $inputDireccion = $_POST['inputDireccion'];
    $inputFingreso = $_POST['inputFingreso'];
    $inputDepartamento = $_POST['inputDepartamento'];
    $inputEmail = $_POST['inputEmail'];
    $inputEvaluador = $_POST['inputEvaluador'];
    $inputNSS = $_POST['inputNSS'];
    $inputPassword = $_POST['inputPassword'];
    $inputRegion = $_POST['inputRegion'];
    $idd = $_POST['idd'];
    $inputevalua = $_POST['inputevalua'];
    if($inputEvaluador > 0){
    $permiso = 3;
    }else{
        $permiso = 4;
    } 

    $sqlvaluno = "SELECT * from evaluadores
        where nombre  = '$inputevalua'";
        $registrvaluno = mysqli_query($conexion, $sqlvaluno);
        $valuno = mysqli_fetch_array($registrvaluno);
        $resultsqlevidvaluno= mysqli_num_rows($registrvaluno);
        if($resultsqlevidvaluno > 0){
         $id  = $valuno["id"];


    if(!empty($inputPassword)){
        $variable = ",users.password= password('$inputPassword') where id_slack = '$idd'";
    }else{ $variable = "where id_slack = '$idd'"; }

     $queryobj= "UPDATE users SET
        nombre = '$inputNombre' ,email='$inputEmail',permisos= '$permiso',evaluador= '$inputEvaluador',nss = '$inputNSS' $variable " ; 
        $resultobj = mysqli_query($conexion, $queryobj);
    if($queryobj){
        
        $queryobjem= "UPDATE empleado SET
            nombre_completo = '$inputNombre',nombreposicion ='$inputPosicion',
            correoelectronico='$inputEmail', fechadeingresoorganizacion='$inputFingreso',departamento='$inputDepartamento',direccion= '$inputDireccion',
            region = '$inputRegion',fecha_modificacion= current_date, 	
            hora_modificacion= current_time, usuario_modificacion = '$id_user' where id_slack = '$idd'" ; 
            $resultobjemp = mysqli_query($conexion, $queryobjem);
            

        $queryobsl= "UPDATE slack SET id_evaluadordos = '$id', nss= '$inputNSS' where id_slack = '$idd'" ; 
            $resultobjsl = mysqli_query($conexion, $queryobsl);

        if($inputEvaluador > 0){
            $sqlvalunoe = "SELECT * from evaluadores
            where correo  = '$inputEmail'";
            $registrvalunoe = mysqli_query($conexion, $sqlvalunoe);
            $valunoe = mysqli_fetch_array($registrvalunoe);
            $resultsqlevidvalunoe= mysqli_num_rows($registrvalunoe);

            if($resultsqlevidvalunoe > 0){}else{
                $sql = "SELECT s.id_slack, u.id from slack s
                left join users u on u.id_slack = s.id_slack
            where s.id_slack  = '$idd'";
            $registrval = mysqli_query($conexion, $sql);
            $val = mysqli_fetch_array($registrval);
            $id_s  = $val["id_slack"];
            $id_u  = $val["id"];

                
                $queryobj= "INSERT INTO evaluadores(nombre, puesto, direccion, correo, id_slack, id_user, eliminada)
                    values (
                    '$inputNombre',
                    '$inputPosicion',
                    '$inputDireccion',
                    '$inputEmail',
                    '$id_s',
                    '$id_u',
                    '0'
                    )
                    " ; 
                    $resultobj = mysqli_query($conexion, $queryobj);
            }

        }else{ 
            $sqlvalunoe = "SELECT * from evaluadores
            where correo  = '$inputEmail'";
            $registrvalunoe = mysqli_query($conexion, $sqlvalunoe);
            $valunoe = mysqli_fetch_array($registrvalunoe);
            $resultsqlevidvalunoe= mysqli_num_rows($registrvalunoe);

            if($resultsqlevidvalunoe > 0){
                $correo  = $valunoe["correo"];
                $queryobj= "DELETE FROM evaluadores WHERE  correo  = '$inputEmail'" ; 
                $resultobj = mysqli_query($conexion, $queryobj);
            }
        }



if($resultobjemp && $resultobjsl){
    echo "Actualizado";
}else{ echo "No actualizado"; }


    }else{ echo "No actualizado";}
  
}else{ echo "El evaluador es incorrecto";}
       
    
    
}
?>