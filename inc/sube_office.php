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
		$nombreArchivo = 'archivos/office.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $bloquear_credencial	= $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $poblacion	= $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $pais_o_region	= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $departamento	= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $dirsyncenabled	= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $nombre_para_mostrar	= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $fax	= $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $nombre	= $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $ultima_hora_de_sincronizacion_de_directorios	= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $apellido	= $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $ultima_marca_de_tiempo_de_cambio_de_contrasena	= $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $errores_de_asignacion_de_licencias	= $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        $licencias	= $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $telefono_movil	= $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $metadatos_de_token_de_oath	= $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $id_de_objeto	= $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $office	= $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $la_contrasena_no_caduca_nunca	= $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $numero_de_telefono	= $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $codigo_postal	= $objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
        $ubicacion_de_datos_preferida	= $objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
        $idioma_preferido	= $objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
        $direcciones_proxy	= $objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
        $calendario_de_lanzamiento	= $objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
        $marca_de_tiempo_de_eliminacion_temporal	= $objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
        $estado_o_provincia	= $objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
        $direccion_postal	= $objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
        $es_necesario_utilizar_una_contrasena_segura	= $objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
        $titulo	= $objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
        $ubicacion_de_uso	= $objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
        $nombre_principal_de_usuario	= $objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
        $cuando_se_crea	= $objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
        $telefono_movil =str_replace("'","",$telefono_movil);
   
		 $sql = mysqli_query ($conexion,"SELECT nombre_principal_de_usuario from office where nombre_principal_de_usuario = '$nombre_principal_de_usuario'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE office
			SET  			
			bloquear_credencial = '$bloquear_credencial',
            poblacion = '$poblacion',
            pais_o_region = '$pais_o_region',
            departamento = '$departamento',
            dirsyncenabled = '$dirsyncenabled',
            nombre_para_mostrar = '$nombre_para_mostrar',
            fax = '$fax',
            nombre = '$nombre',
            ultima_hora_de_sincronizacion_de_directorios = '$ultima_hora_de_sincronizacion_de_directorios',
            apellido = '$apellido',
            ultima_marca_de_tiempo_de_cambio_de_contrasena = '$ultima_marca_de_tiempo_de_cambio_de_contrasena',
            errores_de_asignacion_de_licencias = '$errores_de_asignacion_de_licencias',
            licencias = '$licencias',
            telefono_movil = '$telefono_movil',
            metadatos_de_token_de_oath = '$metadatos_de_token_de_oath',
            id_de_objeto = '$id_de_objeto',
            office = '$office',
            la_contrasena_no_caduca_nunca = '$la_contrasena_no_caduca_nunca',
            numero_de_telefono = '$numero_de_telefono',
            codigo_postal = '$codigo_postal',
            ubicacion_de_datos_preferida = '$ubicacion_de_datos_preferida',
            idioma_preferido = '$idioma_preferido',
            direcciones_proxy = '$direcciones_proxy',
            calendario_de_lanzamiento = '$calendario_de_lanzamiento',
            marca_de_tiempo_de_eliminacion_temporal = '$marca_de_tiempo_de_eliminacion_temporal',
            estado_o_provincia = '$estado_o_provincia',
            direccion_postal = '$direccion_postal',
            es_necesario_utilizar_una_contrasena_segura = '$es_necesario_utilizar_una_contrasena_segura',
            titulo = '$titulo',
            ubicacion_de_uso = '$ubicacion_de_uso',            
            cuando_se_crea = '$cuando_se_crea',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  nombre_principal_de_usuario = '$nombre_principal_de_usuario'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $nombre_principal_de_usuario."-Actualizado<br>";
			}else{ 
				echo $nombre_principal_de_usuario."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO office
			(
            bloquear_credencial,
            poblacion,
            pais_o_region,
            departamento,
            dirsyncenabled,
            nombre_para_mostrar,
            fax,
            nombre,
            ultima_hora_de_sincronizacion_de_directorios,
            apellido,
            ultima_marca_de_tiempo_de_cambio_de_contrasena,
            errores_de_asignacion_de_licencias,
            licencias,
            telefono_movil,
            metadatos_de_token_de_oath,
            id_de_objeto,
            office,
            la_contrasena_no_caduca_nunca,
            numero_de_telefono,
            codigo_postal,
            ubicacion_de_datos_preferida,
            idioma_preferido,
            direcciones_proxy,
            calendario_de_lanzamiento,
            marca_de_tiempo_de_eliminacion_temporal,
            estado_o_provincia,
            direccion_postal,
            es_necesario_utilizar_una_contrasena_segura,
            titulo,
            ubicacion_de_uso,
            nombre_principal_de_usuario,
            cuando_se_crea,
			eliminada,
			fecha_insercion,
			hora_insercion)
			VALUES(
            '$bloquear_credencial',
            '$poblacion',
            '$pais_o_region',
            '$departamento',
            '$dirsyncenabled',
            '$nombre_para_mostrar',
            '$fax',
            '$nombre',
            '$ultima_hora_de_sincronizacion_de_directorios',
            '$apellido',
            '$ultima_marca_de_tiempo_de_cambio_de_contrasena',
            '$errores_de_asignacion_de_licencias',
            '$licencias',
            '$telefono_movil',
            '$metadatos_de_token_de_oath',
            '$id_de_objeto',
            '$office',
            '$la_contrasena_no_caduca_nunca',
            '$numero_de_telefono',
            '$codigo_postal',
            '$ubicacion_de_datos_preferida',
            '$idioma_preferido',
            '$direcciones_proxy',
            '$calendario_de_lanzamiento',
            '$marca_de_tiempo_de_eliminacion_temporal',
            '$estado_o_provincia',
            '$direccion_postal',
            '$es_necesario_utilizar_una_contrasena_segura',
            '$titulo',
            '$ubicacion_de_uso',
            '$nombre_principal_de_usuario',
            '$cuando_se_crea',
			0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		 
			if($resultinser){
				 $sqlupids = "UPDATE office  
                INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(office.nombre_principal_de_usuario, 1,(instr(office.nombre_principal_de_usuario,'@')-1 )))
                SET office.id_slack = slack.id_slack , office.eliminada = slack.eliminada
                    where office.nombre_principal_de_usuario = '$nombre_principal_de_usuario'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $nombre_principal_de_usuario."-Insertado y id_slack actualizado <br>";
            }else{
                echo $nombre_principal_de_usuario."-Insertado <br>";
            }

				
			}else{
				echo $nombre_principal_de_usuario."-No Insertado <br>";
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
