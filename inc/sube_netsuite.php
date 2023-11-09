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
		$nombreArchivo = 'archivos/netsuite.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $nombre	=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $correo_electronico	=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $supervisor	=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $acceso_de_inicio_de_sesion	=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $clase	=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $subsidiaria	=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $departamento	=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $ubicacion	=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $representante_de_ventas	=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $representante_de_soporte	=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $denominacion_de_puesto_de_trabajo	=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $cuenta	=$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        $tipo_de_empleado	=$objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $ciudad_facturacion	=$objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $estado_provincia_de_facturacion	=$objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $codigo_postal_facturacion	=$objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $pais_de_facturacion	=$objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $fecha_de_creacion	=$objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $ultima_modificacion	=$objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $fecha_de_nacimiento	=$objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
        $fecha_de_contratacion	=$objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
        $fecha_de_liberacion_terminacion	=$objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
        $ultima_revision	=$objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
        $proxima_revision	=$objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
        $numero_telefonico_de_la_oficina	=$objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
        $telefono_particular	=$objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
        $fax	=$objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
        $responsable_de_aprobacion_de_gastos	=$objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
        $status	=$objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
        $estado_civil	=$objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
        $genero	=$objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
        $limite_de_autorizacion_de_gastos	=$objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
        $ultima_fecha_de_pago	=$objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
        $frecuencia_de_pago	=$objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
        $usar_datos_de_tiempo	=$objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
        $lugar_de_trabajo	=$objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();
        $marketing	=$objPHPExcel->getActiveSheet()->getCell('AK'.$i)->getCalculatedValue();
        $inicio_preview	=$objPHPExcel->getActiveSheet()->getCell('AL'.$i)->getCalculatedValue();
        $fin_preview	=$objPHPExcel->getActiveSheet()->getCell('AM'.$i)->getCalculatedValue();
        $actualizacion	=$objPHPExcel->getActiveSheet()->getCell('AN'.$i)->getCalculatedValue();
        $cloudextend_google_calendar	=$objPHPExcel->getActiveSheet()->getCell('AO'.$i)->getCalculatedValue();
        $sitio_web	=$objPHPExcel->getActiveSheet()->getCell('AP'.$i)->getCalculatedValue();
        $linkedin	=$objPHPExcel->getActiveSheet()->getCell('AQ'.$i)->getCalculatedValue();
        $numero_identificacion_tributaria	=$objPHPExcel->getActiveSheet()->getCell('AR'.$i)->getCalculatedValue();
        $digito_verificador	=$objPHPExcel->getActiveSheet()->getCell('AS'.$i)->getCalculatedValue();
        $rol	=$objPHPExcel->getActiveSheet()->getCell('AT'.$i)->getCalculatedValue();
        
   
		 $sql = mysqli_query ($conexion,"SELECT nombre from netsuite where nombre = '$nombre'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE netsuite
			SET  			
			nombre = '$nombre',
            correo_electronico = '$correo_electronico',
            supervisor = '$supervisor',
            acceso_de_inicio_de_sesion = '$acceso_de_inicio_de_sesion',
            clase = '$clase',
            subsidiaria = '$subsidiaria',
            departamento = '$departamento',
            ubicacion = '$ubicacion',
            representante_de_ventas = '$representante_de_ventas',
            representante_de_soporte = '$representante_de_soporte',
            denominacion_de_puesto_de_trabajo = '$denominacion_de_puesto_de_trabajo',
            cuenta = '$cuenta',
            tipo_de_empleado = '$tipo_de_empleado',
            ciudad_facturacion = '$ciudad_facturacion',
            estado_provincia_de_facturacion = '$estado_provincia_de_facturacion',
            codigo_postal_facturacion = '$codigo_postal_facturacion',
            pais_de_facturacion = '$pais_de_facturacion',
            fecha_de_creacion = '$fecha_de_creacion',
            ultima_modificacion = '$ultima_modificacion',
            fecha_de_nacimiento = '$fecha_de_nacimiento',
            fecha_de_contratacion = '$fecha_de_contratacion',
            fecha_de_liberacion_terminacion = '$fecha_de_liberacion_terminacion',
            ultima_revision = '$ultima_revision',
            proxima_revision = '$proxima_revision',
            numero_telefonico_de_la_oficina = '$numero_telefonico_de_la_oficina',
            telefono_particular = '$telefono_particular',
            fax = '$fax',
            responsable_de_aprobacion_de_gastos = '$responsable_de_aprobacion_de_gastos',
            netsuite.status = '$status',
            estado_civil = '$estado_civil',
            genero = '$genero',
            limite_de_autorizacion_de_gastos = '$limite_de_autorizacion_de_gastos',
            ultima_fecha_de_pago = '$ultima_fecha_de_pago',
            frecuencia_de_pago = '$frecuencia_de_pago',
            usar_datos_de_tiempo = '$usar_datos_de_tiempo',
            lugar_de_trabajo = '$lugar_de_trabajo',
            marketing = '$marketing',
            inicio_preview = '$inicio_preview',
            fin_preview = '$fin_preview',
            actualizacion = '$actualizacion',
            cloudextend_google_calendar = '$cloudextend_google_calendar',
            sitio_web = '$sitio_web',
            linkedin = '$linkedin',
            numero_identificacion_tributaria = '$numero_identificacion_tributaria',
            digito_verificador = '$digito_verificador',
            rol = '$rol',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  nombre = '$nombre' and correo_electronico ='$correo_electronico' and rol = '$rol' ";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $nombre."-Actualizado<br>";
			}else{ 
				echo $nombre."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO netsuite
			(
            nombre,
            correo_electronico,
            supervisor,
            acceso_de_inicio_de_sesion,
            clase,
            subsidiaria,
            departamento,
            ubicacion,
            representante_de_ventas,
            representante_de_soporte,
            denominacion_de_puesto_de_trabajo,
            cuenta,
            tipo_de_empleado,
            ciudad_facturacion,
            estado_provincia_de_facturacion,
            codigo_postal_facturacion,
            pais_de_facturacion,
            fecha_de_creacion,
            ultima_modificacion,
            fecha_de_nacimiento,
            fecha_de_contratacion,
            fecha_de_liberacion_terminacion,
            ultima_revision,
            proxima_revision,
            numero_telefonico_de_la_oficina,
            telefono_particular,
            fax,
            responsable_de_aprobacion_de_gastos,
            netsuite.status,
            estado_civil,
            genero,
            limite_de_autorizacion_de_gastos,
            ultima_fecha_de_pago,
            frecuencia_de_pago,
            usar_datos_de_tiempo,
            lugar_de_trabajo,
            marketing,
            inicio_preview,
            fin_preview,
            actualizacion,
            cloudextend_google_calendar,
            sitio_web,
            linkedin,
            numero_identificacion_tributaria,
            digito_verificador,
            rol,
			eliminada,
			fecha_insercion,
			hora_insercion)
			VALUES(
            '$nombre',
            '$correo_electronico',
            '$supervisor',
            '$acceso_de_inicio_de_sesion',
            '$clase',
            '$subsidiaria',
            '$departamento',
            '$ubicacion',
            '$representante_de_ventas',
            '$representante_de_soporte',
            '$denominacion_de_puesto_de_trabajo',
            '$cuenta',
            '$tipo_de_empleado',
            '$ciudad_facturacion',
            '$estado_provincia_de_facturacion',
            '$codigo_postal_facturacion',
            '$pais_de_facturacion',
            '$fecha_de_creacion',
            '$ultima_modificacion',
            '$fecha_de_nacimiento',
            '$fecha_de_contratacion',
            '$fecha_de_liberacion_terminacion',
            '$ultima_revision',
            '$proxima_revision',
            '$numero_telefonico_de_la_oficina',
            '$telefono_particular',
            '$fax',
            '$responsable_de_aprobacion_de_gastos',
            '$status',
            '$estado_civil',
            '$genero',
            '$limite_de_autorizacion_de_gastos',
            '$ultima_fecha_de_pago',
            '$frecuencia_de_pago',
            '$usar_datos_de_tiempo',
            '$lugar_de_trabajo',
            '$marketing',
            '$inicio_preview',
            '$fin_preview',
            '$actualizacion',
            '$cloudextend_google_calendar',
            '$sitio_web',
            '$linkedin',
            '$numero_identificacion_tributaria',
            '$digito_verificador',
            '$rol',
			0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		 
			if($resultinser){
				 $sqlupids = "UPDATE netsuite  
                INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(netsuite.correo_electronico, 1,(instr(netsuite.correo_electronico,'@')-1 )))
                SET netsuite.id_slack = slack.id_slack 
                    where netsuite.correo_electronico = '$correo_electronico'";
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
