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
		$nombreArchivo = 'archivos/google_cloudsuite.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
$first_name	= $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
$last_name	= $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
$email_address	= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
$password	= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
$password_hash_function	= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
$org_unit_path	= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
$new_primary_email	= $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
$status	= $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
$last_sign_in	= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
$recovery_email	= $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
$home_secondary_email	= $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
$work_secondary_email	= $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
$recovery_phone	= $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
$work_phone	= $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
$home_phone	= $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
$mobile_phone	= $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
$work_address	= $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
$home_address	= $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
$employee_id	= $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
$employee_type	= $objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
$employee_title	= $objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
$manager_email	= $objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
$department	= $objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
$cost_center	= $objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
$dossv_enrolled	= $objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
$dossv_enforced	= $objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
$building_id	= $objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
$floor_name	= $objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
$floor_section	= $objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
$email_usage	= $objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
$drive_usage	= $objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
$photos_usage	= $objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
$storage_limit	= $objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
$storage_used	= $objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
$change_password_at_next_signin	= $objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
$new_status	= $objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();
$advanced_protection_program_enrollment	= $objPHPExcel->getActiveSheet()->getCell('AK'.$i)->getCalculatedValue();

		
		 $expiration_timestamp = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		
		 $sql = mysqli_query ($conexion,"SELECT email_address  from google_cloudsuite where email_address = '$email_address'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE google_cloudsuite
			SET  			
			first_name = '$first_name',
			last_name = '$last_name',
			google_cloudsuite.password = '$password',
			password_hash_function = '$password_hash_function',
			org_unit_path = '$org_unit_path',
			new_primary_email = '$new_primary_email',
			google_cloudsuite.status = '$status',
			last_sign_in = '$last_sign_in',
			recovery_email = '$recovery_email',
			home_secondary_email = '$home_secondary_email',
			work_secondary_email = '$work_secondary_email',
			recovery_phone = '$recovery_phone',
			work_phone = '$work_phone',
			home_phone = '$home_phone',
			mobile_phone = '$mobile_phone',
			work_address = '$work_address',
			home_address = '$home_address',
			employee_id = '$employee_id',
			employee_type = '$employee_type',
			employee_title = '$employee_title',
			manager_email = '$manager_email',
			department = '$department',
			cost_center = '$cost_center',
			2sv_enrolled = '$dossv_enrolled',
			2sv_enforced = '$dossv_enforced',
			building_id = '$building_id',
			floor_name = '$floor_name',
			floor_section = '$floor_section',
			email_usage = '$email_usage',
			drive_usage = '$drive_usage',
			photos_usage = '$photos_usage',
			storage_limit = '$storage_limit',
			storage_used = '$storage_used',
			change_password_at_next_signin = '$change_password_at_next_signin',
			new_status = '$new_status',
			advanced_protection_program_enrollment = '$advanced_protection_program_enrollment',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  email_address= '$email_address'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $email_address."-Actualizado<br>";
			}else{ 
				echo $email_address."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO google_cloudsuite
			(
			first_name,
			last_name,
			email_address,
			google_cloudsuite.password,
			password_hash_function,
			org_unit_path,
			new_primary_email,
			google_cloudsuite.status,
			last_sign_in,
			recovery_email,
			home_secondary_email,
			work_secondary_email,
			recovery_phone,
			work_phone,
			home_phone,
			mobile_phone,
			work_address,
			home_address,
			employee_id,
			employee_type,
			employee_title,
			manager_email,
			department,
			cost_center,
			2sv_enrolled,
			2sv_enforced,
			building_id,
			floor_name,
			floor_section,
			email_usage,
			drive_usage,
			photos_usage,
			storage_limit,
			storage_used,
			change_password_at_next_signin,
			new_status,
			advanced_protection_program_enrollment,
			eliminada,
			fecha_insercion,
			hora_insercion)
			VALUES(
				
				'$first_name',
				'$last_name',
				'$email_address',
				'$password',
				'$password_hash_function',
				'$org_unit_path',
				'$new_primary_email',
				'$status',
				'$last_sign_in',
				'$recovery_email',
				'$home_secondary_email',
				'$work_secondary_email',
				'$recovery_phone',
				'$work_phone',
				'$home_phone',
				'$mobile_phone',
				'$work_address',
				'$home_address',
				'$employee_id',
				'$employee_type',
				'$employee_title',
				'$manager_email',
				'$department',
				'$cost_center',
				'$dossv_enrolled',
				'$dossv_enforced',
				'$building_id',
				'$floor_name',
				'$floor_section',
				'$email_usage',
				'$drive_usage',
				'$photos_usage',
				'$storage_limit',
				'$storage_used',
				'$change_password_at_next_signin',
				'$new_status',
				'$advanced_protection_program_enrollment',
				0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE google_cloudsuite  
				INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(google_cloudsuite.email_address, 1,(instr(google_cloudsuite.email_address,'@')-1 )))
				SET google_cloudsuite.id_slack = slack.id_slack , google_cloudsuite.eliminada = slack.eliminada
                    where google_cloudsuite.email_address = '$email_address'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $email_address."-Insertado y id_slack actualizado <br>";
            }else{
                echo $email_address."-Insertado <br>";
            }

				
			}else{
				echo $email_address."-No Insertado <br>";
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
