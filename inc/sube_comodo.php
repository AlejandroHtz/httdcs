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
		$nombreArchivo = 'archivos/comodo.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
    $sqlocup = "UPDATE hist_comodo SET ocupado = 'NO'";
    $resultuphiocp = mysqli_query($conexion, $sqlocup);
	
	for($i = 2; $i <= $numRows; $i++){
		
        
        $os= $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
        $device_status= $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $name= $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $client_security_status= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
        $patch_status= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $available_patches_count= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $customer= $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
        $device_group= $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $last_logged_in_user= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $owner= $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
        $last_activity= $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $os_name= $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        $os_version= $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $ccs_version= $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $ccc_version= $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $external_ip= $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
        $internal_ip= $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $ad_ldapv= $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $domain_workgroup= $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $model= $objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
        $processor= $objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
        $serial_number= $objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
        $system_model= $objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
        $system_manufacturer= $objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
        $ownership_type= $objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
        $registered= $objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
        $local_time_zone= $objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
        $service_pack= $objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
        $reboot_time= $objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
        $reboot_reason= $objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
        $cpu_usage= $objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
        $cpu_frequency= $objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
        $ram_usage= $objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
        $ram_usage_mb= $objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
        $total_ram= $objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
        $network_usage= $objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();
        $disk_free_gb= $objPHPExcel->getActiveSheet()->getCell('AK'.$i)->getCalculatedValue();
        $disk_used_gb= $objPHPExcel->getActiveSheet()->getCell('AL'.$i)->getCalculatedValue();
        $security_profiles= $objPHPExcel->getActiveSheet()->getCell('AM'.$i)->getCalculatedValue();
        $tags= $objPHPExcel->getActiveSheet()->getCell('AN'.$i)->getCalculatedValue();
        $notes= $objPHPExcel->getActiveSheet()->getCell('AO'.$i)->getCalculatedValue();
        
        $sqlserial = mysqli_query ($conexion,"SELECT serial_number  from hist_comodo where serial_number = '$serial_number'");
        $resultserial= mysqli_num_rows($sqlserial);



        $sql = mysqli_query ($conexion,"SELECT comodo.name  from comodo where comodo.name = '$name'");
        $result= mysqli_num_rows($sql);

        if($resultserial > 0){
             


            $sqluphi = "UPDATE hist_comodo
			SET  
			hist_comodo.name='$name',
			os='$os',
            device_status='$device_status',
            client_security_status='$client_security_status',
            patch_status='$patch_status',
            available_patches_count='$available_patches_count',
            customer='$customer',
            device_group='$device_group',
            last_logged_in_user='$last_logged_in_user',
            hist_comodo.owner='$owner',
            last_activity='$last_activity',
            os_name='$os_name',
            os_version='$os_version',
            ccs_version='$ccs_version',
            ccc_version='$ccc_version',
            external_ip='$external_ip',
            internal_ip='$internal_ip',
            ad_ldapv='$ad_ldapv',
            domain_workgroup='$domain_workgroup',
            model='$model',
            processor='$processor',
            
            system_model='$system_model',
            system_manufacturer='$system_manufacturer',
            ownership_type='$ownership_type',
            registered='$registered',
            local_time_zone='$local_time_zone',
            service_pack='$service_pack',
            reboot_time='$reboot_time',
            reboot_reason='$reboot_reason',
            cpu_usage='$cpu_usage',
            cpu_frequency='$cpu_frequency',
            ram_usage='$ram_usage',
            ram_usage_mb='$ram_usage_mb',
            total_ram='$total_ram',
            network_usage='$network_usage', 
            disk_free_gb='$disk_free_gb',
            disk_used_gb='$disk_used_gb',
            security_profiles='$security_profiles',
            tags='$tags',
            notes='$notes',
			fecha_modificacion= current_date,
			hora_modificacion= current_time,
            ocupado = 'SI'
			where hist_comodo.serial_number = '$serial_number'";
			$resultuphi = mysqli_query($conexion, $sqluphi);
		
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE comodo
			SET  
			
			os='$os',
            device_status='$device_status',
            client_security_status='$client_security_status',
            patch_status='$patch_status',
            available_patches_count='$available_patches_count',
            customer='$customer',
            device_group='$device_group',
            last_logged_in_user='$last_logged_in_user',
            comodo.owner='$owner',
            last_activity='$last_activity',
            os_name='$os_name',
            os_version='$os_version',
            ccs_version='$ccs_version',
            ccc_version='$ccc_version',
            external_ip='$external_ip',
            internal_ip='$internal_ip',
            ad_ldapv='$ad_ldapv',
            domain_workgroup='$domain_workgroup',
            model='$model',
            processor='$processor',
            serial_number='$serial_number',
            system_model='$system_model',
            system_manufacturer='$system_manufacturer',
            ownership_type='$ownership_type',
            registered='$registered',
            local_time_zone='$local_time_zone',
            service_pack='$service_pack',
            reboot_time='$reboot_time',
            reboot_reason='$reboot_reason',
            cpu_usage='$cpu_usage',
            cpu_frequency='$cpu_frequency',
            ram_usage='$ram_usage',
            ram_usage_mb='$ram_usage_mb',
            total_ram='$total_ram',
            network_usage='$network_usage',
            disk_free_gb='$disk_free_gb',
            disk_used_gb='$disk_used_gb',
            security_profiles='$security_profiles',
            tags='$tags',
            notes='$notes',
			fecha_modificacion=current_date, 
			hora_modificacion=current_time
			where comodo.name = '$name' and eliminada <> 1 ";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $name."-Actualizado<br>";
			}else{ 
				echo $name."-No Actualizado<br>"; 
			}
		}else{
			
			 $sqlinser = "INSERT INTO comodo
			(os,
            device_status,
            comodo.name,
            client_security_status,
            patch_status,
            available_patches_count,
            customer,
            device_group,
            last_logged_in_user,
            comodo.owner,
            last_activity,
            os_name,
            os_version,
            ccs_version,
            ccc_version,
            external_ip,
            internal_ip,
            ad_ldapv,
            domain_workgroup,
            model,
            processor,
            serial_number,
            system_model,
            system_manufacturer,
            ownership_type,
            registered,
            local_time_zone,
            service_pack,
            reboot_time,
            reboot_reason,
            cpu_usage,
            cpu_frequency,
            ram_usage,
            ram_usage_mb,
            total_ram,
            network_usage,
            disk_free_gb,
            disk_used_gb,
            security_profiles,
            tags,
            notes,
            eliminada,
            fecha_insercion,
            hora_insercion)
			VALUES(
			'$os',
            '$device_status',
            '$name',
            '$client_security_status',
            '$patch_status',
            '$available_patches_count',
            '$customer',
            '$device_group',
            '$last_logged_in_user',
            '$owner',
            '$last_activity',
            '$os_name',
            '$os_version',
            '$ccs_version',
            '$ccc_version',
            '$external_ip',
            '$internal_ip',
            '$ad_ldapv',
            '$domain_workgroup',
            '$model',
            '$processor',
            '$serial_number',
            '$system_model',
            '$system_manufacturer',
            '$ownership_type',
            '$registered',
            '$local_time_zone',
            '$service_pack',
            '$reboot_time',
            '$reboot_reason',
            '$cpu_usage',
            '$cpu_frequency',
            '$ram_usage',
            '$ram_usage_mb',
            '$total_ram',
            '$network_usage',
            '$disk_free_gb',
            '$disk_used_gb',
            '$security_profiles',
            '$tags',
            '$notes',
			0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				

            $sqlupids = "UPDATE comodo INNER JOIN slack on 
            upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) 
            = upper (SUBSTRING(SUBSTRING(upper (SUBSTRING(comodo.name, instr(comodo.name,'-')+1,
            LENGTH(comodo.name)-instr(comodo.name,'-'))),instr(upper 
            (SUBSTRING(comodo.name, instr(comodo.name,'-')+1,LENGTH(comodo.name)-instr(comodo.name,'-'))),
            '-'),LENGTH(upper (SUBSTRING(comodo.name, instr(comodo.name,'-')+1,
            LENGTH(comodo.name)-instr(comodo.name,'-'))))),2, 
            LENGTH ( upper (SUBSTRING(comodo.name, instr(comodo.name,'-')+1,
            LENGTH(comodo.name)-instr(comodo.name,'-')))))) SET comodo.id_slack = slack.id_slack
                    where comodo.name = '$name'";
                    $resultupids = mysqli_query($conexion, $sqlupids);

                    $sqlupidshis = "UPDATE comodo 
                    INNER JOIN hist_comodo on hist_comodo.serial_number = comodo.serial_number
                    SET comodo.id_hist_comodo = hist_comodo.id 
                    where comodo.serial_number = '$serial_number'";
                            $resultupidshis = mysqli_query($conexion, $sqlupidshis);  

            if($resultupids){
                echo $name."-Insertado y id_slack actualizado <br>";
            }else{
                echo $name."-Insertado <br>";
            }

			}else{
				echo $name."-No Insertado <br>";
			}
           
		 }

        }else{

            $sqlinserhist = "INSERT INTO hist_comodo
			(os,
            device_status,
            hist_comodo.name,
            client_security_status,
            patch_status,
            available_patches_count,
            customer,
            device_group,
            last_logged_in_user,
            hist_comodo.owner,
            last_activity,
            os_name,
            os_version,
            ccs_version,
            ccc_version,
            external_ip,
            internal_ip,
            ad_ldapv,
            domain_workgroup,
            model,
            processor,
            serial_number,
            system_model,
            system_manufacturer,
            ownership_type,
            registered,
            local_time_zone,
            service_pack,
            reboot_time,
            reboot_reason,
            cpu_usage,
            cpu_frequency,
            ram_usage,
            ram_usage_mb,
            total_ram,
            network_usage,
            disk_free_gb,
            disk_used_gb,
            security_profiles,
            tags,
            notes,
            eliminada,
            fecha_insercion,
            hora_insercion,
            ocupado)
			VALUES(
			'$os',
            '$device_status',
            '$name',
            '$client_security_status',
            '$patch_status',
            '$available_patches_count',
            '$customer',
            '$device_group',
            '$last_logged_in_user',
            '$owner',
            '$last_activity',
            '$os_name',
            '$os_version',
            '$ccs_version',
            '$ccc_version',
            '$external_ip',
            '$internal_ip',
            '$ad_ldapv',
            '$domain_workgroup',
            '$model',
            '$processor',
            '$serial_number',
            '$system_model',
            '$system_manufacturer',
            '$ownership_type',
            '$registered',
            '$local_time_zone',
            '$service_pack',
            '$reboot_time',
            '$reboot_reason',
            '$cpu_usage',
            '$cpu_frequency',
            '$ram_usage',
            '$ram_usage_mb',
            '$total_ram',
            '$network_usage',
            '$disk_free_gb',
            '$disk_used_gb',
            '$security_profiles',
            '$tags',
            '$notes',
			0,
			current_date,
			current_time,
            'SI'	
			);";
            
            $resultinserhist = mysqli_query($conexion, $sqlinserhist);

            if($resultinserhist){
 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE comodo
			SET  
			
			os='$os',
            device_status='$device_status',
            client_security_status='$client_security_status',
            patch_status='$patch_status',
            available_patches_count='$available_patches_count',
            customer='$customer',
            device_group='$device_group',
            last_logged_in_user='$last_logged_in_user',
            comodo.owner='$owner',
            last_activity='$last_activity',
            os_name='$os_name',
            os_version='$os_version',
            ccs_version='$ccs_version',
            ccc_version='$ccc_version',
            external_ip='$external_ip',
            internal_ip='$internal_ip',
            ad_ldapv='$ad_ldapv',
            domain_workgroup='$domain_workgroup',
            model='$model',
            processor='$processor',
            serial_number='$serial_number',
            system_model='$system_model',
            system_manufacturer='$system_manufacturer',
            ownership_type='$ownership_type',
            registered='$registered',
            local_time_zone='$local_time_zone',
            service_pack='$service_pack',
            reboot_time='$reboot_time',
            reboot_reason='$reboot_reason',
            cpu_usage='$cpu_usage',
            cpu_frequency='$cpu_frequency',
            ram_usage='$ram_usage',
            ram_usage_mb='$ram_usage_mb',
            total_ram='$total_ram',
            network_usage='$network_usage',
            disk_free_gb='$disk_free_gb',
            disk_used_gb='$disk_used_gb',
            security_profiles='$security_profiles',
            tags='$tags',
            notes='$notes',
			fecha_modificacion=current_date, 
			hora_modificacion=current_time
			where comodo.name = '$name' and eliminada <> 1 ";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $name."-Actualizado<br>";
			}else{ 
				echo $name."-No Actualizado<br>"; 
			}
		}else{
			
			$sqlinser = "INSERT INTO comodo
			(os,
            device_status,
            comodo.name,
            client_security_status,
            patch_status,
            available_patches_count,
            customer,
            device_group,
            last_logged_in_user,
            comodo.owner,
            last_activity,
            os_name,
            os_version,
            ccs_version,
            ccc_version,
            external_ip,
            internal_ip,
            ad_ldapv,
            domain_workgroup,
            model,
            processor,
            serial_number,
            system_model,
            system_manufacturer,
            ownership_type,
            registered,
            local_time_zone,
            service_pack,
            reboot_time,
            reboot_reason,
            cpu_usage,
            cpu_frequency,
            ram_usage,
            ram_usage_mb,
            total_ram,
            network_usage,
            disk_free_gb,
            disk_used_gb,
            security_profiles,
            tags,
            notes,
            eliminada,
            fecha_insercion,
            hora_insercion)
			VALUES(
			'$os',
            '$device_status',
            '$name',
            '$client_security_status',
            '$patch_status',
            '$available_patches_count',
            '$customer',
            '$device_group',
            '$last_logged_in_user',
            '$owner',
            '$last_activity',
            '$os_name',
            '$os_version',
            '$ccs_version',
            '$ccc_version',
            '$external_ip',
            '$internal_ip',
            '$ad_ldapv',
            '$domain_workgroup',
            '$model',
            '$processor',
            '$serial_number',
            '$system_model',
            '$system_manufacturer',
            '$ownership_type',
            '$registered',
            '$local_time_zone',
            '$service_pack',
            '$reboot_time',
            '$reboot_reason',
            '$cpu_usage',
            '$cpu_frequency',
            '$ram_usage',
            '$ram_usage_mb',
            '$total_ram',
            '$network_usage',
            '$disk_free_gb',
            '$disk_used_gb',
            '$security_profiles',
            '$tags',
            '$notes',
			0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				

            $sqlupids = "UPDATE comodo INNER JOIN slack on 
            upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) 
            = upper (SUBSTRING(SUBSTRING(upper (SUBSTRING(comodo.name, instr(comodo.name,'-')+1,
            LENGTH(comodo.name)-instr(comodo.name,'-'))),instr(upper 
            (SUBSTRING(comodo.name, instr(comodo.name,'-')+1,LENGTH(comodo.name)-instr(comodo.name,'-'))),
            '-'),LENGTH(upper (SUBSTRING(comodo.name, instr(comodo.name,'-')+1,
            LENGTH(comodo.name)-instr(comodo.name,'-'))))),2, 
            LENGTH ( upper (SUBSTRING(comodo.name, instr(comodo.name,'-')+1,
            LENGTH(comodo.name)-instr(comodo.name,'-')))))) SET comodo.id_slack = slack.id_slack
                    where comodo.name = '$name'";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            
                    
                    $sqlupidshis = "UPDATE comodo 
                    INNER JOIN hist_comodo on hist_comodo.serial_number = comodo.serial_number
                    SET comodo.id_hist_comodo = hist_comodo.id 
                    where comodo.serial_number = '$serial_number'";
                            $resultupidshis = mysqli_query($conexion, $sqlupidshis);  

            
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
