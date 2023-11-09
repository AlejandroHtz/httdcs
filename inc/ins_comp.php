<?php 
require '../conexion.php';
$id_slack = $_POST['id_slack'];  
$id_user = $_POST['id_user']; 
 
$InpServClienteUno = $_POST['InpServClienteUno'];
$InpServClienteDos = $_POST['InpServClienteDos'];
$InpCompValAgreUno = $_POST['InpCompValAgreUno'];
$InpCompValAgreDos = $_POST['InpCompValAgreDos'];
$InpTrabEquipComunicUno = $_POST['InpTrabEquipComunicUno'];
$InpTrabEquipComunicDos = $_POST['InpTrabEquipComunicDos'];
$InpTrabEquipComunicTres = $_POST['InpTrabEquipComunicTres'];
$InpCompValAgreTres = $_POST['InpCompValAgreTres'];
$InpTrabEquipComunicCuatro = $_POST['InpTrabEquipComunicCuatro'];

$InpPlaneaOrganizUno = $_POST['InpPlaneaOrganizUno'];
$InpPlaneaOrganizDos = $_POST['InpPlaneaOrganizDos'];


$InpHabCaractActFuerPerso = $_POST['InpHabCaractActFuerPerso'];
$InpHabCaractActDesaPerson = $_POST['InpHabCaractActDesaPerson'];


 if($InpServClienteUno =='' || $InpServClienteDos =='' || $InpCompValAgreUno =='' || $InpCompValAgreDos =='' || $InpTrabEquipComunicUno =='' || $InpTrabEquipComunicDos =='' || $InpTrabEquipComunicTres =='' ||
   $InpPlaneaOrganizUno ==''  || $InpCompValAgreTres =='' || $InpTrabEquipComunicCuatro =='' || $InpPlaneaOrganizDos =='' ){
     echo "Todos los incisos deben de ir con su respectiva calificación";
    
 }else{
if($InpHabCaractActFuerPerso =='' || $InpHabCaractActDesaPerson ==''){
    echo "Habilidades y características no pueden ir vacias";
}else{
    $puntaje_obtenido = ((int)$InpServClienteUno +
    (int)$InpServClienteDos +
    (int)$InpCompValAgreUno +
    (int)$InpCompValAgreDos +
    (int)$InpTrabEquipComunicUno +
    (int)$InpTrabEquipComunicDos +
    (int)$InpTrabEquipComunicTres +
    (int)$InpCompValAgreTres +
    (int)$InpTrabEquipComunicCuatro +
   
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

     $queryobj= "INSERT INTO competencias(
    sc_uno,
    sc_dos,
    cva_uno,
    cva_dos,
    tec_uno,
    tec_dos,
    tec_tres,
    valagre_tres,
    valagre_cuatro,

    po_uno,
    po_dos,

   
    puntaje_obtenido,
    nivel_de_desempeno,
    Hab_caracteristic_act_fuertes_persona,
    Hab_característic_act_desarrollar_persona,
    id_slack,
    usuario_insercion
   )
values (
    '$InpServClienteUno',
    '$InpServClienteDos',
    '$InpCompValAgreUno',
    '$InpCompValAgreDos',
    '$InpTrabEquipComunicUno',
    '$InpTrabEquipComunicDos',
    '$InpTrabEquipComunicTres',
    '$InpCompValAgreTres',
    '$InpTrabEquipComunicCuatro',

    '$InpPlaneaOrganizUno',
    '$InpPlaneaOrganizDos',


    $puntaje_obtenido,
    '$nivel_desemp',
    '$InpHabCaractActFuerPerso',
    '$InpHabCaractActDesaPerson',
    '$id_slack',
    '$id_user'
)
" ; 
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
     		echo "Insertado";
     	} else {echo "No Insertado"; }
}

}


?>