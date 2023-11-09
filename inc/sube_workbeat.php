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
		$nombreArchivo = 'archivos/workbeat.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $guidexpediente	= $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $nombrepersona	= $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $apellidopaterno	= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $apellidomaterno	= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $nombre_completo	= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $nombreposicion	= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $correoelectronico	= $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $fechadenacimiento	= $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $sexo	= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $empleadoactivorh	= $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $fechadebajarh	= $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $fechadeingresoorganizacionn	= $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        
        $timestamp = PHPExcel_Shared_Date::ExcelToPHP($fechadeingresoorganizacionn);
        $fechadeingresoorganizacion = gmdate("Y/m/d", $timestamp); 
        $razonsocial	= $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $activonomina	= $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $departamento	= $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $departamento_netsuite	= $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $direccion	= $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $region	= $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $nivel_jerarquico	= $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        

		
		 $expiration_timestamp = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		
		 $sql = mysqli_query ($conexion,"SELECT nombre_completo  from workbeat where nombre_completo = '$nombre_completo'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE workbeat
			SET  			
			guidexpediente= '$guidexpediente',
            nombrepersona= '$nombrepersona',
            apellidopaterno= '$apellidopaterno',
            apellidomaterno= '$apellidomaterno',
            nombreposicion= '$nombreposicion',
            correoelectronico= '$correoelectronico',
            fechadenacimiento= '$fechadenacimiento',
            sexo= '$sexo',
            empleadoactivorh= '$empleadoactivorh',
            fechadebajarh= '$fechadebajarh',
            fechadeingresoorganizacion= '$fechadeingresoorganizacion',
            razonsocial= '$razonsocial',
            activonomina= '$activonomina',
            departamento= '$departamento',
            departamento_netsuite= '$departamento_netsuite',
            direccion= '$direccion',
            region= '$region',
            nivel_jerarquico= '$nivel_jerarquico',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  nombre_completo= '$nombre_completo'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $nombre_completo."-Actualizado<br>";
			}else{ 
				echo $nombre_completo."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO workbeat
			(
            guidexpediente,
            nombrepersona,
            apellidopaterno,
            apellidomaterno,
            nombre_completo,
            nombreposicion,
            correoelectronico,
            fechadenacimiento,
            sexo,
            empleadoactivorh,
            fechadebajarh,
            fechadeingresoorganizacion,
            razonsocial,
            activonomina,
            departamento,
            departamento_netsuite,
            direccion,
            region,
            nivel_jerarquico,
			eliminada,
			fecha_insertado,
			hora_insercion)
			VALUES(
			'$guidexpediente',
            '$nombrepersona',
            '$apellidopaterno',
            '$apellidomaterno',
            '$nombre_completo',
            '$nombreposicion',
            '$correoelectronico',
            '$fechadenacimiento',
            '$sexo',
            '$empleadoactivorh',
            '$fechadebajarh',
            '$fechadeingresoorganizacion',
            '$razonsocial',
            '$activonomina',
            '$departamento',
            '$departamento_netsuite',
            '$direccion',
            '$region',
            '$nivel_jerarquico',
				0,
			current_date,
			current_time
            	
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE workbeat  
				INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(workbeat.correoelectronico, 1,(instr(workbeat.correoelectronico,'@')-1 )))
				SET workbeat.id_slack = slack.id_slack , workbeat.eliminada = slack.eliminada
                    where workbeat.correoelectronico = '$correoelectronico'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $nombre_completo."-Insertado y id_slack actualizado <br>";
            }else{
                echo $nombre_completo."-Insertado <br>";
            }

				
			}else{
				echo $nombre_completo."-No Insertado <br>";
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
