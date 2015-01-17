<?php
/*
|-------------------------------|
| PadsanCMS						|
|-------------------------------|
| UploadCenter Version v1.0		|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
if(isset($_POST['send_file'])){
	// Get string
	$string=$_FILES['local_upload'];
	
	// Get Files
	$name=get_name($string, 'files');
	
	// Get type file
	$type=get_type($string, 'files');
	
	// Get size file
	$size=get_size($string, 'files');
	
	// Set uid file
	$uid=set_uid($name, $type, '_');
	
	include_once FUNCTIONS.'attachments_exts.php';
	
	// Check and set Image virus
	$original_name=$string['tmp_name'];
	
	if(check_validate_exts($type)==false)
		$error=100;
	if($type==1 && verify_image($original_name)==false)
		$error=101;
	
	if(isset($error)){
		// Load language
		include_once LOCALESET.'errors.php';
		
		$error_string=show_error($error, 'errors');
		$error_message=$locale["$error_string"];
		
		// Assign Alert Message
		$templates->assign('lang_errors_122', $locale['errors_122']);
		$templates->assign('lang_errors_123', $locale['errors_123']);
		$templates->assign('error_number', $error);
		$templates->assign('lang_error_message', $error_message);
	}else{
		// Load language
		include_once LOCALESET.'upload.php';
		
		// Generate name
		$generate_name=random_text('number');
		
		// String of name and type file
		$generate_name=$generate_name.".".$type;
		
		// Select best server for upload files
		$data_server=$database->get(DB_PREFIX.'servers', '*', ['AND'=>['server_status'=>'Enable', 'server_name'=>'s1.uploadchi.com']]);
		// Servers
		$rand_address='ftp.'.$data_server['server_name'];
		
		// Include class ftp_upload
		include_once CLASSES."ftp_upload.php";
		$ftp_upload=new ftp_upload();
		$ftp_upload->user_ftp=$data_server['server_username'];
		$ftp_upload->pwd_ftp=$data_server['server_password'];
		$ftp_upload->hostadd=$rand_address;
		$ftp_upload->initialize();
		$ftp_upload->upload($string['tmp_name'], $generate_name);
		$ftp_upload->close_connection();
		
		$attachment_ext_id=$database->get(DB_PREFIX.'attachments_exts', 'attachment_ext_id', ['attachment_ext_name'=>$type]);
		
		$database->insert(DB_PREFIX.'attachments', ['attachment_uid'=>$uid, 'attachment_size'=>$size, 'attachment_address'=>$generate_name, 'attachment_server'=>$data_server['server_id'], '#attachment_time'=>'UNIX_TIMESTAMP()', 'attachment_ip'=>get_ip(), 'attachment_status'=>'Enable']);
		
		$to='mahmoodi@uploadchi.com';
		$subject='New file on Uploadchi';
		$message='http://www.uploadchi.com/download.php?url='.$uid;
		$headers='CC: s.saeidi@uploadchi.com';
		@mail($to, $subject, $message, $headers);
		
		$download_url=$settings['setting_siteurl'].'download.php?url='.$uid;
		
		// Assign Locale
		$templates->assign('lang_upload_100', $locale['upload_100']);

		// Assign Others
		$templates->assign('download_url', $download_url);
	}
}
?>