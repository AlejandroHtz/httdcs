<?php 
require '../conexion.php';
$id_slack = $_POST['id_slack']; 

 
$InpServClienteUno = $_POST['InpServClienteUno'];
$InpServClienteDos = $_POST['InpServClienteDos'];
$InpCompValAgreUno = $_POST['InpCompValAgreUno'];
$InpCompValAgreDos = $_POST['InpCompValAgreDos'];

$InpTrabEquipComunicDos = $_POST['InpTrabEquipComunicDos'];
$InpTrabEquipComunicTres = $_POST['InpTrabEquipComunicTres'];

 $InpCompValAgreTres = $_POST['InpCompValAgreTres'];
 $InpTrabEquipComunicCuatro = $_POST['InpTrabEquipComunicCuatro'];

$InpPlaneaOrganizUno = $_POST['InpPlaneaOrganizUno'];
$InpPlaneaOrganizDos = $_POST['InpPlaneaOrganizDos'];

$InpTrabEquipComunicUno = $_POST['InpTrabEquipComunicUno'];

$InpHabCaractActFuerPerso = $_POST['InpHabCaractActFuerPerso'];
$InpHabCaractActDesaPerson = $_POST['InpHabCaractActDesaPerson'];


 if($InpServClienteUno =='' || $InpServClienteDos =='' || $InpCompValAgreUno =='' || $InpCompValAgreDos =='' ||  $InpTrabEquipComunicDos =='' || $InpTrabEquipComunicTres =='' ||
   $InpPlaneaOrganizUno =='' || $InpCompValAgreTres =='' || $InpTrabEquipComunicCuatro =='' || $InpPlaneaOrganizDos =='' || $InpTrabEquipComunicUno == ''  ){
     echo "Todos los incisos deben de ir con su respectiva calificación";
    
 }else{
if($InpHabCaractActFuerPerso =='' || $InpHabCaractActDesaPerson ==''){
    echo "Habilidades y características no pueden ir vacias";
}else{
    $puntaje_obtenido = ((int)$InpServClienteUno +
    (int)$InpServClienteDos +
    (int)$InpCompValAgreUno +
    (int)$InpCompValAgreDos +
    (int)$InpCompValAgreTres +
    (int)$InpTrabEquipComunicCuatro +
    (int)$InpTrabEquipComunicDos +
    (int)$InpTrabEquipComunicTres +
    (int)$InpTrabEquipComunicUno +
    (int)$InpPlaneaOrganizUno +
    (int)$InpPlaneaOrganizDos  );
    if($puntaje_obtenido < 12 ){
        $nivel_desemp = "DESEMPEÑO MALO"; 
       }
       elseif($puntaje_obtenido < 23 ){
           $nivel_desemp = "DESEMPEÑO REGULAR"; 
       }elseif($puntaje_obtenido == 37){
           $nivel_desemp = "EXCELENTE DESEMPEÑO"; 
       }elseif($puntaje_obtenido < 37){
           $nivel_desemp = "DESEMPEÑO BUENO"; 
       }else { $nivel_desemp = "LLENAR FORMULARIO";  } 

     $queryobj= "UPDATE competencias SET
        sc_uno = '$InpServClienteUno',
        sc_dos = '$InpServClienteDos',
        cva_uno = '$InpCompValAgreUno',
        cva_dos = '$InpCompValAgreDos', 
        tec_uno = '$InpTrabEquipComunicUno',
        tec_dos = '$InpTrabEquipComunicDos',
        tec_tres = '$InpTrabEquipComunicTres',
        
        valagre_tres = '$InpCompValAgreTres' ,
        valagre_cuatro= '$InpTrabEquipComunicCuatro',
     
        po_uno = '$InpPlaneaOrganizUno',
        po_dos = '$InpPlaneaOrganizDos',
    
     
        puntaje_obtenido = $puntaje_obtenido,
        nivel_de_desempeno = '$nivel_desemp',
        Hab_caracteristic_act_fuertes_persona = '$InpHabCaractActFuerPerso',
        Hab_característic_act_desarrollar_persona = '$InpHabCaractActDesaPerson'
        WHERE id_slack = $id_slack" ; 
$resultobj = mysqli_query($conexion, $queryobj); 

$queryobjupd= "UPDATE objetivos_info a 
inner join (SELECT (sum(calificacion_ponderada)* 0.8) AS calificacion_objetivos , id_slack 
FROM `objetivos` where id_slack =$id_slack ) as b  on b.id_slack = a.id_slack
set a.calificacion_objetivos = Round(b.calificacion_objetivos)"  ;

$resultobjupd = mysqli_query($conexion, $queryobjupd);

 $queryobjupunt= "UPDATE objetivos_info a 
inner join (SELECT round(((puntaje_obtenido / 52) * 0.2)*100) as puntaje_obtenido , id_slack 
FROM `competencias` where id_slack =$id_slack ) as b  on b.id_slack = a.id_slack
set a.calific_competencias = b.puntaje_obtenido " ;
$resultobjupunt = mysqli_query($conexion, $queryobjupunt);

$queryobjuclas="UPDATE objetivos_info SET calific_total_evaluacion_desempeno = (calificacion_objetivos + calific_competencias)
WHERE id_slack =$id_slack" ;

$resultobjuclas = mysqli_query($conexion, $queryobjuclas);


if($queryobj && $resultobjupd && $resultobjupunt && $resultobjuclas){
     		echo "Actualizado";
     	} else {echo "No Actualizado"; }
}

}


?>