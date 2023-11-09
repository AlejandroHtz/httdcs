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
		$nombreArchivo = 'archivos/wave.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	
	
	for($i = 2; $i <= $numRows; $i++){
		
        $extension	= $objPHPExcel->getActiveSheet()->getCell(	'A'	.$i)->getCalculatedValue();
        $first_name	= $objPHPExcel->getActiveSheet()->getCell(	'B'	.$i)->getCalculatedValue();
        $last_name	= $objPHPExcel->getActiveSheet()->getCell(	'C'	.$i)->getCalculatedValue();
        $technology	= $objPHPExcel->getActiveSheet()->getCell(	'D'	.$i)->getCalculatedValue();
        $enable_voicemail	= $objPHPExcel->getActiveSheet()->getCell(	'E'	.$i)->getCalculatedValue();
        $callerid_number	= $objPHPExcel->getActiveSheet()->getCell(	'F'	.$i)->getCalculatedValue();
        $sipiax_password	= $objPHPExcel->getActiveSheet()->getCell(	'G'	.$i)->getCalculatedValue();
        $voicemail_password	= $objPHPExcel->getActiveSheet()->getCell(	'H'	.$i)->getCalculatedValue();
        $skip_voicemail_password_verification	= $objPHPExcel->getActiveSheet()->getCell(	'I'	.$i)->getCalculatedValue();
        $ring_timeout	= $objPHPExcel->getActiveSheet()->getCell(	'J'	.$i)->getCalculatedValue();
        $auto_record	= $objPHPExcel->getActiveSheet()->getCell(	'K'	.$i)->getCalculatedValue();
        $srtp	= $objPHPExcel->getActiveSheet()->getCell(	'L'	.$i)->getCalculatedValue();
        $fax_mode	= $objPHPExcel->getActiveSheet()->getCell(	'M'	.$i)->getCalculatedValue();
        $strategy	= $objPHPExcel->getActiveSheet()->getCell(	'N'	.$i)->getCalculatedValue();
        $local_subnet_1	= $objPHPExcel->getActiveSheet()->getCell(	'O'	.$i)->getCalculatedValue();
        $local_subnet_2	= $objPHPExcel->getActiveSheet()->getCell(	'P'	.$i)->getCalculatedValue();
        $local_subnet_3	= $objPHPExcel->getActiveSheet()->getCell(	'Q'	.$i)->getCalculatedValue();
        $local_subnet_4	= $objPHPExcel->getActiveSheet()->getCell(	'R'	.$i)->getCalculatedValue();
        $local_subnet_5	= $objPHPExcel->getActiveSheet()->getCell(	'S'	.$i)->getCalculatedValue();
        $local_subnet_6	= $objPHPExcel->getActiveSheet()->getCell(	'T'	.$i)->getCalculatedValue();
        $local_subnet_7	= $objPHPExcel->getActiveSheet()->getCell(	'U'	.$i)->getCalculatedValue();
        $local_subnet_8	= $objPHPExcel->getActiveSheet()->getCell(	'V'	.$i)->getCalculatedValue();
        $local_subnet_9	= $objPHPExcel->getActiveSheet()->getCell(	'W'	.$i)->getCalculatedValue();
        $local_subnet_10	= $objPHPExcel->getActiveSheet()->getCell(	'X'	.$i)->getCalculatedValue();
        $skip_trunk_auth	= $objPHPExcel->getActiveSheet()->getCell(	'Y'	.$i)->getCalculatedValue();
        $codec_preference	= $objPHPExcel->getActiveSheet()->getCell(	'Z'	.$i)->getCalculatedValue();
        $permission	= $objPHPExcel->getActiveSheet()->getCell(	'AA'	.$i)->getCalculatedValue();
        $nat	= $objPHPExcel->getActiveSheet()->getCell(	'AB'	.$i)->getCalculatedValue();
        $can_reinvite	= $objPHPExcel->getActiveSheet()->getCell(	'AC'	.$i)->getCalculatedValue();
        $dtmf_mode	= $objPHPExcel->getActiveSheet()->getCell(	'AD'	.$i)->getCalculatedValue();
        $insecure	= $objPHPExcel->getActiveSheet()->getCell(	'AE'	.$i)->getCalculatedValue();
        $enable_keep_alive	= $objPHPExcel->getActiveSheet()->getCell(	'AF'	.$i)->getCalculatedValue();
        $keep_alive_frequency	= $objPHPExcel->getActiveSheet()->getCell(	'AG'	.$i)->getCalculatedValue();
        $authid	= $objPHPExcel->getActiveSheet()->getCell(	'AH'	.$i)->getCalculatedValue();
        $tel_uri	= $objPHPExcel->getActiveSheet()->getCell(	'AI'	.$i)->getCalculatedValue();
        $used_call_forward_busy	= $objPHPExcel->getActiveSheet()->getCell(	'AJ'	.$i)->getCalculatedValue();
        $used_call_forward_no_answer	= $objPHPExcel->getActiveSheet()->getCell(	'AK'	.$i)->getCalculatedValue();
        $used_call_forward_unconditional	= $objPHPExcel->getActiveSheet()->getCell(	'AL'	.$i)->getCalculatedValue();
        $support_hot_desking_mode	= $objPHPExcel->getActiveSheet()->getCell(	'AM'	.$i)->getCalculatedValue();
        $dial_trunk_password	= $objPHPExcel->getActiveSheet()->getCell(	'AN'	.$i)->getCalculatedValue();
        $disable_this_extension	= $objPHPExcel->getActiveSheet()->getCell(	'AO'	.$i)->getCalculatedValue();
        $used_cfu_time_condition	= $objPHPExcel->getActiveSheet()->getCell(	'AP'	.$i)->getCalculatedValue();
        $used_cfn_time_condition	= $objPHPExcel->getActiveSheet()->getCell(	'AQ'	.$i)->getCalculatedValue();
        $used_cfb_time_condition	= $objPHPExcel->getActiveSheet()->getCell(	'AR'	.$i)->getCalculatedValue();
        $music_on_hold	= $objPHPExcel->getActiveSheet()->getCell(	'AS'	.$i)->getCalculatedValue();
        $cc_agent_policy	= $objPHPExcel->getActiveSheet()->getCell(	'AT'	.$i)->getCalculatedValue();
        $cc_monitor_policy	= $objPHPExcel->getActiveSheet()->getCell(	'AU'	.$i)->getCalculatedValue();
        $ccbs_available_timer	= $objPHPExcel->getActiveSheet()->getCell(	'AV'	.$i)->getCalculatedValue();
        $ccnr_available_timer	= $objPHPExcel->getActiveSheet()->getCell(	'AW'	.$i)->getCalculatedValue();
        $cc_offer_timer	= $objPHPExcel->getActiveSheet()->getCell(	'AX'	.$i)->getCalculatedValue();
        $cc_max_agents	= $objPHPExcel->getActiveSheet()->getCell(	'AY'	.$i)->getCalculatedValue();
        $cc_max_monitors	= $objPHPExcel->getActiveSheet()->getCell(	'AZ'	.$i)->getCalculatedValue();
        $ring_simultaneously	= $objPHPExcel->getActiveSheet()->getCell(	'BA'	.$i)->getCalculatedValue();
        $external_number	= $objPHPExcel->getActiveSheet()->getCell(	'BB'	.$i)->getCalculatedValue();
        $time_condition_for_ring_simultaneously	= $objPHPExcel->getActiveSheet()->getCell(	'BC'	.$i)->getCalculatedValue();
        $time_condition_for_skip_trunk_auth	= $objPHPExcel->getActiveSheet()->getCell(	'BD'	.$i)->getCalculatedValue();
        $enable_ldap	= $objPHPExcel->getActiveSheet()->getCell(	'BE'	.$i)->getCalculatedValue();
        $limit_max_time	= $objPHPExcel->getActiveSheet()->getCell(	'BF'	.$i)->getCalculatedValue();
        $enable_t_38_udptl	= $objPHPExcel->getActiveSheet()->getCell(	'BG'	.$i)->getCalculatedValue();
        $max_contacts	= $objPHPExcel->getActiveSheet()->getCell(	'BH'	.$i)->getCalculatedValue();
        $alert_info	= $objPHPExcel->getActiveSheet()->getCell(	'BI'	.$i)->getCalculatedValue();
        $do_not_disturb	= $objPHPExcel->getActiveSheet()->getCell(	'BJ'	.$i)->getCalculatedValue();
        $dnd_time_condition	= $objPHPExcel->getActiveSheet()->getCell(	'BK'	.$i)->getCalculatedValue();
        $custom_autoanswer	= $objPHPExcel->getActiveSheet()->getCell(	'BL'	.$i)->getCalculatedValue();
        $do_not_disturb_whitelist	= $objPHPExcel->getActiveSheet()->getCell(	'BM'	.$i)->getCalculatedValue();
        $use_callee_dod_on_fwd_or_rb	= $objPHPExcel->getActiveSheet()->getCell(	'BN'	.$i)->getCalculatedValue();
        $custom_presence_status	= $objPHPExcel->getActiveSheet()->getCell(	'BO'	.$i)->getCalculatedValue();
        $forward_whitelist	= $objPHPExcel->getActiveSheet()->getCell(	'BP'	.$i)->getCalculatedValue();
        $fax_to_email	= $objPHPExcel->getActiveSheet()->getCell(	'BQ'	.$i)->getCalculatedValue();
        $sca_enable	= $objPHPExcel->getActiveSheet()->getCell(	'BR'	.$i)->getCalculatedValue();
        $enable_call_waiting	= $objPHPExcel->getActiveSheet()->getCell(	'BS'	.$i)->getCalculatedValue();
        $emergency_calls_cid_name	= $objPHPExcel->getActiveSheet()->getCell(	'BT'	.$i)->getCalculatedValue();
        $use_callee_dod_for_follow_me	= $objPHPExcel->getActiveSheet()->getCell(	'BU'	.$i)->getCalculatedValue();
        $audio_fec	= $objPHPExcel->getActiveSheet()->getCell(	'BV'	.$i)->getCalculatedValue();
        $video_fec	= $objPHPExcel->getActiveSheet()->getCell(	'BW'	.$i)->getCalculatedValue();
        $packet_loss_retransmission	= $objPHPExcel->getActiveSheet()->getCell(	'BX'	.$i)->getCalculatedValue();
        $jitter_buffer_type	= $objPHPExcel->getActiveSheet()->getCell(	'BY'	.$i)->getCalculatedValue();
        $jitter_buffer_normal_type	= $objPHPExcel->getActiveSheet()->getCell(	'BZ'	.$i)->getCalculatedValue();
        $jitter_buffer_normal_size	= $objPHPExcel->getActiveSheet()->getCell(	'CA'	.$i)->getCalculatedValue();
        $jitter_buffer_normal_max_size	= $objPHPExcel->getActiveSheet()->getCell(	'CB'	.$i)->getCalculatedValue();
        $missed_call	= $objPHPExcel->getActiveSheet()->getCell(	'CC'	.$i)->getCalculatedValue();
        $remote_camera_control	= $objPHPExcel->getActiveSheet()->getCell(	'CD'	.$i)->getCalculatedValue();
        $enable_music_on_hold_for_ivr	= $objPHPExcel->getActiveSheet()->getCell(	'CE'	.$i)->getCalculatedValue();
        $out_call_max_chans	= $objPHPExcel->getActiveSheet()->getCell(	'CF'	.$i)->getCalculatedValue();
        $missed_call_type	= $objPHPExcel->getActiveSheet()->getCell(	'CG'	.$i)->getCalculatedValue();
        $stop_ringing	= $objPHPExcel->getActiveSheet()->getCell(	'CH'	.$i)->getCalculatedValue();
        $srtp_suite	= $objPHPExcel->getActiveSheet()->getCell(	'CI'	.$i)->getCalculatedValue();
        $highfreq_duration1	= $objPHPExcel->getActiveSheet()->getCell(	'CJ'	.$i)->getCalculatedValue();
        $highfreq_number1	= $objPHPExcel->getActiveSheet()->getCell(	'CK'	.$i)->getCalculatedValue();
        $user_password	= $objPHPExcel->getActiveSheet()->getCell(	'CL'	.$i)->getCalculatedValue();
        $email_address	= $objPHPExcel->getActiveSheet()->getCell(	'CM'	.$i)->getCalculatedValue();
        $language	= $objPHPExcel->getActiveSheet()->getCell(	'CN'	.$i)->getCalculatedValue();
        $phone_number	= $objPHPExcel->getActiveSheet()->getCell(	'CO'	.$i)->getCalculatedValue();
        $email_to_user	= $objPHPExcel->getActiveSheet()->getCell(	'CP'	.$i)->getCalculatedValue();
        $enable_wave	= $objPHPExcel->getActiveSheet()->getCell(	'CQ'	.$i)->getCalculatedValue();
        $enable_contact	= $objPHPExcel->getActiveSheet()->getCell(	'CR'	.$i)->getCalculatedValue();
        $call_barging_monitor	= $objPHPExcel->getActiveSheet()->getCell(	'CS'	.$i)->getCalculatedValue();
        $seamless_transfer_members	= $objPHPExcel->getActiveSheet()->getCell(	'CT'	.$i)->getCalculatedValue();
        $specific_time	= $objPHPExcel->getActiveSheet()->getCell(	'CU'	.$i)->getCalculatedValue();
        $follow_me	= $objPHPExcel->getActiveSheet()->getCell(	'CV'	.$i)->getCalculatedValue();
        $send_voicemail_email_notification	= $objPHPExcel->getActiveSheet()->getCell(	'CW'	.$i)->getCalculatedValue();
        $attach_voicemail_to_email	= $objPHPExcel->getActiveSheet()->getCell(	'CX'	.$i)->getCalculatedValue();
        $keep_voicemail_after_emailing	= $objPHPExcel->getActiveSheet()->getCell(	'CY'	.$i)->getCalculatedValue();
        $pms_remote_wakeup_whitelist	= $objPHPExcel->getActiveSheet()->getCell(	'CZ'	.$i)->getCalculatedValue();
        $policy	= $objPHPExcel->getActiveSheet()->getCell(	'DA'	.$i)->getCalculatedValue();
        $highfreq_number2	= $objPHPExcel->getActiveSheet()->getCell(	'DB'	.$i)->getCalculatedValue();
        $highfreq_duration2	= $objPHPExcel->getActiveSheet()->getCell(	'DC'	.$i)->getCalculatedValue();
        $available_presence_status	= $objPHPExcel->getActiveSheet()->getCell(	'DD'	.$i)->getCalculatedValue();
        $userdef_presence_status	= $objPHPExcel->getActiveSheet()->getCell(	'DE'	.$i)->getCalculatedValue();
        $unavailable_presence_status	= $objPHPExcel->getActiveSheet()->getCell(	'DF'	.$i)->getCalculatedValue();
        $away_presence_status	= $objPHPExcel->getActiveSheet()->getCell(	'DG'	.$i)->getCalculatedValue();
        $chat_presence_status	= $objPHPExcel->getActiveSheet()->getCell(	'DH'	.$i)->getCalculatedValue();
        $used_presence_status	= $objPHPExcel->getActiveSheet()->getCell(	'DI'	.$i)->getCalculatedValue();
        $department	= $objPHPExcel->getActiveSheet()->getCell(	'DJ'	.$i)->getCalculatedValue();
        $title	= $objPHPExcel->getActiveSheet()->getCell(	'DK'	.$i)->getCalculatedValue();
		
		 $sql = mysqli_query ($conexion,"SELECT extension  from wave where extension = '$extension'");
		
		 $result= mysqli_num_rows($sql);
		 if ($result > 0) { 
			
			
			 $sqlup = "UPDATE wave
			SET  			
			
            extension= '$extension',
            first_name= '$first_name',
            last_name= '$last_name',
            technology= '$technology',
            enable_voicemail= '$enable_voicemail',
            callerid_number= '$callerid_number',
            sipiax_password= '$sipiax_password',
            voicemail_password= '$voicemail_password',
            skip_voicemail_password_verification= '$skip_voicemail_password_verification',
            ring_timeout= '$ring_timeout',
            auto_record= '$auto_record',
            srtp= '$srtp',
            fax_mode= '$fax_mode',
            strategy= '$strategy',
            local_subnet_1= '$local_subnet_1',
            local_subnet_2= '$local_subnet_2',
            local_subnet_3= '$local_subnet_3',
            local_subnet_4= '$local_subnet_4',
            local_subnet_5= '$local_subnet_5',
            local_subnet_6= '$local_subnet_6',
            local_subnet_7= '$local_subnet_7',
            local_subnet_8= '$local_subnet_8',
            local_subnet_9= '$local_subnet_9',
            local_subnet_10= '$local_subnet_10',
            skip_trunk_auth= '$skip_trunk_auth',
            codec_preference= '$codec_preference',
            permission= '$permission',
            nat= '$nat',
            can_reinvite= '$can_reinvite',
            dtmf_mode= '$dtmf_mode',
            insecure= '$insecure',
            enable_keep_alive= '$enable_keep_alive',
            keep_alive_frequency= '$keep_alive_frequency',
            authid= '$authid',
            tel_uri= '$tel_uri',
            used_call_forward_busy= '$used_call_forward_busy',
            used_call_forward_no_answer= '$used_call_forward_no_answer',
            used_call_forward_unconditional= '$used_call_forward_unconditional',
            support_hot_desking_mode= '$support_hot_desking_mode',
            dial_trunk_password= '$dial_trunk_password',
            disable_this_extension= '$disable_this_extension',
            used_cfu_time_condition= '$used_cfu_time_condition',
            used_cfn_time_condition= '$used_cfn_time_condition',
            used_cfb_time_condition= '$used_cfb_time_condition',
            music_on_hold= '$music_on_hold',
            cc_agent_policy= '$cc_agent_policy',
            cc_monitor_policy= '$cc_monitor_policy',
            ccbs_available_timer= '$ccbs_available_timer',
            ccnr_available_timer= '$ccnr_available_timer',
            cc_offer_timer= '$cc_offer_timer',
            cc_max_agents= '$cc_max_agents',
            cc_max_monitors= '$cc_max_monitors',
            ring_simultaneously= '$ring_simultaneously',
            external_number= '$external_number',
            time_condition_for_ring_simultaneously= '$time_condition_for_ring_simultaneously',
            time_condition_for_skip_trunk_auth= '$time_condition_for_skip_trunk_auth',
            enable_ldap= '$enable_ldap',
            limit_max_time= '$limit_max_time',
            enable_t_38_udptl= '$enable_t_38_udptl',
            max_contacts= '$max_contacts',
            alert_info= '$alert_info',
            do_not_disturb= '$do_not_disturb',
            dnd_time_condition= '$dnd_time_condition',
            custom_autoanswer= '$custom_autoanswer',
            do_not_disturb_whitelist= '$do_not_disturb_whitelist',
            use_callee_dod_on_fwd_or_rb= '$use_callee_dod_on_fwd_or_rb',
            custom_presence_status= '$custom_presence_status',
            forward_whitelist= '$forward_whitelist',
            fax_to_email= '$fax_to_email',
            sca_enable= '$sca_enable',
            enable_call_waiting= '$enable_call_waiting',
            emergency_calls_cid_name= '$emergency_calls_cid_name',
            use_callee_dod_for_follow_me= '$use_callee_dod_for_follow_me',
            audio_fec= '$audio_fec',
            video_fec= '$video_fec',
            packet_loss_retransmission= '$packet_loss_retransmission',
            jitter_buffer_type= '$jitter_buffer_type',
            jitter_buffer_normal_type= '$jitter_buffer_normal_type',
            jitter_buffer_normal_size= '$jitter_buffer_normal_size',
            jitter_buffer_normal_max_size= '$jitter_buffer_normal_max_size',
            missed_call= '$missed_call',
            remote_camera_control= '$remote_camera_control',
            enable_music_on_hold_for_ivr= '$enable_music_on_hold_for_ivr',
            out_call_max_chans= '$out_call_max_chans',
            missed_call_type= '$missed_call_type',
            stop_ringing= '$stop_ringing',
            srtp_suite= '$srtp_suite',
            highfreq_duration1= '$highfreq_duration1',
            highfreq_number1= '$highfreq_number1',
            user_password= '$user_password',
            email_address= '$email_address',
            wave.language= '$language',
            phone_number= '$phone_number',
            email_to_user= '$email_to_user',
            enable_wave= '$enable_wave',
            enable_contact= '$enable_contact',
            call_barging_monitor= '$call_barging_monitor',
            seamless_transfer_members= '$seamless_transfer_members',
            specific_time= '$specific_time',
            
            
            attach_voicemail_to_email= '$attach_voicemail_to_email',
            keep_voicemail_after_emailing= '$keep_voicemail_after_emailing',
            pms_remote_wakeup_whitelist= '$pms_remote_wakeup_whitelist',
            wave.policy= '$policy',
            highfreq_number2= '$highfreq_number2',
            highfreq_duration2= '$highfreq_duration2',
            available_presence_status= '$available_presence_status',
            userdef_presence_status= '$userdef_presence_status',
            unavailable_presence_status= '$unavailable_presence_status',
            away_presence_status= '$away_presence_status',
            chat_presence_status= '$chat_presence_status',
            used_presence_status= '$used_presence_status',
            department= '$department',
            title= '$title',
			fecha_modificacion=current_date,
			hora_modificacion=current_time
			where  extension = '$extension'";
			$resultup = mysqli_query($conexion, $sqlup);
		
			if($resultup){
				echo $extension."-Actualizado<br>";
			}else{ 
				echo $extension."-No Actualizado<br>"; 
			}
		}else{
			
			   $sqlinser = "INSERT INTO wave
			(
                extension,
                first_name,
                last_name,
                technology,
                enable_voicemail,
                callerid_number,
                sipiax_password,
                voicemail_password,
                skip_voicemail_password_verification,
                ring_timeout,
                auto_record,
                srtp,
                fax_mode,
                strategy,
                local_subnet_1,
                local_subnet_2,
                local_subnet_3,
                local_subnet_4,
                local_subnet_5,
                local_subnet_6,
                local_subnet_7,
                local_subnet_8,
                local_subnet_9,
                local_subnet_10,
                skip_trunk_auth,
                codec_preference,
                permission,
                nat,
                can_reinvite,
                dtmf_mode,
                insecure,
                enable_keep_alive,
                keep_alive_frequency,
                authid,
                tel_uri,
                used_call_forward_busy,
                used_call_forward_no_answer,
                used_call_forward_unconditional,
                support_hot_desking_mode,
                dial_trunk_password,
                disable_this_extension,
                used_cfu_time_condition,
                used_cfn_time_condition,
                used_cfb_time_condition,
                music_on_hold,
                cc_agent_policy,
                cc_monitor_policy,
                ccbs_available_timer,
                ccnr_available_timer,
                cc_offer_timer,
                cc_max_agents,
                cc_max_monitors,
                ring_simultaneously,
                external_number,
                time_condition_for_ring_simultaneously,
                time_condition_for_skip_trunk_auth,
                enable_ldap,
                limit_max_time,
                enable_t_38_udptl,
                max_contacts,
                alert_info,
                do_not_disturb,
                dnd_time_condition,
                custom_autoanswer,
                do_not_disturb_whitelist,
                use_callee_dod_on_fwd_or_rb,
                custom_presence_status,
                forward_whitelist,
                fax_to_email,
                sca_enable,
                enable_call_waiting,
                emergency_calls_cid_name,
                use_callee_dod_for_follow_me,
                audio_fec,
                video_fec,
                packet_loss_retransmission,
                jitter_buffer_type,
                jitter_buffer_normal_type,
                jitter_buffer_normal_size,
                jitter_buffer_normal_max_size,
                missed_call,
                remote_camera_control,
                enable_music_on_hold_for_ivr,
                out_call_max_chans,
                missed_call_type,
                stop_ringing,
                srtp_suite,
                highfreq_duration1,
                highfreq_number1,
                user_password,
                email_address,
                wave.language,
                phone_number,
                email_to_user,
                enable_wave,
                enable_contact,
                call_barging_monitor,
                seamless_transfer_members,
                specific_time,
                
              
                attach_voicemail_to_email,
                keep_voicemail_after_emailing,
                pms_remote_wakeup_whitelist,
                wave.policy,
                highfreq_number2,
                highfreq_duration2,
                available_presence_status,
                userdef_presence_status,
                unavailable_presence_status,
                away_presence_status,
                chat_presence_status,
                used_presence_status,
                department,
                title,
			eliminada,
			fecha_insercion,
			hora_insercion)
			VALUES(
            '$extension',
            '$first_name',
            '$last_name',
            '$technology',
            '$enable_voicemail',
            '$callerid_number',
            '$sipiax_password',
            '$voicemail_password',
            '$skip_voicemail_password_verification',
            '$ring_timeout',
            '$auto_record',
            '$srtp',
            '$fax_mode',
            '$strategy',
            '$local_subnet_1',
            '$local_subnet_2',
            '$local_subnet_3',
            '$local_subnet_4',
            '$local_subnet_5',
            '$local_subnet_6',
            '$local_subnet_7',
            '$local_subnet_8',
            '$local_subnet_9',
            '$local_subnet_10',
            '$skip_trunk_auth',
            '$codec_preference',
            '$permission',
            '$nat',
            '$can_reinvite',
            '$dtmf_mode',
            '$insecure',
            '$enable_keep_alive',
            '$keep_alive_frequency',
            '$authid',
            '$tel_uri',
            '$used_call_forward_busy',
            '$used_call_forward_no_answer',
            '$used_call_forward_unconditional',
            '$support_hot_desking_mode',
            '$dial_trunk_password',
            '$disable_this_extension',
            '$used_cfu_time_condition',
            '$used_cfn_time_condition',
            '$used_cfb_time_condition',
            '$music_on_hold',
            '$cc_agent_policy',
            '$cc_monitor_policy',
            '$ccbs_available_timer',
            '$ccnr_available_timer',
            '$cc_offer_timer',
            '$cc_max_agents',
            '$cc_max_monitors',
            '$ring_simultaneously',
            '$external_number',
            '$time_condition_for_ring_simultaneously',
            '$time_condition_for_skip_trunk_auth',
            '$enable_ldap',
            '$limit_max_time',
            '$enable_t_38_udptl',
            '$max_contacts',
            '$alert_info',
            '$do_not_disturb',
            '$dnd_time_condition',
            '$custom_autoanswer',
            '$do_not_disturb_whitelist',
            '$use_callee_dod_on_fwd_or_rb',
            '$custom_presence_status',
            '$forward_whitelist',
            '$fax_to_email',
            '$sca_enable',
            '$enable_call_waiting',
            '$emergency_calls_cid_name',
            '$use_callee_dod_for_follow_me',
            '$audio_fec',
            '$video_fec',
            '$packet_loss_retransmission',
            '$jitter_buffer_type',
            '$jitter_buffer_normal_type',
            '$jitter_buffer_normal_size',
            '$jitter_buffer_normal_max_size',
            '$missed_call',
            '$remote_camera_control',
            '$enable_music_on_hold_for_ivr',
            '$out_call_max_chans',
            '$missed_call_type',
            '$stop_ringing',
            '$srtp_suite',
            '$highfreq_duration1',
            '$highfreq_number1',
            '$user_password',
            '$email_address',
            '$language',
            '$phone_number',
            '$email_to_user',
            '$enable_wave',
            '$enable_contact',
            '$call_barging_monitor',
            '$seamless_transfer_members',
            '$specific_time',
            
         
            '$attach_voicemail_to_email',
            '$keep_voicemail_after_emailing',
            '$pms_remote_wakeup_whitelist',
            '$policy',
            '$highfreq_number2',
            '$highfreq_duration2',
            '$available_presence_status',
            '$userdef_presence_status',
            '$unavailable_presence_status',
            '$away_presence_status',
            '$chat_presence_status',
            '$used_presence_status',
            '$department',
            '$title',
			0,
			current_date,
			current_time		
			);";
			$resultinser = mysqli_query($conexion, $sqlinser);
		
			if($resultinser){
				$sqlupids = "UPDATE wave  
                INNER JOIN slack on upper (SUBSTRING(slack.email, 1,(instr(slack.email,'@')-1 ))) = upper (SUBSTRING(wave.email_address, 1,(instr(wave.email_address,'@')-1 )))
                SET wave.id_slack = slack.id_slack, wave.eliminada = slack.eliminada
                    where upper (SUBSTRING(wave.email_address, 1,(instr(wave.email_address,'@')-1 ))) = upper (SUBSTRING('$email_address', 1,(instr('$email_address','@')-1 )))";
                    $resultupids = mysqli_query($conexion, $sqlupids);
            if($resultupids){
                echo $extension."-Insertado y id_slack actualizado <br>";
            }else{
                echo $extension."-Insertado <br>";
            }

				
			}else{
				echo $extension."-No Insertado <br>";
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
