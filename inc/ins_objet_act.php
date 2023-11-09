<?php 
require '../conexion.php';
 $id_slack = $_POST['id_slack']; 
 $id_user = $_POST['id_user'];



 $InpObjetivoUno = $_POST['InpObjetivoUno'];

 $InpPesoObjetivoUno = $_POST['InpPesoObjetivoUno'];
 $InpObjUnoActClaveUnoUno = $_POST['InpObjUnoActClaveUnoUno'];
 $InpObjUnoPesoActUnoUno = $_POST['InpObjUnoPesoActUnoUno'];
 $InpObjUnoMetaActUnoUno = $_POST['InpObjUnoMetaActUnoUno'];
 $InpObjUnoCalifActUnoUno= $_POST['InpObjUnoCalifActUnoUno'];
 $InpObjUnoComentUnoUno = $_POST['InpObjUnoComentUnoUno'];

 $InpObjUnoActClaveDosUno = $_POST['InpObjUnoActClaveDosUno'];
 $InpObjUnoPesoActDosUno = $_POST['InpObjUnoPesoActDosUno'];
 $InpObjUnoMetaActDosUno = $_POST['InpObjUnoMetaActDosUno'];
 $InpObjUnoCalifActDosUno = $_POST['InpObjUnoCalifActDosUno'];
 $InpObjUnoComentDosUno = $_POST['InpObjUnoComentDosUno'];

 $InpObjUnoActClaveTresUno = $_POST['InpObjUnoActClaveTresUno'];
 $InpObjUnoPesoActTresUno = $_POST['InpObjUnoPesoActTresUno'];
 $InpObjUnoMetaActTresUno = $_POST['InpObjUnoMetaActTresUno'];
 $InpObjUnoCalifActTresUno = $_POST['InpObjUnoCalifActTresUno'];
 $InpObjUnoComentTresUno = $_POST['InpObjUnoComentTresUno'];

 $InpObjUnoActClaveCuatroUno = $_POST['InpObjUnoActClaveCuatroUno'];
 $InpObjUnoPesoActCuatroUno = $_POST['InpObjUnoPesoActCuatroUno'];
 $InpObjUnoMetaActCuatroUno = $_POST['InpObjUnoMetaActCuatroUno'];
 $InpObjUnoCalifActCuatroUno = $_POST['InpObjUnoCalifActCuatroUno'];
 $InpObjUnoComentCuatroUno = $_POST['InpObjUnoComentCuatroUno'];





 $InpObjetivoDos = $_POST['InpObjetivoDos'];
 $InpPesoObjetivoDos = $_POST['InpPesoObjetivoDos'];

 $InpObjDosActClaveUnoDos = $_POST['InpObjDosActClaveUnoDos'];
 $InpObjDosPesoActUnoDos = $_POST['InpObjDosPesoActUnoDos'];
 $InpObjDosMetaActUnoDos = $_POST['InpObjDosMetaActUnoDos'];
 $InpObjDosCalifActUnoDos = $_POST['InpObjDosCalifActUnoDos'];
 $InpObjDosComentUnoDos = $_POST['InpObjDosComentUnoDos'];

 $InpObjDosActClaveDosDos = $_POST['InpObjDosActClaveDosDos'];
 $InpObjDosPesoActDosDos = $_POST['InpObjDosPesoActDosDos'];
 $InpObjDosMetaActDosDos = $_POST['InpObjDosMetaActDosDos'];
 $InpObjDosCalifActDosDos = $_POST['InpObjDosCalifActDosDos'];
 $InpObjDosComentDosDos = $_POST['InpObjDosComentDosDos'];

 $InpObjDosActClaveTresDos = $_POST['InpObjDosActClaveTresDos'];
 $InpObjDosPesoActTresDos = $_POST['InpObjDosPesoActTresDos'];
 $InpObjDosMetaActTresDos = $_POST['InpObjDosMetaActTresDos'];
 $InpObjDosCalifActTresDos = $_POST['InpObjDosCalifActTresDos'];
 $InpObjDosComentTresDos = $_POST['InpObjDosComentTresDos'];

 $InpObjDosActClaveCuatroDos = $_POST['InpObjDosActClaveCuatroDos'];
 $InpObjDosPesoActCuatroDos = $_POST['InpObjDosPesoActCuatroDos'];
 $InpObjDosMetaActCuatroDos = $_POST['InpObjDosMetaActCuatroDos'];
 $InpObjDosCalifActCuatroDos = $_POST['InpObjDosCalifActCuatroDos'];
 $InpObjDosComentCuatroDos = $_POST['InpObjDosComentCuatroDos'];




 $InpObjetivoTres = $_POST['InpObjetivoTres'];
 $InpPesoObjetivoTres = $_POST['InpPesoObjetivoTres'];

 $InpObjTresActClaveUnoTres = $_POST['InpObjTresActClaveUnoTres'];
 $InpObjTresPesoActUnoTres = $_POST['InpObjTresPesoActUnoTres'];
 $InpObjTresMetaActUnoTres = $_POST['InpObjTresMetaActUnoTres'];
 $InpObjTresCalifActUnoTres = $_POST['InpObjTresCalifActUnoTres'];
 $InpObjTresComentUnoTres = $_POST['InpObjTresComentUnoTres'];

 $InpObjTresActClaveDosTres = $_POST['InpObjTresActClaveDosTres'];
 $InpObjTresPesoActDosTres = $_POST['InpObjTresPesoActDosTres'];
 $InpObjTresMetaActDosTres = $_POST['InpObjTresMetaActDosTres'];
 $InpObjTresCalifActDosTres = $_POST['InpObjTresCalifActDosTres'];
 $InpObjTresComentDosTres = $_POST['InpObjTresComentDosTres'];

 $InpObjTresActClaveTresTres = $_POST['InpObjTresActClaveTresTres'];
 $InpObjTresPesoActTresTres = $_POST['InpObjTresPesoActTresTres'];
 $InpObjTresMetaActTresTres = $_POST['InpObjTresMetaActTresTres'];
 $InpObjTresCalifActTresTres = $_POST['InpObjTresCalifActTresTres'];
 $InpObjTresComentTresTres = $_POST['InpObjTresComentTresTres'];

 $InpObjTresActClaveCuatroTres = $_POST['InpObjTresActClaveCuatroTres'];
 $InpObjTresPesoActCuatroTres = $_POST['InpObjTresPesoActCuatroTres'];
 $InpObjTresMetaActCuatroTres = $_POST['InpObjTresMetaActCuatroTres'];
 $InpObjTresCalifActCuatroTres = $_POST['InpObjTresCalifActCuatroTres'];
 $InpObjTresComentCuatroTres = $_POST['InpObjTresComentCuatroTres'];

 

 $InpAreasMejorar = $_POST['InpAreasMejorar'];
 $InpFortalezas = $_POST['InpFortalezas'];
 $InpCompRevProxEvalue = $_POST['InpCompRevProxEvalue'];


 if($InpObjetivoUno != '' && $InpPesoObjetivoUno=='' || $InpPesoObjetivoUno!='' && $InpObjetivoUno == '' || $InpObjetivoDos != '' && $InpPesoObjetivoDos=='' || $InpPesoObjetivoDos!='' && $InpObjetivoDos == '' 
 || $InpObjetivoTres != '' && $InpPesoObjetivoTres=='' || $InpPesoObjetivoTres!='' && $InpObjetivoTres == ''){
     echo "El el objetivo y el peso , no pueden ir vacios\n";
    $error = 1; $valor1 = 0; $valor2 = 0; $valor3 = 0;
 }else{

 if($InpObjetivoUno != '' && $InpPesoObjetivoUno !=''){
    if($InpObjUnoActClaveUnoUno !='' || $InpObjUnoActClaveDosUno !='' || $InpObjUnoActClaveTresUno !='' || $InpObjUnoActClaveCuatroUno !='' ){
        if($InpObjUnoActClaveUnoUno !=''){  
            if($InpObjUnoPesoActUnoUno =='' || $InpObjUnoMetaActUnoUno =='' || $InpObjUnoCalifActUnoUno ==''){
                echo " Falta agregar valores a la actividad 1 del objetivo 1\n";
                $error = 1;
            } 
        }
        if($InpObjUnoActClaveDosUno !=''){
            if($InpObjUnoPesoActDosUno =='' || $InpObjUnoMetaActDosUno =='' || $InpObjUnoCalifActDosUno ==''){
                echo " Falta agregar valores a la ctividad 2 del objetivo 1\n";
                $error = 1;
            }
        }
        if($InpObjUnoActClaveTresUno !=''){
            if($InpObjUnoPesoActTresUno =='' || $InpObjUnoMetaActTresUno =='' || $InpObjUnoCalifActTresUno ==''){
                echo " Falta agregar valores a la ctividad 3 del objetivo 1\n";
                $error = 1;
            }
        }
        if($InpObjUnoActClaveCuatroUno !=''){
            if($InpObjUnoPesoActCuatroUno =='' || $InpObjUnoMetaActCuatroUno =='' || $InpObjUnoCalifActCuatroUno ==''){
                echo " Falta agregar valores a la actividad 4 del objetivo 1\n";
                $error = 1;
            }
        }

        if( $InpPesoObjetivoUno > 100 ){
            echo "El Peso del objetivo 1, no puede ser mayor a 100.\n";
            $error = 1;
        }

          $sumaPesoActiv = ((int)$InpObjUnoPesoActUnoUno + (int)$InpObjUnoPesoActDosUno + (int)$InpObjUnoPesoActTresUno + (int)$InpObjUnoPesoActCuatroUno);
        if( $sumaPesoActiv > 100 ){
            echo "El total: Peso de cada actividad no debe exceder de 100.\n";
            $error = 1;
        }
        if( $InpObjUnoMetaActUnoUno > 100 ){
            echo "La meta de cada actividad no puede exceder de 100.\n";
            $error = 1;
        }
        if( $InpObjUnoCalifActUnoUno > 100 ){
            echo "La calificación de cada actividad no puede exceder de 100.\n";
            $error = 1;
        } 
        
        

    } else{  echo "Has llenado el 1er objetivo, es necesario agregar almenos una actividad.\n"; $error = 1;}
$valor1 = 1;
} else { $valor1 = 0; }
if($InpObjetivoDos != '' && $InpPesoObjetivoDos !=''){
    if($InpObjDosActClaveUnoDos !='' || $InpObjDosActClaveDosDos !='' || $InpObjDosActClaveTresDos !='' || $InpObjDosActClaveCuatroDos !='' ){
        if($InpObjDosActClaveUnoDos !=''){  
            if($InpObjDosPesoActUnoDos =='' || $InpObjDosMetaActUnoDos =='' || $InpObjDosCalifActUnoDos ==''){
                echo " Falta agregar valores a la actividad 1 del objetivo 2\n";
                $error = 1;
            } 
        }
        if($InpObjDosActClaveDosDos !=''){
            if($InpObjDosPesoActDosDos =='' || $InpObjDosMetaActDosDos =='' || $InpObjDosCalifActDosDos ==''){
                echo " Falta agregar valores a la ctividad 2 del objetivo 2\n";
                $error = 1;
            }
        }
        if($InpObjDosActClaveTresDos !=''){
            if($InpObjDosPesoActTresDos =='' || $InpObjDosMetaActTresDos =='' || $InpObjDosCalifActTresDos ==''){
                echo " Falta agregar valores a la ctividad 3 del objetivo 2\n";
                $error = 1;
            }
        }
        if($InpObjDosActClaveCuatroDos !=''){
            if($InpObjDosPesoActCuatroDos =='' || $InpObjDosMetaActCuatroDos =='' || $InpObjDosCalifActCuatroDos ==''){
                echo " Falta agregar valores a la actividad 4 del objetivo 2\n";
                $error = 1;
            }
        }

        if( $InpPesoObjetivoDos > 100 ){
            echo "El Peso del objetivo 2, no puede ser mayor a 100.\n";
            $error = 1;
        }

        $sumaPesoActivdos = ((int)$InpObjDosPesoActUnoDos + (int)$InpObjDosPesoActDosDos + (int)$InpObjDosPesoActTresDos + (int)$InpObjDosPesoActCuatroDos);
        if( $sumaPesoActivdos > 100 ){
            echo "El total: Peso de cada actividad no debe exceder de 100.\n";
            $error = 1;
        }
    }
    else{  echo "Has llenado el 2do objetivo, es necesario agregar almenos una actividad.\n"; $error = 1; }
    $valor2= 1;
} else { $valor2 = 0; }
if($InpObjetivoTres != '' && $InpPesoObjetivoTres !=''){
    if($InpObjTresActClaveUnoTres !='' || $InpObjTresActClaveDosTres !='' || $InpObjTresActClaveTresTres !='' || $InpObjTresActClaveCuatroTres !='' ){
        if($InpObjDosActClaveUnoDos !=''){  
            if($InpObjTresPesoActUnoTres =='' || $InpObjTresMetaActUnoTres =='' || $InpObjTresCalifActUnoTres ==''){
                echo " Falta agregar valores a la actividad 1 del objetivo 3\n";
                $error = 1;
            } 
        }
        if($InpObjTresActClaveDosTres !=''){
            if($InpObjTresPesoActDosTres =='' || $InpObjTresMetaActDosTres =='' || $InpObjTresCalifActDosTres ==''){
                echo " Falta agregar valores a la ctividad 2 del objetivo 3\n";
                $error = 1;
            }
        }
        if($InpObjDosActClaveTresDos !=''){
            if($InpObjTresPesoActTresTres =='' || $InpObjTresMetaActTresTres =='' || $InpObjTresCalifActTresTres ==''){
                echo " Falta agregar valores a la ctividad 3 del objetivo 3\n";
                $error = 1;
            }
        }
        if($InpObjTresActClaveCuatroTres !=''){
            if($InpObjTresPesoActCuatroTres =='' || $InpObjTresMetaActCuatroTres =='' || $InpObjTresCalifActCuatroTres ==''){
                echo " Falta agregar valores a la actividad 4 del objetivo 3 \n";
                $error = 1;
            }
        }

        if( $InpPesoObjetivoTres > 100 ){
            echo "El Peso del objetivo 3, no puede ser mayor a 100.\n";
            $error = 1;
        }

        $sumaPesoActivTres = ((int)$InpObjTresPesoActUnoTres + (int)$InpObjTresPesoActDosTres + (int)$InpObjTresPesoActTresTres + (int)$InpObjTresPesoActCuatroTres);
        if( $sumaPesoActivTres > 100 ){
            echo "El total: Peso de cada actividad no debe exceder de 100.\n";
            $error = 1;
        }
    }
    else{  echo "Has llenado el 3er objetivo, es necesario agregar almenos una actividad.\n"; $error = 1; }
    $valor3 = 1; 
} else { $valor3 = 0; }
}

 $sumib = ((int)$InpPesoObjetivoUno + (int)$InpPesoObjetivoDos + (int)$InpPesoObjetivoTres);
if($sumib > 100){
    echo "La suma del peso de los objetivos no puede exceder mas de 100.\n";
    $error = 1;
}
if($InpObjetivoUno =='' && $InpObjetivoDos =='' && $InpObjetivoTres ==''){
    echo "Debes de llenar almenos un objetivo.\n";
    $error = 1;
}
if($InpAreasMejorar =='' || $InpFortalezas =='' ||  $InpCompRevProxEvalue =='' ){
    echo "Áreas a mejorar, Fortalezas y Compromisos para revisar en la próxima evaluación. Son obligatorios.\n";
    $error = 1;
}


$total = ($valor1 + $valor2 + $valor3);

  
if ($total > 0 && !isset($error) ){ 

    if(empty($InpPesoObjetivoUno)){ $InpPesoObjetivoUno  = 0;} 
    if(empty($InpObjUnoPesoActUnoUno)){ $InpObjUnoPesoActUnoUno  = 0;} 
    if(empty($InpObjUnoMetaActUnoUno)){ $InpObjUnoMetaActUnoUno  = 0;} 
    if(empty($InpObjUnoCalifActUnoUno)){ $InpObjUnoCalifActUnoUno = 0;} 
    if(empty($InpObjUnoPesoActDosUno)){ $InpObjUnoPesoActDosUno  = 0;} 
    if(empty($InpObjUnoMetaActDosUno)){ $InpObjUnoMetaActDosUno  = 0;} 
    if(empty($InpObjUnoCalifActDosUno)){ $InpObjUnoCalifActDosUno  = 0;} 
    if(empty($InpObjUnoPesoActTresUno)){ $InpObjUnoPesoActTresUno  = 0;} 
    if(empty($InpObjUnoMetaActTresUno)){ $InpObjUnoMetaActTresUno  = 0;} 
    if(empty($InpObjUnoCalifActTresUno)){ $InpObjUnoCalifActTresUno  = 0;} 
    if(empty($InpObjUnoPesoActCuatroUno)){ $InpObjUnoPesoActCuatroUno  = 0;} 
    if(empty($InpObjUnoMetaActCuatroUno)){ $InpObjUnoMetaActCuatroUno  = 0;} 
    if(empty($InpObjUnoCalifActCuatroUno)){ $InpObjUnoCalifActCuatroUno  = 0;} 
    if(empty($InpPesoObjetivoDos)){ $InpPesoObjetivoDos  = 0;} 
    if(empty($InpObjDosPesoActUnoDos)){ $InpObjDosPesoActUnoDos  = 0;} 
    if(empty($InpObjDosMetaActUnoDos)){ $InpObjDosMetaActUnoDos  = 0;} 
    if(empty($InpObjDosCalifActUnoDos)){ $InpObjDosCalifActUnoDos  = 0;} 
    if(empty($InpObjDosPesoActDosDos)){ $InpObjDosPesoActDosDos  = 0;} 
    if(empty($InpObjDosMetaActDosDos)){ $InpObjDosMetaActDosDos  = 0;} 
    if(empty($InpObjDosCalifActDosDos)){ $InpObjDosCalifActDosDos  = 0;} 
    if(empty($InpObjDosPesoActTresDos)){ $InpObjDosPesoActTresDos  = 0;} 
    if(empty($InpObjDosMetaActTresDos)){ $InpObjDosMetaActTresDos  = 0;} 
    if(empty($InpObjDosCalifActTresDos)){ $InpObjDosCalifActTresDos  = 0;} 
    if(empty($InpObjDosPesoActCuatroDos)){ $InpObjDosPesoActCuatroDos  = 0;} 
    if(empty($InpObjDosMetaActCuatroDos)){ $InpObjDosMetaActCuatroDos  = 0;} 
    if(empty($InpObjDosCalifActCuatroDos)){ $InpObjDosCalifActCuatroDos  = 0;} 
    if(empty($InpPesoObjetivoTres)){ $InpPesoObjetivoTres  = 0;} 
    if(empty($InpObjTresPesoActUnoTres)){ $InpObjTresPesoActUnoTres  = 0;} 
    if(empty($InpObjTresMetaActUnoTres)){ $InpObjTresMetaActUnoTres  = 0;} 
    if(empty($InpObjTresCalifActUnoTres)){ $InpObjTresCalifActUnoTres  = 0;} 
    if(empty($InpObjTresPesoActDosTres)){ $InpObjTresPesoActDosTres  = 0;} 
    if(empty($InpObjTresMetaActDosTres)){ $InpObjTresMetaActDosTres  = 0;} 
    if(empty($InpObjTresCalifActDosTres)){ $InpObjTresCalifActDosTres  = 0;} 
    if(empty($InpObjTresPesoActTresTres)){ $InpObjTresPesoActTresTres  = 0;} 
    if(empty($InpObjTresMetaActTresTres)){ $InpObjTresMetaActTresTres  = 0;} 
    if(empty($InpObjTresCalifActTresTres)){ $InpObjTresCalifActTresTres  = 0;} 
    if(empty($InpObjTresPesoActCuatroTres)){ $InpObjTresPesoActCuatroTres  = 0;} 
    if(empty($InpObjTresMetaActCuatroTres)){ $InpObjTresMetaActCuatroTres  = 0;} 
    if(empty($InpObjTresCalifActCuatroTres)){ $InpObjTresCalifActCuatroTres  = 0;} 

    if( $InpObjUnoCalifActUnoUno == '0' && $InpObjUnoMetaActUnoUno == '0') { 
        $porcObjUnoCumpActiUnoUno= 0;  
        $cal_ObjUnoponderadaUnoUno = 0;
    } else {  
       $porcObjUnoCumpActiUnoUno = ($InpObjUnoCalifActUnoUno / $InpObjUnoMetaActUnoUno)*100 ; 
       $cal_ObjUnoponderadaUnoUno = (($InpObjUnoPesoActUnoUno * $InpPesoObjetivoUno ) / 100) * ($InpObjUnoCalifActUnoUno / $InpObjUnoMetaActUnoUno);
    }
    if( $InpObjUnoCalifActDosUno == '0' && $InpObjUnoMetaActDosUno == '0') { 
        $porcObjUnoCumpActiDosUno= 0;  
        $cal_ObjUnoponderadaDosUno = 0;
    } else {  
       $porcObjUnoCumpActiDosUno = ($InpObjUnoCalifActDosUno / $InpObjUnoMetaActDosUno)*100 ; 
       $cal_ObjUnoponderadaDosUno = (($InpObjUnoPesoActDosUno * $InpPesoObjetivoUno ) / 100) * ($InpObjUnoCalifActDosUno / $InpObjUnoMetaActDosUno);
    }
    if( $InpObjUnoCalifActTresUno == '0' && $InpObjUnoMetaActTresUno == '0') { 
        $porcObjUnoCumpActiTresUno= 0;  
        $cal_ObjUnoponderadaTresUno = 0;
    } else {  
       $porcObjUnoCumpActiTresUno = ($InpObjUnoCalifActTresUno / $InpObjUnoMetaActTresUno)*100 ; 
       $cal_ObjUnoponderadaTresUno = (($InpObjUnoPesoActTresUno * $InpPesoObjetivoUno ) / 100) * ($InpObjUnoCalifActTresUno / $InpObjUnoMetaActTresUno);
    }
    if( $InpObjUnoCalifActCuatroUno == '0' && $InpObjUnoMetaActCuatroUno == '0') { 
        $porcObjUnoCumpActiCuatroUno= 0;  
        $cal_ObjUnoponderadaCuatroUno = 0;
    } else {  
       $porcObjUnoCumpActiCuatroUno = ($InpObjUnoCalifActCuatroUno / $InpObjUnoMetaActCuatroUno)*100 ; 
       $cal_ObjUnoponderadaCuatroUno = (($InpObjUnoPesoActCuatroUno * $InpPesoObjetivoUno ) / 100) * ($InpObjUnoCalifActCuatroUno / $InpObjUnoMetaActCuatroUno);
    }


    if( $InpObjDosCalifActUnoDos == '0' && $InpObjDosMetaActUnoDos == '0') { 
        $porcObjDosCumpActiUnoDos= 0;  
        $cal_ObjDosponderadaUnoDos = 0;
    } else {  
       $porcObjDosCumpActiUnoDos = ($InpObjDosCalifActUnoDos / $InpObjDosMetaActUnoDos)*100 ; 
       $cal_ObjDosponderadaUnoDos = (($InpObjDosPesoActUnoDos * $InpPesoObjetivoDos ) / 100) * ($InpObjDosCalifActUnoDos / $InpObjDosMetaActUnoDos);
    }
    if( $InpObjDosCalifActDosDos == '0' && $InpObjDosMetaActDosDos == '0') { 
        $porcObjDosCumpActiDosDos= 0;  
        $cal_ObjDosponderadaDosDos = 0;
    } else {  
       $porcObjDosCumpActiDosDos = ($InpObjDosCalifActDosDos / $InpObjDosMetaActDosDos)*100 ; 
       $cal_ObjDosponderadaDosDos = (($InpObjDosPesoActDosDos * $InpPesoObjetivoDos ) / 100) * ($InpObjDosCalifActDosDos / $InpObjDosMetaActDosDos);
    }
    if( $InpObjDosCalifActTresDos == '0' && $InpObjDosMetaActTresDos == '0') { 
        $porcObjDosCumpActiTresDos= 0;  
        $cal_ObjDosponderadaTresDos = 0;
    } else {  
       $porcObjDosCumpActiTresDos = ($InpObjDosCalifActTresDos / $InpObjDosMetaActTresDos)*100 ; 
       $cal_ObjDosponderadaTresDos = (($InpObjDosPesoActTresDos * $InpPesoObjetivoDos ) / 100) * ($InpObjDosCalifActTresDos / $InpObjDosMetaActTresDos);
    }
    if( $InpObjDosCalifActCuatroDos == '0' && $InpObjDosMetaActCuatroDos == '0') { 
        $porcObjDosCumpActiCuatroDos= 0;  
        $cal_ObjDosponderadaCuatroDos = 0;
    } else {  
       $porcObjDosCumpActiCuatroDos = ($InpObjDosCalifActCuatroDos / $InpObjDosMetaActCuatroDos)*100 ; 
       $cal_ObjDosponderadaCuatroDos = (($InpObjDosPesoActCuatroDos * $InpPesoObjetivoDos ) / 100) * ($InpObjDosCalifActCuatroDos / $InpObjDosMetaActCuatroDos);
    }

    

    if( $InpObjTresCalifActUnoTres == '0' && $InpObjTresMetaActUnoTres == '0') { 
        $porcObjTresCumpActiUnoTres= 0;  
        $cal_ObjTresponderadaUnoTres = 0;
    } else {  
       $porcObjTresCumpActiUnoTres = ($InpObjTresCalifActUnoTres / $InpObjTresMetaActUnoTres)*100 ; 
       $cal_ObjTresponderadaUnoTres = (($InpObjTresPesoActUnoTres * $InpPesoObjetivoTres ) / 100) * ($InpObjTresCalifActUnoTres / $InpObjTresMetaActUnoTres);
    }
    if( $InpObjTresCalifActDosTres == '0' && $InpObjTresMetaActDosTres == '0') { 
        $porcObjTresCumpActiDosTres= 0;  
        $cal_ObjTresponderadaDosTres = 0;
    } else {  
       $porcObjTresCumpActiDosTres = ($InpObjTresCalifActDosTres / $InpObjTresMetaActDosTres)*100 ; 
       $cal_ObjTresponderadaDosTres = (($InpObjTresPesoActDosTres * $InpPesoObjetivoTres ) / 100) * ($InpObjTresCalifActDosTres / $InpObjTresMetaActDosTres);
    }
    if( $InpObjTresCalifActTresTres == '0' && $InpObjTresMetaActTresTres == '0') { 
        $porcObjTresCumpActiTresTres= 0;  
        $cal_ObjTresponderadaTresTres = 0;
    } else {  
       $porcObjTresCumpActiTresTres = ($InpObjTresCalifActTresTres / $InpObjTresMetaActTresTres)*100 ; 
       $cal_ObjTresponderadaTresTres = (($InpObjTresPesoActTresTres * $InpPesoObjetivoTres ) / 100) * ($InpObjTresCalifActTresTres / $InpObjTresMetaActTresTres);
    }
    if( $InpObjTresCalifActCuatroTres == '0' && $InpObjTresMetaActCuatroTres == '0') { 
        $porcObjTresCumpActiCuatroTres= 0;  
        $cal_ObjTresponderadaCuatroTres = 0;
    } else {  
       $porcObjTresCumpActiCuatroTres = ($InpObjTresCalifActCuatroTres / $InpObjTresMetaActCuatroTres)*100 ; 
       $cal_ObjTresponderadaCuatroTres = (($InpObjTresPesoActCuatroTres * $InpPesoObjetivoTres ) / 100) * ($InpObjTresMetaActCuatroTres / $InpObjTresMetaActCuatroTres);
    }

$querydeleteobj= "DELETE FROM objetivos where id_slack =$id_slack"  ;
    
    $resultdeleteobj = mysqli_query($conexion, $querydeleteobj);

    if($resultdeleteobj){

$querydupact= "UPDATE objetivos_info set areas_a_mejorar = '$InpAreasMejorar',
fortalezas = '$InpFortalezas', comp_revisar_prox_evaluacion = '$InpCompRevProxEvalue'
where id_slack =$id_slack"  ;
    
$resultdupact = mysqli_query($conexion, $querydupact);


$queryobj= "INSERT INTO objetivos(
    objetivo_dec ,
    peso_objetivo ,
    actividades_clave,
    peso_cada_actividad,
    peso_ponderado_actividad,
    meta_esperada_de_actividad,
    calificacion_actual, 
    porcentaje_cumplimiento_actividad,
    calificacion_ponderada,
    comentarios,
    id_slack,
    num_objetivo_general,
    num_objetivos_sub,
    usuario_insercion
   )
values (
'$InpObjetivoUno',
'$InpPesoObjetivoUno',
'$InpObjUnoActClaveUnoUno',
'$InpObjUnoPesoActUnoUno',
($InpObjUnoPesoActUnoUno * $InpPesoObjetivoUno ) / 100,
'$InpObjUnoMetaActUnoUno',
'$InpObjUnoCalifActUnoUno',
$porcObjUnoCumpActiUnoUno,
round($cal_ObjUnoponderadaUnoUno) ,
'$InpObjUnoComentUnoUno',
'$id_slack',
1,
1,
'$id_user'),
(
'$InpObjetivoUno',
0,
'$InpObjUnoActClaveDosUno',
'$InpObjUnoPesoActDosUno',
($InpObjUnoPesoActDosUno * $InpPesoObjetivoUno ) / 100,
'$InpObjUnoMetaActDosUno',
'$InpObjUnoCalifActDosUno',
$porcObjUnoCumpActiDosUno,
round($cal_ObjUnoponderadaDosUno) ,
'$InpObjUnoComentDosUno',
'$id_slack',
1,
2,
'$id_user'),

(
'$InpObjetivoUno',
0,
'$InpObjUnoActClaveTresUno',
'$InpObjUnoPesoActTresUno',
($InpObjUnoPesoActTresUno * $InpPesoObjetivoUno )/ 100,
'$InpObjUnoMetaActTresUno',
'$InpObjUnoCalifActTresUno',
$porcObjUnoCumpActiTresUno,
round($cal_ObjUnoponderadaTresUno) ,
'$InpObjUnoComentTresUno',
'$id_slack',
1,
3,
'$id_user'),
(
'$InpObjetivoUno',
0,
'$InpObjUnoActClaveCuatroUno',
'$InpObjUnoPesoActCuatroUno',
($InpObjUnoPesoActCuatroUno * $InpPesoObjetivoUno )/ 100,
'$InpObjUnoMetaActCuatroUno',
'$InpObjUnoCalifActCuatroUno',
$porcObjUnoCumpActiCuatroUno,
round($cal_ObjUnoponderadaCuatroUno) ,
'$InpObjUnoComentCuatroUno',
'$id_slack',
1,
4,
'$id_user'),

-- Objetivo 2
(
'$InpObjetivoDos',
'$InpPesoObjetivoDos',
'$InpObjDosActClaveUnoDos',
'$InpObjDosPesoActUnoDos',
($InpObjDosPesoActUnoDos * $InpPesoObjetivoDos )/ 100,
'$InpObjDosMetaActUnoDos',
'$InpObjDosCalifActUnoDos',
$porcObjDosCumpActiUnoDos,
round($cal_ObjDosponderadaUnoDos) ,
'$InpObjDosComentUnoDos',
'$id_slack',
2,
1,
'$id_user'),
(
'$InpObjetivoDos',
0,
'$InpObjDosActClaveDosDos',
'$InpObjDosPesoActDosDos',
($InpObjDosPesoActDosDos * $InpPesoObjetivoDos )/ 100,
'$InpObjDosMetaActDosDos',
'$InpObjDosCalifActDosDos',
$porcObjDosCumpActiDosDos,
round($cal_ObjDosponderadaDosDos) ,
'$InpObjDosComentDosDos',
'$id_slack',
2,
2,
'$id_user'),
(
'$InpObjetivoDos',
0,
'$InpObjDosActClaveTresDos',
'$InpObjDosPesoActTresDos',
($InpObjDosPesoActTresDos * $InpPesoObjetivoDos )/ 100,
'$InpObjDosMetaActTresDos',
'$InpObjDosCalifActTresDos',
$porcObjDosCumpActiTresDos,
round($cal_ObjDosponderadaTresDos) ,
'$InpObjDosComentTresDos',
'$id_slack',
2,
3,
'$id_user'),
(
'$InpObjetivoDos',
0,
'$InpObjDosActClaveCuatroDos',
'$InpObjDosPesoActCuatroDos',
($InpObjDosPesoActCuatroDos * $InpPesoObjetivoDos )/ 100,
'$InpObjDosMetaActCuatroDos',
'$InpObjDosCalifActCuatroDos',
$porcObjDosCumpActiCuatroDos,
round($cal_ObjDosponderadaCuatroDos) ,
'$InpObjDosComentCuatroDos',
'$id_slack',
2,
4,
'$id_user'),

-- objetivo 3
(
'$InpObjetivoTres',
'$InpPesoObjetivoTres',
'$InpObjTresActClaveUnoTres',
'$InpObjTresPesoActUnoTres',
($InpObjTresPesoActUnoTres * $InpPesoObjetivoTres )/ 100,
'$InpObjTresMetaActUnoTres',
'$InpObjTresCalifActUnoTres',
$porcObjTresCumpActiUnoTres,
round($cal_ObjTresponderadaUnoTres) ,
'$InpObjTresComentUnoTres',
'$id_slack',
3,
1,
'$id_user'),
(
'$InpObjetivoTres',
0,
'$InpObjTresActClaveDosTres',
'$InpObjTresPesoActDosTres',
($InpObjTresPesoActDosTres * $InpPesoObjetivoTres )/ 100,
'$InpObjTresMetaActDosTres',
'$InpObjTresCalifActDosTres',
$porcObjTresCumpActiDosTres,
round($cal_ObjTresponderadaDosTres) ,
'$InpObjTresComentDosTres',
'$id_slack',
3,
2,
'$id_user'),
(
'$InpObjetivoTres',
0,
'$InpObjTresActClaveTresTres',
'$InpObjTresPesoActTresTres',
($InpObjTresPesoActTresTres * $InpPesoObjetivoTres )/ 100,
'$InpObjTresMetaActTresTres',
'$InpObjTresCalifActTresTres',
$porcObjTresCumpActiTresTres,
round($cal_ObjTresponderadaTresTres) ,
'$InpObjTresComentTresTres',
'$id_slack',
3,
3,
'$id_user'),
(
'$InpObjetivoTres',
0,
'$InpObjTresActClaveCuatroTres',
'$InpObjTresPesoActCuatroTres',
($InpObjTresPesoActCuatroTres * $InpPesoObjetivoTres )/ 100,
'$InpObjTresMetaActCuatroTres',
'$InpObjTresCalifActCuatroTres',
$porcObjTresCumpActiCuatroTres,
round($cal_ObjTresponderadaCuatroTres) ,
'$InpObjTresComentCuatroTres',
'$id_slack',
3,
4,
'$id_user')
" ;
$resultobj = mysqli_query($conexion, $queryobj);

$sqls = mysqli_query ($conexion,"SELECT * from competencias where id_slack = '$id_slack'");
		
$resultsss= mysqli_num_rows($sqls);
if ($resultsss > 0) {
    $queryobjupd= "UPDATE objetivos_info a 
inner join (SELECT round((sum(calificacion_ponderada)* 0.8)) AS calificacion_objetivos , id_slack 
FROM `objetivos` where id_slack =$id_slack ) as b  on b.id_slack = a.id_slack
set a.calificacion_objetivos = b.calificacion_objetivos"  ;

$resultobjupd = mysqli_query($conexion, $queryobjupd);

 $queryobjupunt= "UPDATE objetivos_info a 
inner join (SELECT round(((puntaje_obtenido / 52) * 0.2)*100) as puntaje_obtenido , id_slack 
FROM `competencias` where id_slack =$id_slack ) as b  on b.id_slack = a.id_slack
set a.calific_competencias = b.puntaje_obtenido " ;
$resultobjupunt = mysqli_query($conexion, $queryobjupunt);

$queryobjuclas="UPDATE objetivos_info SET calific_total_evaluacion_desempeno = (calificacion_objetivos + calific_competencias)
WHERE id_slack =$id_slack" ;

$resultobjuclas = mysqli_query($conexion, $queryobjuclas); 
}

if($queryobj){
     		echo "Insertado";
     	} else { echo "No Insertado"; }

    

}else{ echo "No insertar "; }
} else{ echo "Ocurrio un error inesperado"; }

// $query= "INSERT INTO objetivos_info(
//     fecha,
//     nombre_empleado,
//     puesto,
//     departamento,
//     direccion,
//     nombre_evaluador,
//     fecha_Ingreso,
//     periodo_evaluacion,
//     calificacion_objetivos,
//     calific_competencias,
//     calific_total_evaluacion_desempeno,
//     areas_a_mejorar,
//     fortalezas,
//     comp_revisar_prox_evaluacion,
//     id_slack,
//     fecha_insercion, 
//     usuario_insercion, 
//     hora_insercion,
//     eliminada )
// select 
// current_date,
// nombre_completo,
// nombreposicion,
// departamento,
// direccion,
// '$id_user',
// fechadeingresoorganizacion,
// '$InpFechaDe',
// 0,
// 0,
// 0,
// '$InpAreasMejorar',
// '$InpFortalezas',
// '$InpCompRevProxEvalue',
// '$id_slack', 
// current_date,
// '$id_user',
// CURRENT_TIMESTAMP,
// '0'
// from workbeat 
// where id_slack = $id_slack" ;
// $result = mysqli_query($conexion, $query);


// echo $queryobj= "INSERT INTO objetivos(
//     objetivo_dec ,
//     peso_objetivo ,
//     actividades_clave,
//     peso_cada_actividad,
//     peso_ponderado_actividad,
//     meta_esperada_de_actividad,
//     calificacion_actual, 
//     porcentaje_cumplimiento_actividad,
//     calificacion_ponderada,
//     comentarios,
//     id_slack,
//     num_objetivo_general,
//     num_objetivos_sub,
//     usuario_insercion
//    )
// values (
// '$InpObjetivoUno',
// '$InpPesoObjetivoUno',
// '$InpObjUnoActClaveUnoUno',
// '$InpObjUnoPesoActUnoUno',
// 0,
// '$InpObjUnoMetaActUnoUno',
// '$InpObjUnoCalifActUnoUno',
// 0,
// 0,
// '$InpObjUnoComentUnoUno',
// '$id_slack',
// 1,
// 1,
// '$id_user'),
// (
// '$InpObjetivoUno',
// 0,
// '$InpObjUnoActClaveDosUno',
// '$InpObjUnoPesoActDosUno',
// 0,
// '$InpObjUnoMetaActDosUno',
// '$InpObjUnoCalifActDosUno',
// 0,
// 0,
// '$InpObjUnoComentDosUno',
// '$id_slack',
// 1,
// 2,
// '$id_user'),

// (
// '$InpObjetivoUno',
// 0,
// '$InpObjUnoActClaveTresUno',
// '$InpObjUnoPesoActTresUno',
// 0,
// '$InpObjUnoMetaActTresUno',
// '$InpObjUnoCalifActTresUno',
// 0,
// 0,
// '$InpObjUnoComentTresUno',
// '$id_slack',
// 1,
// 3,
// '$id_user'),
// (
// '$InpObjetivoUno',
// 0,
// '$InpObjUnoActClaveCuatroUno',
// '$InpObjUnoPesoActCuatroUno',
// 0,
// '$InpObjUnoMetaActCuatroUno',
// '$InpObjUnoCalifActCuatroUno',
// 0,
// 0,
// '$InpObjUnoComentCuatroUno',
// '$id_slack',
// 1,
// 4,
// '$id_user'),

// -- Objetivo 2
// (
// '$InpObjetivoDos',
// '$InpPesoObjetivoDos',
// '$InpObjDosActClaveUnoDos',
// '$InpObjDosPesoActUnoDos',
// 0,
// '$InpObjDosMetaActUnoDos',
// '$InpObjDosCalifActUnoDos',
// 0,
// 0,
// '$InpObjDosComentUnoDos',
// '$id_slack',
// 2,
// 1,
// '$id_user'),
// (
// '$InpObjetivoDos',
// 0,
// '$InpObjDosActClaveDosDos',
// '$InpObjDosPesoActDosDos',
// 0,
// '$InpObjDosMetaActDosDos',
// '$InpObjDosCalifActDosDos',
// 0,
// 0,
// '$InpObjDosComentDosDos',
// '$id_slack',
// 2,
// 2,
// '$id_user'),
// (
// '$InpObjetivoDos',
// 0,
// '$InpObjDosActClaveTresDos',
// '$InpObjDosPesoActTresDos',
// 0,
// '$InpObjDosMetaActTresDos',
// '$InpObjDosCalifActTresDos',
// 0,
// 0,
// '$InpObjDosComentTresDos',
// '$id_slack',
// 2,
// 3,
// '$id_user'),
// (
// '$InpObjetivoDos',
// 0,
// '$InpObjDosActClaveCuatroDos',
// '$InpObjDosPesoActCuatroDos',
// 0,
// '$InpObjDosMetaActCuatroDos',
// '$InpObjDosCalifActCuatroDos',
// 0,
// 0,
// '$InpObjDosComentCuatroDos',
// '$id_slack',
// 2,
// 4,
// '$id_user'),

// -- objetivo 3
// (
// '$InpObjetivoTres',
// '$InpPesoObjetivoTres',
// '$InpObjTresActClaveUnoTres',
// '$InpObjTresPesoActUnoTres',
// 0,
// '$InpObjTresMetaActUnoTres',
// '$InpObjTresCalifActUnoTres',
// 0,
// 0,
// '$InpObjTresComentUnoTres',
// '$id_slack',
// 3,
// 1,
// '$id_user'),
// (
// '$InpObjetivoTres',
// 0,
// '$InpObjTresActClaveDosTres',
// '$InpObjTresPesoActDosTres',
// 0,
// '$InpObjTresMetaActDosTres',
// '$InpObjTresCalifActDosTres',
// 0,
// 0,
// '$InpObjTresComentDosTres',
// '$id_slack',
// 3,
// 2,
// '$id_user'),
// (
// '$InpObjetivoTres',
// 0,
// '$InpObjTresActClaveTresTres',
// '$InpObjTresPesoActTresTres',
// 0,
// '$InpObjTresMetaActTresTres',
// '$InpObjTresCalifActTresTres',
// 0,
// 0,
// '$InpObjTresComentTresTres',
// '$id_slack',
// 3,
// 3,
// '$id_user'),
// (
// '$InpObjetivoTres',
// 0,
// '$InpObjTresActClaveCuatroTres',
// '$InpObjTresPesoActCuatroTres',
// 0,
// '$InpObjTresMetaActCuatroTres',
// '$InpObjTresCalifActCuatroTres',
// 0,
// 0,
// '$InpObjTresComentCuatroTres',
// '$id_slack',
// 3,
// 4,
// '$id_user')
// " ;
// $resultobj = mysqli_query($conexion, $queryobj);



// if($queryobj){
//      		echo "Insertado";
//      	} else {echo "No Insertado"; }




?>