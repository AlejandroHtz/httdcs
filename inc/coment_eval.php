<?php 


require '../conexion.php';
$id_slack = $_SESSION['id_slack'];

if(isset($_POST['InpComEvalu'])){
$InpComEvalu = $_POST['InpComEvalu'];

$queryobjuclas="UPDATE objetivos_info SET 
comentarioevaluado = '$InpComEvalu'
WHERE id_slack =$id_slack" ;

$resultobjuclas = mysqli_query($conexion, $queryobjuclas); 

if($resultobjuclas){
echo "<script> alert('Guardado') ;window.location='mievaluacion.php'</script>"; 
}else{
echo "<script> alert('No Guardado') ;window.location='mievaluacion.php'</script>";    
}

}

if(isset($_POST['InpComEvalunew'])){

    $InpComEvalunew = $_POST['InpComEvalunew'];

$queryobjuclas="UPDATE objetivos_info_new SET 
comentarioevaluado = '$InpComEvalunew'
WHERE id_slack =$id_slack" ;

$resultobjuclas = mysqli_query($conexion, $queryobjuclas); 

if($resultobjuclas){
echo "<script> alert('Guardado') ;window.location='mievaluacion2023.php'</script>"; 
}else{
echo "<script> alert('No Guardado') ;window.location='mievaluacion2023.php'</script>";    
}

}

