<?php 

require 'Classes/PHPExcel/IOFactory.php';
require ('../conexion.php');

$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];


// if(!file_exists('archivos')){
// 	mkdir('archivos',0777,true);
// 	if(file_exists('archivos')){
// 		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
// 			$nombreArchivo = 'archivos/lista.xlsx';
	
// 	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
// 	$objPHPExcel->setActiveSheetIndex(0);
	
// 	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
// 	for($i = 2; $i <= $numRows; $i++){
// 		$codigo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
// 		$descripcion = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
// 		$costo = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		
		
	
	
// 			$connection=mysqli_connect("localhost","root","","eqgorsa");
// 			$descripcion= mysqli_real_escape_string($connection, $descripcion); 
// 			$connection->query("INSERT INTO historial (accion,actualcosto,anteriorcosto,codigo,fecha,hora,id)
// 			select 'CAMBIO DE PRECIO','$costo',pco,'$codigo',current_date,CURRENT_TIMESTAMP,'' from general where id = '$codigo'");

// 		$sql = "UPDATE general SET pco='$costo'
// 		where id = '$codigo'";
// 		$result = $mysqli->query($sql);


// 	}if ($result){
// 		echo "<script> alert('Actualizado')
//  window.location='index.php';
//    </script>";

// 	}else {
// 		echo "<script> alert('No Actualizado')
// 		window.location='index.php';
// 		  </script>";
// 		}

// 		}else{
// 			echo "<script> alert('Archivo no se pudo guardar')
// 			window.location='index.php';
// 			  </script>";
// 		}
// 	}
// }else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		$nombreArchivo = 'archivos/apc.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $contact	=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $email	=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $rolee	=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
       
		 $sql = mysqli_query ($conexion,"SELECT contact from apc where contact = '$contact' and email = '$email'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE apc
			SET  			
			contact = '$contact',
            email = '$email',
            rolee = '$rolee',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  contact = '$contact' and email = '$email' ";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $contact."-Actualizado<br>";
			}else{ 
				echo $contact."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO apc
			(
            contact ,
            email ,
            rolee,
			eliminada,
			fecha_insercion,
			hora_insercion)
			VALUES(
            '$contact',
            '$email',
            '$rolee',
			0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		 
			if($resultinser){
				 $sqlupids = "UPDATE apc  
                 INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(apc.email, 1,(instr(apc.email,'@')-1 )))
                 SET apc.id_slack = slack.id_slack
                    where upper (SUBSTRING(apc.email, 1,(instr(apc.email,'@')-1 )))= upper (SUBSTRING('$email', 1,(instr('$email','@')-1 )))";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $nombre."-Insertado y id_slack actualizado <br>";
            }else{
                echo $nombre."-Insertado <br>";
            }

				
			}else{
				echo $nombre."-No Insertado <br>";
			}
			
		 }
	}
// 	if ($result){ 
// 		echo "<script> alert('Actualizado')
//  window.location='index.php';
//    </script>";

// 	}else {
// 		echo "<script> alert('No Actualizado')
// 		window.location='index.php';
// 		  </script>";
// 		}

	}else{
		echo "<script> alert('Archivo no se pudo guardar')
 window.location='index.php';
   </script>";

	
	}
// }
