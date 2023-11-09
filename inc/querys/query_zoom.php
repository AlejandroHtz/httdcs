<?php
require '../../conexion.php';
 
if(isset($_POST['inpTodozo'])){
    $var = $_POST['inpTodozo'];

    if(!empty($var1)){
 
    $consulta = "where 
    email = '$var' )"; }
else { $consulta = ''; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>email</td>
<td>primernombre</td>
<td>apellido</td>
<td>num_telefono</td>
<td>departamento</td>
<td>administrador</td>
<td>grupodeusuario</td>
<td>ult_inicio_sesion</td>
<td>utc</td>
<td>ult_versión</td>
<td>fecha_creacion</td>
<td>rol</td>
<td>tipo_licencia</td>
<td>tipo_autenticación</td>
<td>estatus_usuario</td>
<td>pmi</td>
<td>cargo</td>
<td>ubicacion</td>

</tr>
</thead>";
$querydiscaredo =  "SELECT * from zoom $consulta
order by email desc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);

$numero = mysqli_num_rows($resdiscaredo);
echo 'Total de registros: ' . $numero; ?><br><?php

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>

<td>".$filaresdiscaredo['email']."</td>
<td>".$filaresdiscaredo['primernombre']."</td>
<td>".$filaresdiscaredo['apellido']."</td>
<td>".$filaresdiscaredo['num_telefono']."</td>
<td>".$filaresdiscaredo['departamento']."</td>
<td>".$filaresdiscaredo['administrador']."</td>
<td>".$filaresdiscaredo['grupodeusuario']."</td>
<td>".$filaresdiscaredo['ult_inicio_sesion']."</td>
<td>".$filaresdiscaredo['fecha_creacion']."</td>
<td>".$filaresdiscaredo['rol']."</td>
<td>".$filaresdiscaredo['tipo_licencia']."</td>
<td>".$filaresdiscaredo['tipo_autenticacion']."</td>
<td>".$filaresdiscaredo['estatus_usuario']."</td>
<td>".$filaresdiscaredo['pmi']."</td>
<td>".$filaresdiscaredo['cargo']."</td>
<td>".$filaresdiscaredo['ubicacion']."</td>
    </tr>
    
    </tbody>";
        }
    echo "</table>";

}


if(isset($_FILES['archivo']['name'])){
require '../Classes/PHPExcel/IOFactory.php';


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
	if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
		$nombreArchivo = '../archivos/zoom.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $email = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $primernombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $apellido = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $num_telefono = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $departamento = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $administrador = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $grupodeusuario = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $ult_inicio_sesion = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $utc = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $ult_versión = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $fecha_creacion = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $rol = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        $tipo_licencia = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $tipo_autenticación = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $estatus_usuario = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $pmi = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $cargo = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $ubicacion = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        

		
		 $sql = mysqli_query ($conexion,"SELECT email  from zoom where email = '$email'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			echo $sqlup = "UPDATE zoom
			SET  			
          
            primernombre='$primernombre',
            apellido='$apellido',
            num_telefono='$num_telefono',
            departamento='$departamento',
            administrador='$administrador',
            grupodeusuario='$grupodeusuario',
            ult_inicio_sesion='$ult_inicio_sesion',
            utc='$utc',
            ult_version='$ult_versión',
            fecha_creacion='$fecha_creacion',
            rol='$rol',
            tipo_licencia='$tipo_licencia',
            tipo_autenticacion='$tipo_autenticación',
            estatus_usuario='$estatus_usuario',
            pmi='$pmi',
            cargo='$cargo',
            ubicacion='$ubicacion',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  email= '$email'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $email."-Actualizado<br>";
			}else{ 
				echo $email."-No Actualizado<br>"; 
			}
		}else{
			
		echo	 $sqlinser = "INSERT INTO zoom
			(
                email,
                primernombre,
                apellido,
                num_telefono,
                departamento,
                administrador,
                grupodeusuario,
                ult_inicio_sesion,
                utc,
                ult_version,
                fecha_creacion,
                rol,
                tipo_licencia,
                tipo_autenticacion,
                estatus_usuario,
                pmi,
                cargo,
                ubicacion,
                eliminada,
                fecha_insercion,
                hora_insercion)
			VALUES(
                '$email',
                '$primernombre',
                '$apellido',
                '$num_telefono',
                '$departamento',
                '$administrador',
                '$grupodeusuario',
                '$ult_inicio_sesion',
                '$utc',
                '$ult_versión',
                '$fecha_creacion',
                '$rol',
                '$tipo_licencia',
                '$tipo_autenticación',
                '$estatus_usuario',
                '$pmi',
                '$cargo',
                '$ubicacion',
				0,
                current_date,
                current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE zoom  
				INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(zoom.email, 1,(instr(zoom.email,'@')-1 )))
				SET zoom.id_slack = slack.id_slack , zoom.eliminada = slack.eliminada
                    where zoom.email = '$email'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $email."-Insertado y id_slack actualizado <br>";
            }else{
                echo $email."-Insertado <br>";
            }

				
			}else{
				echo $email."-No Insertado <br>";
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
// 		echo "<script> alert('Archivo no se pudo guardar')
//  window.location='../docusing.php';
//    </script>";

	
	}

}