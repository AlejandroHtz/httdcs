<?php
require '../../conexion.php';
 
if(isset($_POST['inpTodosmart'])){
    $var = $_POST['inpTodosmart'];

    if(!empty($var1)){
 
    $consulta = "where 
   email = '$var' )"; }
else { $consulta = ''; }
echo "
<table class='table table-hover table-condensed'>
<thead>
<tr >
<td>id</td>
<td>nombre</td>
<td>email</td>


<td>estado</td>
<td>administradordelsist</td> 
<td>administradordelgrupo</td>
<td>usuarioconlicencia</td>
<td>eliminada</td>

</tr>
</thead>";
 $querydiscaredo =  "SELECT * from smartsheet $consulta
order by nombre asc";
$resdiscaredo = mysqli_query($conexion, $querydiscaredo);

$numero = mysqli_num_rows($resdiscaredo);
echo 'Total de registros: ' . $numero; ?><br><?php

while ($filaresdiscaredo = mysqli_fetch_array($resdiscaredo)) {

    echo"
    <tbody>
    <tr>
<td>".$filaresdiscaredo['id']."</td>
<td>".$filaresdiscaredo['nombre']."</td>
<td>".$filaresdiscaredo['email']."</td>

<td>".$filaresdiscaredo['estado']."</td>
<td>".$filaresdiscaredo['administradordelsist']."</td>
<td>".$filaresdiscaredo['administradordelgrupo']."</td>
<td>".$filaresdiscaredo['usuarioconlicencia']."</td>
<td>".$filaresdiscaredo['eliminada']."</td>
    
   
    </tr>
    
    </tbody>";
        }
    echo "</table>";

}


if(isset($_FILES['archivo']['name'])){
require '../Classes/PHPExcel/IOFactory.php';


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

	if(move_uploaded_file($guardado, '../archivos/'.$nombre)){
		$nombreArchivo = '../archivos/smartsheet.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $nombre=	$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $email=	$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $estado=	$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $administradordelsist=	$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $administradordelgrupo=	$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $usuarioconlicencia=	$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $observadorderecursos=	$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $hojas=	$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $ultimoiniciodesesion=	$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $tiempoagregado=	$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        
        
        
        
		
		 $sql = mysqli_query ($conexion,"SELECT email  from smartsheet where email = '$email'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			$sqlup = "UPDATE smartsheet
			SET  			
            nombre = '$nombre',
            email = '$email',
            estado = '$estado',
            administradordelsist = '$administradordelsist',
            administradordelgrupo = '$administradordelgrupo',
            usuarioconlicencia = '$usuarioconlicencia',
            observadorderecursos = '$observadorderecursos',
            hojas = '$hojas',
            ultimoiniciodesesion = '$ultimoiniciodesesion',
            tiempoagregado = '$tiempoagregado',
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
			
			 $sqlinser = "INSERT INTO smartsheet
			(
                nombre,
                email,
                estado,
                administradordelsist,
                administradordelgrupo,
                usuarioconlicencia,
                observadorderecursos,
                hojas,
                ultimoiniciodesesion,
                tiempoagregado,
                eliminada,
                fecha_insercion,
                hora_insercion)
			VALUES(
                '$nombre',
                '$email',
                '$estado',
                '$administradordelsist',
                '$administradordelgrupo',
                '$usuarioconlicencia',
                '$observadorderecursos',
                '$hojas',
                '$ultimoiniciodesesion',
                '$tiempoagregado',
		
				0,
                current_date,
                current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE smartsheet  
				INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(smartsheet.email, 1,(instr(smartsheet.email,'@')-1 )))
				SET smartsheet.id_slack = slack.id_slack , smartsheet.eliminada = slack.eliminada
                    where smartsheet.email = '$email'";
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