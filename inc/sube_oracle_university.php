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
		$nombreArchivo = 'archivos/Oracle University.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $name= $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $certifications= $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $email= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $orderr= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $time_spent= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $expiration= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		
		 $sql = mysqli_query ($conexion,"SELECT oracle_university.name  from oracle_university where oracle_university.name = '$name'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE oracle_university
			SET  
			certifications = '$certifications',
            email = '$email',
            orderr = '$orderr',
            time_spent = '$time_spent',
            expiration = '$expiration',
			fecha_modificacion=current_date, 
			hora_modificacion=current_time
			where oracle_university.email = '$email'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $name."-Actualizado<br>";
			}else{ 
				echo $name."-No Actualizado<br>"; 
			}
		}else{
			
			  $sqlinser = "INSERT INTO oracle_university
			(oracle_university.name,
            certifications,
            email,
            orderr,
            time_spent,
            expiration,
			fecha_insercion, 
			hora_insercion, 
			eliminada)
			VALUES(
            '$name',
            '$certifications',
            '$email',
            '$orderr',
            '$time_spent',
            '$expiration',
			current_date,
			current_time,
			0		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
                $sqlupids = "UPDATE oracle_university  
                INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(oracle_university.email, 1,(instr(oracle_university.email,'@')-1 )))
                SET oracle_university.id_slack = slack.id_slack, oracle_university.eliminada = slack.eliminada
                    where oracle_university.name = '$name'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $name."-Insertado y id_slack actualizado <br>";
            }else{
                echo $name."-Insertado <br>";
            }



			}else{
				echo $name."-No Insertado <br>";
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
