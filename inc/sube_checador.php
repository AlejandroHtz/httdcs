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
		$nombreArchivo = 'archivos/checador.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
$userid	=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
$badgenumber	=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
$ssn	=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
$name	=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
$gender	=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
$title	=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
$pager	=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
$birthday	=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
$hiredday	=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
$street	=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
$city	=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
$state	=$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
$zip	=$objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
$ophone	=$objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
$fphone	=$objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
$verificationmethod	=$objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
$defaultdeptid	=$objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
$securityflags	=$objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
$att	=$objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
$inlate	=$objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
$outearly	=$objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
$overtime	=$objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
$sep	=$objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
$holiday	=$objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
$minzu	=$objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
$password	=$objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
$lunchduration	=$objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
$photo	=$objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
$mverifypass	=$objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
$notes	=$objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
$privilege	=$objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
$inheritdeptsch	=$objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
$inheritdeptschclass	=$objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
$autoschplan	=$objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
$minautoschinterval	=$objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
$registerot	=$objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();
$inheritdeptrule	=$objPHPExcel->getActiveSheet()->getCell('AK'.$i)->getCalculatedValue();
$emprivilege	=$objPHPExcel->getActiveSheet()->getCell('AL'.$i)->getCalculatedValue();
$cardno	=$objPHPExcel->getActiveSheet()->getCell('AM'.$i)->getCalculatedValue();
$change_operator	=$objPHPExcel->getActiveSheet()->getCell('AN'.$i)->getCalculatedValue();
$change_time	=$objPHPExcel->getActiveSheet()->getCell('AO'.$i)->getCalculatedValue();
$create_operator	=$objPHPExcel->getActiveSheet()->getCell('AP'.$i)->getCalculatedValue();
$create_time	=$objPHPExcel->getActiveSheet()->getCell('AQ'.$i)->getCalculatedValue();
$delete_operator	=$objPHPExcel->getActiveSheet()->getCell('AR'.$i)->getCalculatedValue();
$delete_time	=$objPHPExcel->getActiveSheet()->getCell('AS'.$i)->getCalculatedValue();
$status	=$objPHPExcel->getActiveSheet()->getCell('AT'.$i)->getCalculatedValue();
$lastname	=$objPHPExcel->getActiveSheet()->getCell('AU'.$i)->getCalculatedValue();
$accgroup	=$objPHPExcel->getActiveSheet()->getCell('AV'.$i)->getCalculatedValue();
$timezones	=$objPHPExcel->getActiveSheet()->getCell('AW'.$i)->getCalculatedValue();
$identitycard	=$objPHPExcel->getActiveSheet()->getCell('AX'.$i)->getCalculatedValue();
$utime	=$objPHPExcel->getActiveSheet()->getCell('AY'.$i)->getCalculatedValue();
$education	=$objPHPExcel->getActiveSheet()->getCell('AZ'.$i)->getCalculatedValue();
$offduty	=$objPHPExcel->getActiveSheet()->getCell('BA'.$i)->getCalculatedValue();
$deltag	=$objPHPExcel->getActiveSheet()->getCell('BB'.$i)->getCalculatedValue();
$morecard_group_id	=$objPHPExcel->getActiveSheet()->getCell('BC'.$i)->getCalculatedValue();
$set_valid_time	=$objPHPExcel->getActiveSheet()->getCell('BD'.$i)->getCalculatedValue();
$acc_startdate	=$objPHPExcel->getActiveSheet()->getCell('BE'.$i)->getCalculatedValue();
$acc_enddate	=$objPHPExcel->getActiveSheet()->getCell('BF'.$i)->getCalculatedValue();
$birthplace	=$objPHPExcel->getActiveSheet()->getCell('BG'.$i)->getCalculatedValue();
$political	=$objPHPExcel->getActiveSheet()->getCell('BH'.$i)->getCalculatedValue();
$contry	=$objPHPExcel->getActiveSheet()->getCell('BI'.$i)->getCalculatedValue();
$hiretype	=$objPHPExcel->getActiveSheet()->getCell('BJ'.$i)->getCalculatedValue();
$email	=$objPHPExcel->getActiveSheet()->getCell('BK'.$i)->getCalculatedValue();
$firedate	=$objPHPExcel->getActiveSheet()->getCell('BL'.$i)->getCalculatedValue();
$isatt	=$objPHPExcel->getActiveSheet()->getCell('BM'.$i)->getCalculatedValue();
$homeaddress	=$objPHPExcel->getActiveSheet()->getCell('BN'.$i)->getCalculatedValue();
$emptype	=$objPHPExcel->getActiveSheet()->getCell('BO'.$i)->getCalculatedValue();
$bankcode1	=$objPHPExcel->getActiveSheet()->getCell('BP'.$i)->getCalculatedValue();
$bankcode2	=$objPHPExcel->getActiveSheet()->getCell('BQ'.$i)->getCalculatedValue();
$isblacklist	=$objPHPExcel->getActiveSheet()->getCell('BR'.$i)->getCalculatedValue();
$iuser1	=$objPHPExcel->getActiveSheet()->getCell('BS'.$i)->getCalculatedValue();
$iuser2	=$objPHPExcel->getActiveSheet()->getCell('BT'.$i)->getCalculatedValue();
$iuser3	=$objPHPExcel->getActiveSheet()->getCell('BU'.$i)->getCalculatedValue();
$iuser4	=$objPHPExcel->getActiveSheet()->getCell('BV'.$i)->getCalculatedValue();
$iuser5	=$objPHPExcel->getActiveSheet()->getCell('BW'.$i)->getCalculatedValue();
$cuser1	=$objPHPExcel->getActiveSheet()->getCell('BX'.$i)->getCalculatedValue();
$cuser2	=$objPHPExcel->getActiveSheet()->getCell('BY'.$i)->getCalculatedValue();
$cuser3	=$objPHPExcel->getActiveSheet()->getCell('BZ'.$i)->getCalculatedValue();
$cuser4	=$objPHPExcel->getActiveSheet()->getCell('CA'.$i)->getCalculatedValue();
$cuser5	=$objPHPExcel->getActiveSheet()->getCell('CB'.$i)->getCalculatedValue();
$duser1	=$objPHPExcel->getActiveSheet()->getCell('CC'.$i)->getCalculatedValue();
$duser2	=$objPHPExcel->getActiveSheet()->getCell('CD'.$i)->getCalculatedValue();
$duser3	=$objPHPExcel->getActiveSheet()->getCell('CE'.$i)->getCalculatedValue();
$duser4	=$objPHPExcel->getActiveSheet()->getCell('CF'.$i)->getCalculatedValue();
$duser5	=$objPHPExcel->getActiveSheet()->getCell('CG'.$i)->getCalculatedValue();
$reserve	=$objPHPExcel->getActiveSheet()->getCell('CH'.$i)->getCalculatedValue();
$offlinebegindate	=$objPHPExcel->getActiveSheet()->getCell('CI'.$i)->getCalculatedValue();
$offlineenddate	=$objPHPExcel->getActiveSheet()->getCell('CJ'.$i)->getCalculatedValue();
$carno	=$objPHPExcel->getActiveSheet()->getCell('CK'.$i)->getCalculatedValue();
$cartype	=$objPHPExcel->getActiveSheet()->getCell('CL'.$i)->getCalculatedValue();
$carbrand	=$objPHPExcel->getActiveSheet()->getCell('CM'.$i)->getCalculatedValue();
$carcolor	=$objPHPExcel->getActiveSheet()->getCell('CN'.$i)->getCalculatedValue();

        


		
		 $expiration_timestamp = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		
		 $sql = mysqli_query ($conexion,"SELECT email  from checador where email = '$email'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE checador
			SET  			
			
            userid = '$userid',
            badgenumber = '$badgenumber',
            checador.name = '$name',
            gender = '$gender',
            title = '$title',
            pager = '$pager',
            birthday = '$birthday',
            hiredday = '$hiredday',
            street = '$street',
            city = '$city',
            checador.state = '$state',
            zip = '$zip',
            ophone = '$ophone',
            fphone = '$fphone',
            verificationmethod = '$verificationmethod',
            defaultdeptid = '$defaultdeptid',
            securityflags = '$securityflags',
            att = '$att',
            inlate = '$inlate',
            outearly = '$outearly',
            overtime = '$overtime',
            sep = '$sep',
            holiday = '$holiday',
            minzu = '$minzu',
            checador.password = '$password',
            lunchduration = '$lunchduration',
            photo = '$photo',
            mverifypass = '$mverifypass',
            notes = '$notes',
            privilege = '$privilege',
            inheritdeptsch = '$inheritdeptsch',
            inheritdeptschclass = '$inheritdeptschclass',
            autoschplan = '$autoschplan',
            minautoschinterval = '$minautoschinterval',
            registerot = '$registerot',
            inheritdeptrule = '$inheritdeptrule',
            emprivilege = '$emprivilege',
            cardno = '$cardno',
            change_operator = '$change_operator',
            change_time = '$change_time',
            create_operator = '$create_operator',
            create_time = '$create_time',
            delete_operator = '$delete_operator',
            delete_time = '$delete_time',
            checador.status = '$status',
            lastname = '$lastname',
            accgroup = '$accgroup',
            timezones = '$timezones',
            identitycard = '$identitycard',
            utime = '$utime',
            education = '$education',
            offduty = '$offduty',
            deltag = '$deltag',
            morecard_group_id = '$morecard_group_id',
            set_valid_time = '$set_valid_time',
            acc_startdate = '$acc_startdate',
            acc_enddate = '$acc_enddate',
            birthplace = '$birthplace',
            political = '$political',
            contry = '$contry',
            hiretype = '$hiretype',
            
            firedate = '$firedate',
            isatt = '$isatt',
            homeaddress = '$homeaddress',
            emptype = '$emptype',
            bankcode1 = '$bankcode1',
            bankcode2 = '$bankcode2',
            isblacklist = '$isblacklist',
            iuser1 = '$iuser1',
            iuser2 = '$iuser2',
            iuser3 = '$iuser3',
            iuser4 = '$iuser4',
            iuser5 = '$iuser5',
            cuser1 = '$cuser1',
            cuser2 = '$cuser2',
            cuser3 = '$cuser3',
            cuser4 = '$cuser4',
            cuser5 = '$cuser5',
            duser1 = '$duser1',
            duser2 = '$duser2',
            duser3 = '$duser3',
            duser4 = '$duser4',
            duser5 = '$duser5',
            reserve = '$reserve',
            offlinebegindate = '$offlinebegindate',
            offlineenddate = '$offlineenddate',
            carno = '$carno',
            cartype = '$cartype',
            carbrand = '$carbrand',
            carcolor = '$carcolor',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  userid= '$userid'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $email."-Actualizado<br>";
			}else{ 
				echo $email."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO checador
			(
                userid,
            badgenumber,
            checador.name,
            gender,
            title,
            pager,
            birthday,
            hiredday,
            street,
            city,
            checador.state,
            zip,
            ophone,
            fphone,
            verificationmethod,
            defaultdeptid,
            securityflags,
            att,
            inlate,
            outearly,
            overtime,
            sep,
            holiday,
            minzu,
            checador.password,
            lunchduration,
            photo,
            mverifypass,
            notes,
            privilege,
            inheritdeptsch,
            inheritdeptschclass,
            autoschplan,
            minautoschinterval,
            registerot,
            inheritdeptrule,
            emprivilege,
            cardno,
            change_operator,
            change_time,
            create_operator,
            create_time,
            delete_operator,
            delete_time,
            checador.status,
            lastname,
            accgroup,
            timezones,
            identitycard,
            utime,
            education,
            offduty,
            deltag,
            morecard_group_id,
            set_valid_time,
            acc_startdate,
            acc_enddate,
            birthplace,
            political,
            contry,
            hiretype,
            email,
            firedate,
            isatt,
            homeaddress,
            emptype,
            bankcode1,
            bankcode2,
            isblacklist,
            iuser1,
            iuser2,
            iuser3,
            iuser4,
            iuser5,
            cuser1,
            cuser2,
            cuser3,
            cuser4,
            cuser5,
            duser1,
            duser2,
            duser3,
            duser4,
            duser5,
            reserve,
            offlinebegindate,
            offlineenddate,
            carno,
            cartype,
            carbrand,
            carcolor,
			eliminada,
			fecha_insercion,
			hora_insercion)
			VALUES(
            '$userid',
            '$badgenumber',
            '$name',
            '$gender',
            '$title',
            '$pager',
            '$birthday',
            '$hiredday',
            '$street',
            '$city',
            '$state',
            '$zip',
            '$ophone',
            '$fphone',
            '$verificationmethod',
            '$defaultdeptid',
            '$securityflags',
            '$att',
            '$inlate',
            '$outearly',
            '$overtime',
            '$sep',
            '$holiday',
            '$minzu',
            '$password',
            '$lunchduration',
            '$photo',
            '$mverifypass',
            '$notes',
            '$privilege',
            '$inheritdeptsch',
            '$inheritdeptschclass',
            '$autoschplan',
            '$minautoschinterval',
            '$registerot',
            '$inheritdeptrule',
            '$emprivilege',
            '$cardno',
            '$change_operator',
            '$change_time',
            '$create_operator',
            '$create_time',
            '$delete_operator',
            '$delete_time',
            '$status',
            '$lastname',
            '$accgroup',
            '$timezones',
            '$identitycard',
            '$utime',
            '$education',
            '$offduty',
            '$deltag',
            '$morecard_group_id',
            '$set_valid_time',
            '$acc_startdate',
            '$acc_enddate',
            '$birthplace',
            '$political',
            '$contry',
            '$hiretype',
            '$email',
            '$firedate',
            '$isatt',
            '$homeaddress',
            '$emptype',
            '$bankcode1',
            '$bankcode2',
            '$isblacklist',
            '$iuser1',
            '$iuser2',
            '$iuser3',
            '$iuser4',
            '$iuser5',
            '$cuser1',
            '$cuser2',
            '$cuser3',
            '$cuser4',
            '$cuser5',
            '$duser1',
            '$duser2',
            '$duser3',
            '$duser4',
            '$duser5',
            '$reserve',
            '$offlinebegindate',
            '$offlineenddate',
            '$carno',
            '$cartype',
            '$carbrand',
            '$carcolor',
			0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE checador  
                INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(checador.email, 1,(instr(checador.email,'@')-1 )))
                SET checador.id_slack = slack.id_slack, checador.eliminada = slack.eliminada
                    where upper (SUBSTRING(checador.email, 1,(instr(checador.email,'@')-1 ))) = upper (SUBSTRING('$email', 1,(instr('$email','@')-1 )))";


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
		echo "<script> alert('Archivo no se pudo guardar')
 window.location='index.php';
   </script>";

	
	}
// }
