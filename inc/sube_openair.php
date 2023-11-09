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
		$nombreArchivo = 'archivos/openair.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $user_id	= $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $user	= $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $first_name	= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $last_name	= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $active	= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $last_login	= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $role	= $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $resource_type	= $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $primary_filter_set	= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $department	= $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $manager	= $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $job_code	= $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        $user_location	= $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $employee_region	= $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $locked	= $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        


		
		 $expiration_timestamp = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		
		 $sql = mysqli_query ($conexion,"SELECT openair.user_id  from openair where openair.user_id = '$user_id'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE openair
			SET  			
			
            user= '$user',
            first_name= '$first_name',
            last_name= '$last_name',
            active= '$active',
            last_login= '$last_login',
            role= '$role',
            resource_type= '$resource_type',
            primary_filter_set= '$primary_filter_set',
            department= '$department',
            manager= '$manager',
            job_code= '$job_code',
            user_location= '$user_location',
            employee_region= '$employee_region',
            locked= '$locked',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  openair.user_id= '$user_id'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $user_id."-Actualizado<br>";
			}else{ 
				echo $user_id."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO openair
			(
            openair.user_id,
            user,
            first_name,
            last_name,
            active,
            last_login,
            role,
            resource_type,
            primary_filter_set,
            department,
            manager,
            job_code,
            user_location,
            employee_region,
            locked,
			eliminada,
			fecha_insercion,
			hora_insercion)
			VALUES(
            '$user_id',
            '$user',
            '$first_name',
            '$last_name',
            '$active',
            '$last_login',
            '$role',
            '$resource_type',
            '$primary_filter_set',
            '$department',
            '$manager',
            '$job_code',
            '$user_location',
            '$employee_region',
            '$locked',
			0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE openair  
				INNER JOIN slack on upper (slack.username) = upper (openair.user_id)
				SET openair.id_slack = slack.id_slack, openair.eliminada = slack.eliminada
                    where openair.user_id = '$user_id'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $user_id."-Insertado y id_slack actualizado <br>";
            }else{
                echo $user_id."-Insertado <br>";
            }

				
			}else{
				echo $user_id."-No Insertado <br>";
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
