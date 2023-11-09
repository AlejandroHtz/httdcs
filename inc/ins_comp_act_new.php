<?php 
require '../conexion.php';
$id_slack = $_POST['id_slack']; 

 
$InpTrabEquipoUno = $_POST['InpTrabEquipoUno'];
$InpTrabEquipoDos = $_POST['InpTrabEquipoDos'];
$InpTrabEquipoTres = $_POST['InpTrabEquipoTres'];

$InpCentClienteUno = $_POST['InpCentClienteUno'];
$InpCentClienteDos = $_POST['InpCentClienteDos'];
$InpCentClienteTres = $_POST['InpCentClienteTres'];

$InpIntegridadUno = $_POST['InpIntegridadUno'];
$InpIntegridadDos = $_POST['InpIntegridadDos'];
$InpIntegridadTres = $_POST['InpIntegridadTres'];

$InpCompromisoUno = $_POST['InpCompromisoUno'];
$InpCompromisoDos = $_POST['InpCompromisoDos'];
$InpCompromisoTres = $_POST['InpCompromisoTres'];

$InpEmpatiaUno = $_POST['InpEmpatiaUno'];
$InpEmpatiaDos = $_POST['InpEmpatiaDos'];
$InpEmpatiaTres = $_POST['InpEmpatiaTres'];

$InpResponsabilidadUno = $_POST['InpResponsabilidadUno'];
$InpResponsabilidadDos = $_POST['InpResponsabilidadDos'];
$InpResponsabilidadTres = $_POST['InpResponsabilidadTres'];


$InpCompetencias_fuertes = $_POST['InpCompetencias_fuertes'];
$InpCompetencias_desarrollar = $_POST['InpCompetencias_desarrollar'];


 if($InpTrabEquipoUno =='' ||
 $InpTrabEquipoDos =='' ||
 $InpTrabEquipoTres =='' ||
 $InpCentClienteUno =='' ||
 $InpCentClienteDos =='' ||
 $InpCentClienteTres =='' ||
 $InpIntegridadUno =='' ||
 $InpIntegridadDos =='' ||
 $InpIntegridadTres =='' ||
 $InpCompromisoUno =='' ||
 $InpCompromisoDos =='' ||
 $InpCompromisoTres =='' ||
 $InpEmpatiaUno =='' ||
 $InpEmpatiaDos =='' ||
 $InpEmpatiaTres =='' ||
 $InpResponsabilidadUno =='' ||
 $InpResponsabilidadDos =='' ||
 $InpResponsabilidadTres ==''   ){
     echo "Todos los incisos deben de ir con su respectiva calificación";
    
 }else{
if($InpCompetencias_fuertes =='' || $InpCompetencias_desarrollar ==''){
    echo "Habilidades y características no pueden ir vacias";
}else{
    $puntaje_obtenido = ((int)$InpTrabEquipoUno +
    (int)$InpTrabEquipoDos +
    (int)$InpTrabEquipoTres +
    (int)$InpCentClienteUno +
    (int)$InpCentClienteDos +
    (int)$InpCentClienteTres +
    (int)$InpIntegridadUno +
    (int)$InpIntegridadDos + 
    (int)$InpIntegridadTres +
    (int)$InpCompromisoUno +
    (int)$InpCompromisoDos +
    (int)$InpCompromisoTres +
    (int)$InpEmpatiaUno +
    (int)$InpEmpatiaDos +
    (int)$InpEmpatiaTres +
    (int)$InpResponsabilidadUno +
    (int)$InpResponsabilidadDos +
    (int)$InpResponsabilidadTres );
    if($puntaje_obtenido <= 31 ){
        $nivel_desemp = "DESEMPEÑO MALO"; 
       }
       elseif(($puntaje_obtenido >= 32) && ($puntaje_obtenido <= 45) ){
           $nivel_desemp = "DESEMPEÑO REGULAR"; 
       }elseif(($puntaje_obtenido >= 46) && ($puntaje_obtenido <= 59)){
           $nivel_desemp = "DESEMPEÑO BUENO"; 
       }elseif($puntaje_obtenido >= 60){
           $nivel_desemp = "EXCELENTE DESEMPEÑO"; 
       }else { $nivel_desemp = "LLENAR FORMULARIO";  }

     $queryobj= "UPDATE competencias_new SET
        te_uno = '$InpTrabEquipoUno',
        te_dos = '$InpTrabEquipoDos',
        te_tres = '$InpTrabEquipoTres',
        cec_uno = '$InpCentClienteUno',
        cec_dos = '$InpCentClienteDos',
        cec_tres = '$InpCentClienteTres',
        i_uno = '$InpIntegridadUno',
        i_dos = '$InpIntegridadDos',
        i_tres = '$InpIntegridadTres',
        c_uno = '$InpCompromisoUno',
        c_dos = '$InpCompromisoDos',
        c_tres = '$InpCompromisoTres',
        e_uno = '$InpEmpatiaUno',
        e_dos = '$InpEmpatiaDos',
        e_tres = '$InpEmpatiaTres',
        r_uno = '$InpResponsabilidadUno',
        r_dos = '$InpResponsabilidadDos',
        r_tres = '$InpResponsabilidadTres',  
        puntaje_obtenido = $puntaje_obtenido,
        nivel_de_desempeno = '$nivel_desemp',
        competencias_fuertes = '$InpCompetencias_fuertes',
        competencias_desarrollar = '$InpCompetencias_desarrollar'
        WHERE id_slack = $id_slack" ; 
$resultobj = mysqli_query($conexion, $queryobj); 

$queryobjupd= "UPDATE objetivos_info_new a 
inner join (SELECT (sum(calificacion_ponderada)* 0.8) AS calificacion_objetivos , id_slack 
FROM `objetivos_new` where id_slack =$id_slack ) as b  on b.id_slack = a.id_slack
set a.calificacion_objetivos = Round(b.calificacion_objetivos)"  ;

$resultobjupd = mysqli_query($conexion, $queryobjupd);

 $queryobjupunt= "UPDATE objetivos_info_new a 
inner join (SELECT round(((puntaje_obtenido / 72) * 0.2)*100) as puntaje_obtenido , id_slack 
FROM `competencias_new` where id_slack =$id_slack ) as b  on b.id_slack = a.id_slack
set a.calific_competencias = b.puntaje_obtenido " ;
$resultobjupunt = mysqli_query($conexion, $queryobjupunt);

$queryobjuclas="UPDATE objetivos_info_new SET calific_total_evaluacion_desempeno = (calificacion_objetivos + calific_competencias)
WHERE id_slack =$id_slack" ;

$resultobjuclas = mysqli_query($conexion, $queryobjuclas);


if($queryobj && $resultobjupd && $resultobjupunt && $resultobjuclas){
     		echo "Actualizado";
     	} else {echo "No Actualizado"; }
}

}


?>