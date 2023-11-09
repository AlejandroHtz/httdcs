<?php 
require '../../conexion.php';
$user = $_SESSION['email']; 
if(isset($_POST['inpTodo'])){
echo "tabla";
}


if(isset($_POST['inputNombre'])){
     $inputNombre = $_POST['inputNombre'];
     $inputApellidos = $_POST['inputApellidos'];
     $inputLocalidad = $_POST['inputLocalidad'];
     $inputEmail = $_POST['inputEmail'];
     $inputPuesto = $_POST['inputPuesto'];
     $inputfsolicitud = $_POST['inputfsolicitud'];
     $inputfcontrato = $_POST['inputfcontrato'];
     $inputIngreso = $_POST['inputIngreso'];
    if(isset($_POST['gridCheck'])){
     $gridCheck = "SI";
     $inputDomicilio = $_POST['inputDomicilio'];
     $inputinterior = $_POST['inputinterior'];
     $inputExterior = $_POST['inputExterior'];
     $inputCP = $_POST['inputCP'];
     $inputEstado = $_POST['inputEstado'];
     $inputReferencia = $_POST['inputReferencia'];
     $inputTelefono = $_POST['inputTelefono'];
    }else{
         $gridCheck = "NO";
         $inputDomicilio = "";
         $inputinterior = "";;
         $inputExterior = "";;
         $inputCP = "";;
         $inputEstado = "";;
         $inputReferencia = "";;
         $inputTelefono = "";;
    }


    $sqlinser = "INSERT INTO altas
    (
        nombre, 
        apellidos, 
        nombre_completo, 
        localidad, 
        email, 
        puesto, 
        fecha_solicitud, 
        fecha_contrato, 
        fecha_ingreso, 
        foraneo, 
        domicilio, 
        ninterior, 
        nexterior, 
        cp, 
        estado, 
        referencias, 
        telefono, 
        estatus,
        solicitante,
        fecha_insercion
    
    )
    VALUES(
        '$inputNombre',
        '$inputApellidos',
        '$inputNombre $inputApellidos',
        '$inputLocalidad',
        '$inputEmail',
        '$inputPuesto',
        '$inputfsolicitud',
        '$inputfcontrato',
        '$inputIngreso',
        '$gridCheck',
        '$inputDomicilio',
        '$inputinterior',
        '$inputExterior',
        '$inputCP',
        '$inputEstado',
        '$inputReferencia',
        '$inputTelefono',
        'EN PROCESO',
        '$user',
        current_date
         );";
    $resultinser = mysqli_query($conexion, $sqlinser);

    if($resultinser){

    ECHO "AGREGADO";
}
}
?>
