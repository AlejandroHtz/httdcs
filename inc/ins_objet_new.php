<?php 
require '../conexion.php';
 $id_slack = $_POST['id_slack']; 
 $id_user = $_POST['id_user']; 


 $InpObjetivoUno = $_POST['InpObjetivoUno'];

 $InpPesoObjetivoUno = $_POST['InpPesoObjetivoUno'];
 $InpObjUnoActClaveUnoUno = $_POST['InpObjUnoActClaveUnoUno'];
 $InpObjUnoPesoActUnoUno = $_POST['InpObjUnoPesoActUnoUno'];
 $InpObjUnoMetaActUnoUno = 100;
 $InpObjUnoCalifActUnoUno= $_POST['InpObjUnoCalifActUnoUno'];
 $InpObjUnoComentUnoUno = $_POST['InpObjUnoComentUnoUno'];

 $InpObjUnoActClaveDosUno = $_POST['InpObjUnoActClaveDosUno'];
 $InpObjUnoPesoActDosUno = $_POST['InpObjUnoPesoActDosUno'];
 $InpObjUnoMetaActDosUno = 100;
 $InpObjUnoCalifActDosUno = $_POST['InpObjUnoCalifActDosUno'];
 $InpObjUnoComentDosUno = $_POST['InpObjUnoComentDosUno'];

 $InpObjUnoActClaveTresUno = $_POST['InpObjUnoActClaveTresUno'];
 $InpObjUnoPesoActTresUno = $_POST['InpObjUnoPesoActTresUno'];
 $InpObjUnoMetaActTresUno = 100;
 $InpObjUnoCalifActTresUno = $_POST['InpObjUnoCalifActTresUno'];
 $InpObjUnoComentTresUno = $_POST['InpObjUnoComentTresUno'];

 $InpObjUnoActClaveCuatroUno = $_POST['InpObjUnoActClaveCuatroUno'];
 $InpObjUnoPesoActCuatroUno = $_POST['InpObjUnoPesoActCuatroUno'];
 $InpObjUnoMetaActCuatroUno = 100;
 $InpObjUnoCalifActCuatroUno = $_POST['InpObjUnoCalifActCuatroUno'];
 $InpObjUnoComentCuatroUno = $_POST['InpObjUnoComentCuatroUno'];

 $InpObjUnoActClaveCincoUno = $_POST['InpObjUnoActClaveCincoUno'];
 $InpObjUnoPesoActCincoUno = $_POST['InpObjUnoPesoActCincoUno'];
 $InpObjUnoMetaActCincoUno = 100;
 $InpObjUnoCalifActCincoUno = $_POST['InpObjUnoCalifActCincoUno'];
 $InpObjUnoComentCincoUno = $_POST['InpObjUnoComentCincoUno'];



 $InpObjetivoDos = $_POST['InpObjetivoDos'];
 $InpPesoObjetivoDos = $_POST['InpPesoObjetivoDos'];

 $InpObjDosActClaveUnoDos = $_POST['InpObjDosActClaveUnoDos'];
 $InpObjDosPesoActUnoDos = $_POST['InpObjDosPesoActUnoDos'];
 $InpObjDosMetaActUnoDos = 100;
 $InpObjDosCalifActUnoDos = $_POST['InpObjDosCalifActUnoDos'];
 $InpObjDosComentUnoDos = $_POST['InpObjDosComentUnoDos'];

 $InpObjDosActClaveDosDos = $_POST['InpObjDosActClaveDosDos'];
 $InpObjDosPesoActDosDos = $_POST['InpObjDosPesoActDosDos'];
 $InpObjDosMetaActDosDos = 100;
 $InpObjDosCalifActDosDos = $_POST['InpObjDosCalifActDosDos'];
 $InpObjDosComentDosDos = $_POST['InpObjDosComentDosDos'];

 $InpObjDosActClaveTresDos = $_POST['InpObjDosActClaveTresDos'];
 $InpObjDosPesoActTresDos = $_POST['InpObjDosPesoActTresDos'];
 $InpObjDosMetaActTresDos = 100;
 $InpObjDosCalifActTresDos = $_POST['InpObjDosCalifActTresDos'];
 $InpObjDosComentTresDos = $_POST['InpObjDosComentTresDos'];

 $InpObjDosActClaveCuatroDos = $_POST['InpObjDosActClaveCuatroDos'];
 $InpObjDosPesoActCuatroDos = $_POST['InpObjDosPesoActCuatroDos'];
 $InpObjDosMetaActCuatroDos = 100;
 $InpObjDosCalifActCuatroDos = $_POST['InpObjDosCalifActCuatroDos'];
 $InpObjDosComentCuatroDos = $_POST['InpObjDosComentCuatroDos'];

 $InpObjDosActClaveCincoDos = $_POST['InpObjDosActClaveCincoDos'];
 $InpObjDosPesoActCincoDos = $_POST['InpObjDosPesoActCincoDos'];
 $InpObjDosMetaActCincoDos = 100;
 $InpObjDosCalifActCincoDos = $_POST['InpObjDosCalifActCincoDos'];
 $InpObjDosComentCincoDos = $_POST['InpObjDosComentCincoDos'];




 $InpObjetivoTres = $_POST['InpObjetivoTres'];
 $InpPesoObjetivoTres = $_POST['InpPesoObjetivoTres'];

 $InpObjTresActClaveUnoTres = $_POST['InpObjTresActClaveUnoTres'];
 $InpObjTresPesoActUnoTres = $_POST['InpObjTresPesoActUnoTres'];
 $InpObjTresMetaActUnoTres = 100;
 $InpObjTresCalifActUnoTres = $_POST['InpObjTresCalifActUnoTres'];
 $InpObjTresComentUnoTres = $_POST['InpObjTresComentUnoTres'];

 $InpObjTresActClaveDosTres = $_POST['InpObjTresActClaveDosTres'];
 $InpObjTresPesoActDosTres = $_POST['InpObjTresPesoActDosTres'];
 $InpObjTresMetaActDosTres = 100;
 $InpObjTresCalifActDosTres = $_POST['InpObjTresCalifActDosTres'];
 $InpObjTresComentDosTres = $_POST['InpObjTresComentDosTres'];

 $InpObjTresActClaveTresTres = $_POST['InpObjTresActClaveTresTres'];
 $InpObjTresPesoActTresTres = $_POST['InpObjTresPesoActTresTres'];
 $InpObjTresMetaActTresTres = 100;
 $InpObjTresCalifActTresTres = $_POST['InpObjTresCalifActTresTres'];
 $InpObjTresComentTresTres = $_POST['InpObjTresComentTresTres'];

 $InpObjTresActClaveCuatroTres = $_POST['InpObjTresActClaveCuatroTres'];
 $InpObjTresPesoActCuatroTres = $_POST['InpObjTresPesoActCuatroTres'];
 $InpObjTresMetaActCuatroTres = 100;
 $InpObjTresCalifActCuatroTres = $_POST['InpObjTresCalifActCuatroTres'];
 $InpObjTresComentCuatroTres = $_POST['InpObjTresComentCuatroTres'];

 $InpObjTresActClaveCincoTres = $_POST['InpObjTresActClaveCincoTres'];
 $InpObjTresPesoActCincoTres = $_POST['InpObjTresPesoActCincoTres'];
 $InpObjTresMetaActCincoTres = 100;
 $InpObjTresCalifActCincoTres = $_POST['InpObjTresCalifActCincoTres'];
 $InpObjTresComentCincoTres = $_POST['InpObjTresComentCincoTres'];
 


 $InpObjetivoCuatro = $_POST['InpObjetivoCuatro'];
 $InpPesoObjetivoCuatro = $_POST['InpPesoObjetivoCuatro'];

 $InpObjCuatroActClaveUnoCuatro = $_POST['InpObjCuatroActClaveUnoCuatro'];
 $InpObjCuatroPesoActUnoCuatro = $_POST['InpObjCuatroPesoActUnoCuatro'];
 $InpObjCuatroMetaActUnoCuatro = 100;
 $InpObjCuatroCalifActUnoCuatro = $_POST['InpObjCuatroCalifActUnoCuatro'];
 $InpObjCuatroComentUnoCuatro = $_POST['InpObjCuatroComentUnoCuatro'];

 $InpObjCuatroActClaveDosCuatro = $_POST['InpObjCuatroActClaveDosCuatro'];
 $InpObjCuatroPesoActDosCuatro = $_POST['InpObjCuatroPesoActDosCuatro'];
 $InpObjCuatroMetaActDosCuatro = 100;
 $InpObjCuatroCalifActDosCuatro = $_POST['InpObjCuatroCalifActDosCuatro'];
 $InpObjCuatroComentDosCuatro = $_POST['InpObjCuatroComentDosCuatro'];

 $InpObjCuatroActClaveTresCuatro = $_POST['InpObjCuatroActClaveTresCuatro'];
 $InpObjCuatroPesoActTresCuatro = $_POST['InpObjCuatroPesoActTresCuatro'];
 $InpObjCuatroMetaActTresCuatro = 100;
 $InpObjCuatroCalifActTresCuatro = $_POST['InpObjCuatroCalifActTresCuatro'];
 $InpObjCuatroComentTresCuatro = $_POST['InpObjCuatroComentTresCuatro'];

 $InpObjCuatroActClaveCuatroCuatro = $_POST['InpObjCuatroActClaveCuatroCuatro'];
 $InpObjCuatroPesoActCuatroCuatro = $_POST['InpObjCuatroPesoActCuatroCuatro'];
 $InpObjCuatroMetaActCuatroCuatro = 100;
 $InpObjCuatroCalifActCuatroCuatro = $_POST['InpObjCuatroCalifActCuatroCuatro'];
 $InpObjCuatroComentCuatroCuatro = $_POST['InpObjCuatroComentCuatroCuatro'];

 $InpObjCuatroActClaveCincoCuatro = $_POST['InpObjCuatroActClaveCincoCuatro'];
 $InpObjCuatroPesoActCincoCuatro = $_POST['InpObjCuatroPesoActCincoCuatro'];
 $InpObjCuatroMetaActCincoCuatro = 100;
 $InpObjCuatroCalifActCincoCuatro = $_POST['InpObjCuatroCalifActCincoCuatro'];
 $InpObjCuatroComentCincoCuatro = $_POST['InpObjCuatroComentCincoCuatro'];
 
 $InpAreasMejorar = $_POST['InpAreasMejorar'];
 $InpFortalezas = $_POST['InpFortalezas'];
 $InpCompRevProxEvalue = $_POST['InpCompRevProxEvalue'];


 if($InpObjetivoUno != '' && $InpPesoObjetivoUno=='' || $InpPesoObjetivoUno!='' && $InpObjetivoUno == '' || $InpObjetivoDos != '' && $InpPesoObjetivoDos=='' || $InpPesoObjetivoDos!='' && $InpObjetivoDos == '' 
 || $InpObjetivoTres != '' && $InpPesoObjetivoTres=='' || $InpPesoObjetivoTres!='' && $InpObjetivoTres == '' || $InpObjetivoCuatro != '' && $InpPesoObjetivoCuatro=='' || $InpPesoObjetivoCuatro!='' && $InpObjetivoCuatro == ''){
    echo "El el objetivo y el peso , no pueden ir vacios\n";
    $error = 1; $valor1 = 0; $valor2 = 0; $valor3 = 0; $valor4 = 0;
 }else{

 if($InpObjetivoUno != '' && $InpPesoObjetivoUno !=''){
    if($InpObjUnoActClaveUnoUno !='' || $InpObjUnoActClaveDosUno !='' || $InpObjUnoActClaveTresUno !='' || $InpObjUnoActClaveCuatroUno !='' || $InpObjUnoActClaveCincoUno !='' ){
        if($InpObjUnoActClaveUnoUno !=''){  
            if($InpObjUnoPesoActUnoUno =='' ||  $InpObjUnoCalifActUnoUno ==''){
                echo " Falta agregar valores a la actividad 1 del objetivo 1\n";
                $error = 1;
            } 
        }
        if($InpObjUnoActClaveDosUno !=''){
            if($InpObjUnoPesoActDosUno =='' ||  $InpObjUnoCalifActDosUno ==''){
                echo " Falta agregar valores a la ctividad 2 del objetivo 1\n";
                $error = 1;
            }
        }
        if($InpObjUnoActClaveTresUno !=''){
            if($InpObjUnoPesoActTresUno =='' ||  $InpObjUnoCalifActTresUno ==''){
                echo " Falta agregar valores a la ctividad 3 del objetivo 1\n";
                $error = 1;
            }
        }
        if($InpObjUnoActClaveCuatroUno !=''){
            if($InpObjUnoPesoActCuatroUno =='' ||  $InpObjUnoCalifActCuatroUno ==''){
                echo " Falta agregar valores a la actividad 4 del objetivo 1\n";
                $error = 1;
            }
        }
        if($InpObjUnoActClaveCincoUno !=''){
            if($InpObjUnoPesoActCincoUno =='' ||  $InpObjUnoCalifActCincoUno ==''){
                echo " Falta agregar valores a la actividad 5 del objetivo 1\n";
                $error = 1;
            }
        }

        if( $InpPesoObjetivoUno > 100 ){
            echo "El Peso del objetivo 1, no puede ser mayor a 100.\n";
            $error = 1;
        }

          $sumaPesoActiv = ((int)$InpObjUnoPesoActUnoUno + (int)$InpObjUnoPesoActDosUno + (int)$InpObjUnoPesoActTresUno + (int)$InpObjUnoPesoActCuatroUno + (int)$InpObjUnoPesoActCincoUno);
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
         $sumaPesoActivUno = ((int)$InpObjUnoPesoActUnoUno + (int)$InpObjUnoPesoActDosUno + (int)$InpObjUnoPesoActTresUno + (int)$InpObjUnoPesoActCuatroUno + (int)$InpObjUnoPesoActCincoUno);
        if( $sumaPesoActivUno > 100 ){
            echo "El total: Peso de cada actividad no debe exceder de 100.\n";
            $error = 1;
        } 
        

    } else{  echo "Has llenado el 1er objetivo, es necesario agregar almenos una actividad.\n"; $error = 1;}
$valor1 = 1;
} else { $valor1 = 0; }
if($InpObjetivoDos != '' && $InpPesoObjetivoDos !=''){
    if($InpObjDosActClaveUnoDos !='' || $InpObjDosActClaveDosDos !='' || $InpObjDosActClaveTresDos !='' || $InpObjDosActClaveCuatroDos !='' || $InpObjDosActClaveCincoDos !='' ){
        if($InpObjDosActClaveUnoDos !=''){  
            if($InpObjDosPesoActUnoDos =='' ||  $InpObjDosCalifActUnoDos ==''){
                echo " Falta agregar valores a la actividad 1 del objetivo 2\n";
                $error = 1;
            } 
        }
        if($InpObjDosActClaveDosDos !=''){
            if($InpObjDosPesoActDosDos =='' ||  $InpObjDosCalifActDosDos ==''){
                echo " Falta agregar valores a la ctividad 2 del objetivo 2\n";
                $error = 1;
            }
        }
        if($InpObjDosActClaveTresDos !=''){
            if($InpObjDosPesoActTresDos =='' ||  $InpObjDosCalifActTresDos ==''){
                echo " Falta agregar valores a la ctividad 3 del objetivo 2\n";
                $error = 1;
            }
        }
        if($InpObjDosActClaveCuatroDos !=''){
            if($InpObjDosPesoActCuatroDos =='' ||   $InpObjDosCalifActCuatroDos ==''){
                echo " Falta agregar valores a la actividad 4 del objetivo 2\n";
                $error = 1;
            }
        }
        if($InpObjDosActClaveCincoDos !=''){
            if($InpObjDosPesoActCincoDos =='' ||   $InpObjDosCalifActCincoDos ==''){
                echo " Falta agregar valores a la actividad 5 del objetivo 2\n";
                $error = 1;
            }
        }

        if( $InpPesoObjetivoDos > 100 ){
            echo "El Peso del objetivo 2, no puede ser mayor a 100.\n";
            $error = 1;
        }

         $sumaPesoActivdos = ((int)$InpObjDosPesoActUnoDos + (int)$InpObjDosPesoActDosDos + (int)$InpObjDosPesoActTresDos + (int)$InpObjDosPesoActCuatroDos + (int)$InpObjDosPesoActCincoDos);
        if( $sumaPesoActivdos > 100 ){
            echo "El total: Peso de cada actividad no debe exceder de 100.\n";
            $error = 1;
        }
    }
    else{  echo "Has llenado el 2do objetivo, es necesario agregar almenos una actividad.\n"; $error = 1; }
    $valor2= 1;
} else { $valor2 = 0; }
if($InpObjetivoTres != '' && $InpPesoObjetivoTres !=''){
    if($InpObjTresActClaveUnoTres !='' || $InpObjTresActClaveDosTres !='' || $InpObjTresActClaveTresTres !='' || $InpObjTresActClaveCuatroTres !='' || $InpObjTresActClaveCincoTres !='' ){
        if($InpObjTresActClaveUnoTres !=''){  
            if($InpObjTresPesoActUnoTres =='' || $InpObjTresCalifActUnoTres ==''){
                echo " Falta agregar valores a la actividad 1 del objetivo 3\n";
                $error = 1;
            } 
        }
        if($InpObjTresActClaveDosTres !=''){
            if($InpObjTresPesoActDosTres =='' || $InpObjTresCalifActDosTres ==''){
                echo " Falta agregar valores a la ctividad 2 del objetivo 3\n";
                $error = 1;
            }
        }
        if($InpObjDosActClaveTresDos !=''){
            if($InpObjTresPesoActTresTres =='' ||  $InpObjTresCalifActTresTres ==''){
                echo " Falta agregar valores a la ctividad 3 del objetivo 3\n";
                $error = 1;
            }
        }
        if($InpObjTresActClaveCuatroTres !=''){
            if($InpObjTresPesoActCuatroTres =='' || $InpObjTresCalifActCuatroTres ==''){
                echo " Falta agregar valores a la actividad 4 del objetivo 3 \n";
                $error = 1;
            }
        }
        if($InpObjTresActClaveCincoTres !=''){
            if($InpObjTresPesoActCincoTres =='' || $InpObjTresCalifActCincoTres ==''){
                echo " Falta agregar valores a la actividad 5 del objetivo 3 \n";
                $error = 1;
            }
        }

        if( $InpPesoObjetivoTres > 100 ){
            echo "El Peso del objetivo 3, no puede ser mayor a 100.\n";
            $error = 1;
        }

        $sumaPesoActivTres = ((int)$InpObjTresPesoActUnoTres + (int)$InpObjTresPesoActDosTres + (int)$InpObjTresPesoActTresTres + (int)$InpObjTresPesoActCuatroTres + (int)$InpObjTresPesoActCincoTres);
        if( $sumaPesoActivTres > 100 ){
            echo "El total: Peso de cada actividad no debe exceder de 100.\n";
            $error = 1;
        }
    }
    else{  echo "Has llenado el 3er objetivo, es necesario agregar almenos una actividad.\n"; $error = 1; }
    $valor3 = 1; 
} else { $valor3 = 0; }
////////
if($InpObjetivoCuatro != '' && $InpPesoObjetivoCuatro !=''){
    if($InpObjCuatroActClaveUnoCuatro !='' || $InpObjCuatroActClaveDosCuatro !='' || $InpObjCuatroActClaveTresCuatro !='' || $InpObjCuatroActClaveCuatroCuatro !='' || $InpObjCuatroActClaveCincoCuatro !='' ){
        if($InpObjCuatroActClaveUnoCuatro !=''){  
            if($InpObjCuatroPesoActUnoCuatro =='' || $InpObjCuatroCalifActUnoCuatro ==''){
                echo " Falta agregar valores a la actividad 1 del objetivo 3\n";
                $error = 1;
            } 
        }
        if($InpObjCuatroActClaveDosCuatro !=''){
            if($InpObjCuatroPesoActDosCuatro =='' || $InpObjCuatroCalifActDosCuatro ==''){
                echo " Falta agregar valores a la ctividad 2 del objetivo 3\n";
                $error = 1;
            }
        }
        if($InpObjCuatroActClaveTresCuatro !=''){
            if($InpObjCuatroPesoActTresCuatro =='' ||  $InpObjCuatroCalifActTresCuatro ==''){
                echo " Falta agregar valores a la ctividad 3 del objetivo 3\n";
                $error = 1;
            }
        }
        if($InpObjCuatroActClaveCuatroCuatro !=''){
            if($InpObjCuatroPesoActCuatroCuatro =='' || $InpObjCuatroCalifActCuatroCuatro ==''){
                echo " Falta agregar valores a la actividad 4 del objetivo 3 \n";
                $error = 1;
            }
        }
        if($InpObjCuatroActClaveCincoCuatro !=''){
            if($InpObjCuatroPesoActCincoCuatro =='' || $InpObjCuatroCalifActCincoCuatro ==''){
                echo " Falta agregar valores a la actividad 5 del objetivo 3 \n";
                $error = 1;
            }
        }

        if( $InpPesoObjetivoCuatro > 100 ){
            echo "El Peso del objetivo 3, no puede ser mayor a 100.\n";
            $error = 1;
        }

        $sumaPesoActivCuatro = ((int)$InpObjCuatroPesoActUnoCuatro + (int)$InpObjCuatroPesoActDosCuatro + (int)$InpObjCuatroPesoActTresCuatro + (int)$InpObjCuatroPesoActCuatroCuatro + (int)$InpObjCuatroPesoActCincoCuatro);
        if( $sumaPesoActivCuatro > 100 ){
            echo "El total: Peso de cada actividad no debe exceder de 100.\n";
            $error = 1;
        }
    }
    else{  echo "Has llenado el 3er objetivo, es necesario agregar almenos una actividad.\n"; $error = 1; }
    $valor4 = 1; 
} else { $valor4 = 0; }
}

 $sumib = ((int)$InpPesoObjetivoUno + (int)$InpPesoObjetivoDos + (int)$InpPesoObjetivoTres + (int)$InpPesoObjetivoCuatro);
if($sumib > 100){
    echo "La suma del peso de los objetivos no puede exceder mas de 100.\n";
    $error = 1;
}
if($InpObjetivoUno =='' && $InpObjetivoDos =='' && $InpObjetivoTres ==''  && $InpObjetivoCuatro ==''){
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
    if(empty($InpObjUnoPesoActCincoUno)){ $InpObjUnoPesoActCincoUno  = 0;} 
    if(empty($InpObjUnoMetaActCincoUno)){ $InpObjUnoMetaActCincoUno  = 0;} 
    if(empty($InpObjUnoCalifActCincoUno)){ $InpObjUnoCalifActCincoUno  = 0;} 

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
    if(empty($InpObjDosPesoActCincoDos)){ $InpObjDosPesoActCincoDos  = 0;} 
    if(empty($InpObjDosMetaActCincoDos)){ $InpObjDosMetaActCincoDos  = 0;} 
    if(empty($InpObjDosCalifActCincoDos)){ $InpObjDosCalifActCincoDos  = 0;} 

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
    if(empty($InpObjTresPesoActCincoTres)){ $InpObjTresPesoActCincoTres  = 0;} 
    if(empty($InpObjTresMetaActCincoTres)){ $InpObjTresMetaActCincoTres  = 0;} 
    if(empty($InpObjTresCalifActCincoTres)){ $InpObjTresCalifActCincoTres  = 0;} 

    if(empty($InpPesoObjetivoCuatro)){ $InpPesoObjetivoCuatro  = 0;} 
    if(empty($InpObjCuatroPesoActUnoCuatro)){ $InpObjCuatroPesoActUnoCuatro  = 0;} 
    if(empty($InpObjCuatroMetaActUnoCuatro)){ $InpObjCuatroMetaActUnoCuatro  = 0;} 
    if(empty($InpObjCuatroCalifActUnoCuatro)){ $InpObjCuatroCalifActUnoCuatro  = 0;} 
    if(empty($InpObjCuatroPesoActDosCuatro)){ $InpObjCuatroPesoActDosCuatro  = 0;} 
    if(empty($InpObjCuatroMetaActDosCuatro)){ $InpObjCuatroMetaActDosCuatro  = 0;} 
    if(empty($InpObjCuatroCalifActDosCuatro)){ $InpObjCuatroCalifActDosCuatro  = 0;} 
    if(empty($InpObjCuatroPesoActTreCuatro)){ $InpObjCuatroPesoActTreCuatro  = 0;} 
    if(empty($InpObjCuatroMetaActTreCuatro)){ $InpObjCuatroMetaActTreCuatro  = 0;} 
    if(empty($InpObjCuatroCalifActTreCuatro)){ $InpObjCuatroCalifActTreCuatro  = 0;} 
    if(empty($InpObjCuatroPesoActCuatroCuatro)){ $InpObjCuatroPesoActCuatroCuatro  = 0;} 
    if(empty($InpObjCuatroMetaActCuatroCuatro)){ $InpObjCuatroMetaActCuatroCuatro  = 0;} 
    if(empty($InpObjCuatroCalifActCuatroCuatro)){ $InpObjCuatroCalifActCuatroCuatro  = 0;} 
    if(empty($InpObjCuatroPesoActCincoCuatro)){ $InpObjCuatroPesoActCincoCuatro  = 0;} 
    if(empty($InpObjCuatroMetaActCincoCuatro)){ $InpObjCuatroMetaActCincoCuatro  = 0;} 
    if(empty($InpObjCuatroCalifActCincoCuatro)){ $InpObjCuatroCalifActCincoCuatro  = 0;} 

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
    if( $InpObjUnoCalifActCincoUno == '0' && $InpObjUnoMetaActCincoUno == '0') { 
        $porcObjUnoCumpActiCincoUno= 0;  
        $cal_ObjUnoponderadaCincoUno = 0;
    } else {  
       $porcObjUnoCumpActiCincoUno = ($InpObjUnoCalifActCincoUno / $InpObjUnoMetaActCincoUno)*100 ; 
       $cal_ObjUnoponderadaCincoUno = (($InpObjUnoPesoActCincoUno * $InpPesoObjetivoUno ) / 100) * ($InpObjUnoCalifActCincoUno / $InpObjUnoMetaActCincoUno);
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
    if( $InpObjDosCalifActCincoDos == '0' && $InpObjDosMetaActCincoDos == '0') { 
        $porcObjDosCumpActiCincoDos= 0;  
        $cal_ObjDosponderadaCincoDos = 0;
    } else {  
       $porcObjDosCumpActiCincoDos = ($InpObjDosCalifActCincoDos / $InpObjDosMetaActCincoDos)*100 ; 
       $cal_ObjDosponderadaCincoDos = (($InpObjDosPesoActCincoDos * $InpPesoObjetivoDos ) / 100) * ($InpObjDosCalifActCincoDos / $InpObjDosMetaActCincoDos);
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
       $cal_ObjTresponderadaCuatroTres = (($InpObjTresPesoActCuatroTres * $InpPesoObjetivoTres ) / 100) * ($InpObjTresCalifActCuatroTres / $InpObjTresMetaActCuatroTres);
    }
    if( $InpObjTresCalifActCincoTres == '0' && $InpObjTresMetaActCincoTres == '0') { 
        $porcObjTresCumpActiCincoTres= 0;  
        $cal_ObjTresponderadaCincoTres = 0;
    } else {  
       $porcObjTresCumpActiCincoTres = ($InpObjTresCalifActCincoTres / $InpObjTresMetaActCincoTres)*100 ; 
       $cal_ObjTresponderadaCincoTres = (($InpObjTresPesoActCincoTres * $InpPesoObjetivoTres ) / 100) * ($InpObjTresCalifActCincoTres / $InpObjTresMetaActCincoTres);
    }



    if( $InpObjCuatroCalifActUnoCuatro == '0' && $InpObjCuatroMetaActUnoCuatro == '0') { 
        $porcObjCuatroCumpActiUnoCuatro= 0;  
        $cal_ObjCuatroponderadaUnoCuatro = 0;
    } else {  
       $porcObjCuatroCumpActiUnoCuatro = ($InpObjCuatroCalifActUnoCuatro / $InpObjCuatroMetaActUnoCuatro)*100 ; 
       $cal_ObjCuatroponderadaUnoCuatro = (($InpObjCuatroPesoActUnoCuatro * $InpPesoObjetivoCuatro ) / 100) * ($InpObjCuatroCalifActUnoCuatro / $InpObjCuatroMetaActUnoCuatro);
    }
    if( $InpObjCuatroCalifActDosCuatro == '0' && $InpObjCuatroMetaActDosCuatro == '0') { 
        $porcObjCuatroCumpActiDosCuatro= 0;  
        $cal_ObjCuatroponderadaDosCuatro = 0;
    } else {  
       $porcObjCuatroCumpActiDosCuatro = ($InpObjCuatroCalifActDosCuatro / $InpObjCuatroMetaActDosCuatro)*100 ; 
       $cal_ObjCuatroponderadaDosCuatro = (($InpObjCuatroPesoActDosCuatro * $InpPesoObjetivoCuatro ) / 100) * ($InpObjCuatroCalifActDosCuatro / $InpObjCuatroMetaActDosCuatro);
    }
    if( $InpObjCuatroCalifActTresCuatro == '0' && $InpObjCuatroMetaActTresCuatro == '0') { 
        $porcObjCuatroCumpActiTresCuatro= 0;  
        $cal_ObjCuatroponderadaTresCuatro = 0;
    } else {  
       $porcObjCuatroCumpActiTresCuatro = ($InpObjCuatroCalifActTresCuatro / $InpObjCuatroMetaActTresCuatro)*100 ; 
       $cal_ObjCuatroponderadaTresCuatro = (($InpObjCuatroPesoActTresCuatro * $InpPesoObjetivoCuatro ) / 100) * ($InpObjCuatroCalifActTresCuatro / $InpObjCuatroMetaActTresCuatro);
    }
    if( $InpObjCuatroCalifActCuatroCuatro == '0' && $InpObjCuatroMetaActCuatroCuatro == '0') { 
        $porcObjCuatroCumpActiCuatroCuatro= 0;  
        $cal_ObjCuatroponderadaCuatroCuatro = 0;
    } else {  
       $porcObjCuatroCumpActiCuatroCuatro = ($InpObjCuatroCalifActCuatroCuatro / $InpObjCuatroMetaActCuatroCuatro)*100 ; 
       $cal_ObjCuatroponderadaCuatroCuatro = (($InpObjCuatroPesoActCuatroCuatro * $InpPesoObjetivoCuatro ) / 100) * ($InpObjCuatroCalifActCuatroCuatro / $InpObjCuatroMetaActCuatroCuatro);
    }
    if( $InpObjCuatroCalifActCincoCuatro == '0' && $InpObjCuatroMetaActCincoCuatro == '0') { 
        $porcObjCuatroCumpActiCincoCuatro= 0;  
        $cal_ObjCuatroponderadaCincoCuatro = 0;
    } else {  
       $porcObjCuatroCumpActiCincoCuatro = ($InpObjCuatroCalifActCincoCuatro / $InpObjCuatroMetaActCincoCuatro)*100 ; 
       $cal_ObjCuatroponderadaCincoCuatro = (($InpObjCuatroPesoActCincoCuatro * $InpPesoObjetivoCuatro ) / 100) * ($InpObjCuatroCalifActCincoCuatro / $InpObjCuatroMetaActCincoCuatro);
    }


    
$query= "INSERT INTO objetivos_info_new(
    fecha,
    nombre_empleado,
    puesto,
    departamento,
    direccion,
    nombre_evaluador,
    fecha_Ingreso,
    periodo_evaluacion,
    calificacion_objetivos,
    calific_competencias,
    calific_total_evaluacion_desempeno,
    areas_a_mejorar,
    fortalezas,
    comp_revisar_prox_evaluacion,
    id_slack,
    fecha_insercion, 
    usuario_insercion, 
    hora_insercion,
    eliminada )
select 
current_date,
nombre_completo,
nombreposicion,
departamento,
direccion,
'$id_user',
fechadeingresoorganizacion,
'',
0,
0,
0,
'$InpAreasMejorar',
'$InpFortalezas',
'$InpCompRevProxEvalue',
'$id_slack', 
current_date,
'$id_user',
CURRENT_TIMESTAMP,
'0'
from empleado 
where id_slack = $id_slack" ;
$result = mysqli_query($conexion, $query);


  $queryobj= "INSERT INTO objetivos_new(
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
$cal_ObjUnoponderadaUnoUno ,
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
$cal_ObjUnoponderadaDosUno ,
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
$cal_ObjUnoponderadaTresUno ,
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
$cal_ObjUnoponderadaCuatroUno ,
'$InpObjUnoComentCuatroUno',
'$id_slack',
1,
4,
'$id_user'),
(
'$InpObjetivoUno',
0,
'$InpObjUnoActClaveCincoUno',
'$InpObjUnoPesoActCincoUno',
($InpObjUnoPesoActCincoUno * $InpPesoObjetivoUno )/ 100,
'$InpObjUnoMetaActCincoUno',
'$InpObjUnoCalifActCincoUno',
$porcObjUnoCumpActiCincoUno,
$cal_ObjUnoponderadaCincoUno ,
'$InpObjUnoComentCincoUno',
'$id_slack',
1,
5,
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
$cal_ObjDosponderadaUnoDos ,
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
$cal_ObjDosponderadaDosDos ,
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
$cal_ObjDosponderadaTresDos ,
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
$cal_ObjDosponderadaCuatroDos ,
'$InpObjDosComentCuatroDos',
'$id_slack',
2,
4,
'$id_user'),
(
'$InpObjetivoDos',
0,
'$InpObjDosActClaveCincoDos',
'$InpObjDosPesoActCincoDos',
($InpObjDosPesoActCincoDos * $InpPesoObjetivoDos )/ 100,
'$InpObjDosMetaActCincoDos',
'$InpObjDosCalifActCincoDos',
$porcObjDosCumpActiCincoDos,
$cal_ObjDosponderadaCincoDos ,
'$InpObjDosComentCincoDos',
'$id_slack',
2,
5,
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
$cal_ObjTresponderadaUnoTres ,
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
$cal_ObjTresponderadaDosTres ,
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
$cal_ObjTresponderadaTresTres ,
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
$cal_ObjTresponderadaCuatroTres ,
'$InpObjTresComentCuatroTres',
'$id_slack',
3,
4,
'$id_user') ,
(
'$InpObjetivoTres',
0,
'$InpObjTresActClaveCincoTres',
'$InpObjTresPesoActCincoTres',
($InpObjTresPesoActCincoTres * $InpPesoObjetivoTres )/ 100,
'$InpObjTresMetaActCincoTres',
'$InpObjTresCalifActCincoTres',
$porcObjTresCumpActiCincoTres,
$cal_ObjTresponderadaCincoTres ,
'$InpObjTresComentCincoTres',
'$id_slack',
3,
5,
'$id_user') ,

-- objetivo 4
(
'$InpObjetivoCuatro',
'$InpPesoObjetivoCuatro',
'$InpObjCuatroActClaveUnoCuatro',
'$InpObjCuatroPesoActUnoCuatro',
($InpObjCuatroPesoActUnoCuatro * $InpPesoObjetivoCuatro )/ 100,
'$InpObjCuatroMetaActUnoCuatro',
'$InpObjCuatroCalifActUnoCuatro',
$porcObjCuatroCumpActiUnoCuatro,
$cal_ObjCuatroponderadaUnoCuatro ,
'$InpObjCuatroComentUnoCuatro',
'$id_slack',
4,
1,
'$id_user'),
(
'$InpObjetivoCuatro',
0,
'$InpObjCuatroActClaveDosCuatro',
'$InpObjCuatroPesoActDosCuatro',
($InpObjCuatroPesoActDosCuatro * $InpPesoObjetivoCuatro )/ 100,
'$InpObjCuatroMetaActDosCuatro',
'$InpObjCuatroCalifActDosCuatro',
$porcObjCuatroCumpActiDosCuatro,
$cal_ObjCuatroponderadaDosCuatro ,
'$InpObjCuatroComentDosCuatro',
'$id_slack',
4,
2,
'$id_user'),
(
'$InpObjetivoCuatro',
0,
'$InpObjCuatroActClaveTresCuatro',
'$InpObjCuatroPesoActTresCuatro',
($InpObjCuatroPesoActTresCuatro * $InpPesoObjetivoCuatro )/ 100,
'$InpObjCuatroMetaActTresCuatro',
'$InpObjCuatroCalifActTresCuatro',
$porcObjCuatroCumpActiTresCuatro,
$cal_ObjCuatroponderadaTresCuatro ,
'$InpObjCuatroComentTresCuatro',
'$id_slack',
4,
3,
'$id_user'),
(
'$InpObjetivoCuatro',
0,
'$InpObjCuatroActClaveCuatroCuatro',
'$InpObjCuatroPesoActCuatroCuatro',
($InpObjCuatroPesoActCuatroCuatro * $InpPesoObjetivoCuatro )/ 100,
'$InpObjCuatroMetaActCuatroCuatro',
'$InpObjCuatroCalifActCuatroCuatro',
$porcObjCuatroCumpActiCuatroCuatro,
$cal_ObjCuatroponderadaCuatroCuatro ,
'$InpObjCuatroComentCuatroCuatro',
'$id_slack',
4,
4,
'$id_user') ,
(
'$InpObjetivoCuatro',
0,
'$InpObjCuatroActClaveCincoCuatro',
'$InpObjCuatroPesoActCincoCuatro',
($InpObjCuatroPesoActCincoCuatro * $InpPesoObjetivoCuatro )/ 100,
'$InpObjCuatroMetaActCincoCuatro',
'$InpObjCuatroCalifActCincoCuatro',
$porcObjCuatroCumpActiCincoCuatro,
$cal_ObjCuatroponderadaCincoCuatro ,
'$InpObjCuatroComentCincoCuatro',
'$id_slack',
4,
5,
'$id_user') 

" ;
$resultobj = mysqli_query($conexion, $queryobj);

$sqls = mysqli_query ($conexion,"SELECT * from competencias_new where id_slack = '$id_slack'");
		
$resultsss= mysqli_num_rows($sqls);
if ($resultsss > 0) {
    $queryobjupd= "UPDATE objetivos_info_new a 
inner join (SELECT round((sum(calificacion_ponderada)* 0.8)) AS calificacion_objetivos , id_slack 
FROM `objetivos_new` where id_slack =$id_slack ) as b  on b.id_slack = a.id_slack
set a.calificacion_objetivos = b.calificacion_objetivos"  ;

$resultobjupd = mysqli_query($conexion, $queryobjupd);

 $queryobjupunt= "UPDATE objetivos_info_new a 
inner join (SELECT round(((puntaje_obtenido / 72) * 0.2)*100) as puntaje_obtenido , id_slack 
FROM `competencias_new` where id_slack =$id_slack ) as b  on b.id_slack = a.id_slack
set a.calific_competencias = b.puntaje_obtenido " ;
$resultobjupunt = mysqli_query($conexion, $queryobjupunt);

$queryobjuclas="UPDATE objetivos_info_new SET calific_total_evaluacion_desempeno = (calificacion_objetivos + calific_competencias)
WHERE id_slack =$id_slack" ;

$resultobjuclas = mysqli_query($conexion, $queryobjuclas); 
}

if($queryobj){
     		echo "Insertado";
     	} else { echo "No Insertado"; }

    

}else{ echo "No insertardo "; }

 


?>