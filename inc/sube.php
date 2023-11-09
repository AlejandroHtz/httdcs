<?php 

require 'Classes/PHPExcel/IOFactory.php';
require ('../conexion.php');

$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];
$user =$_SESSION['email'];


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
		$nombreArchivo = 'archivos/lista.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
		 $username = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		 $email = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		 $status = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		 $billing_active = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		 $has_2fa = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		 $has_sso = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		 $userid = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		 $fullname = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		 $displayname = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		 $expiration_timestamp = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		
		 $sql = mysqli_query ($conexion,"SELECT username  from slack where username = '$username'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE slack
			SET  
			
			email='$email', 
			slack.status='$status', 
			billing_active='$billing_active', 
			has_2fa='$has_2fa', 
			has_sso='$has_sso', 
			userid='$userid', 
			fullname='$fullname', 
			displayname='$displayname', 
			expiration_timestamp='$expiration_timestamp', 
			fecha_modif=current_date, 
			hora_modif=current_time,
			usuario_modif='$user'
			where username = '$username'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $username."-Actualizado<br>";
			}else{ 
				echo $username."-No Actualizado<br>"; 
			}
		}else{
			
			$sqlinser = "INSERT INTO slack
			(username, 
			email, 
			slack.status, 
			billing_active, 
			has_2fa, 
			has_sso, 
			userid, 
			fullname, 
			displayname, 
			expiration_timestamp, 
			region, 
			id_workbeat, 
			fecha_inser, 
			hora_inser, 
			eliminada,
			usuario_inser)
			VALUES(
			'$username',
			'$email',
			'$status',
			'$billing_active',
			'$has_2fa',
			'$has_sso',
			'$userid',
			'$fullname',
			'$displayname',
			'$expiration_timestamp',
			'',
			0,
			current_date,
			current_time,
			0,
			'$user'	
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				echo $username."-Insertado <br>";
			}else{
				echo $username."-No Insertado <br>";
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
