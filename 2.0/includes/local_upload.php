<?php
/*
|-------------------------------|
| PadsanCMS						|
|-------------------------------|
| UploadCenter Version v2.0		|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
if(isset($_POST['send_file'])){
	// Get String
	$string=$_FILES['local_upload'];
	
	// Get Files
	$name=get_name($string, 'files');
	
	// Get Type file
	$type=get_type($string, 'files');
	
	// Get Size file
	$size=get_size($string, 'files');
	
	// Set UID file
	$uid=set_uid($name, $type, '_');
	
	include_once FUNCTIONS.'attachments_exts.php';
	
	// Check and set Image virus
	$original_name=$string['tmp_name'];
	
	// Validate Type
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
		$templates->assign('lang_error_message', $error_message);
		$templates->assign('error_number', $error);
	}else{
		// Load language
		include_once LOCALESET.'upload.php';
		
		// String of name and type file
		$generate_name=random_text('number').".".$type;
		
		// Select Best Server for UploadFiles
		$data_server=$database->get(DB_PREFIX.'servers', '*', ['AND'=>['server_status'=>'Enable', 'server_name'=>'s1.uploadchi.com']]);

		// Servers
		$rand_address='ftp.'.$data_server['server_name'];
		
		// Include Class FTP Upload
		include_once CLASSES."ftp_upload.php";
		
		// Create Object as FTP Upload
		$ftp_upload=new ftp_upload();
		
		// FTP Folder
		$ftp_upload->user_ftp=$data_server['server_username'];
		
		// FTP Password
		$ftp_upload->pwd_ftp=$data_server['server_password'];
		
		// FTP Host Address
		$ftp_upload->hostadd=$rand_address;
		
		// Initialize FTP server
		$ftp_upload->initialize();
		
		// Upload File in FTP Server
		$ftp_upload->upload($string['tmp_name'], $generate_name);
		
		// Close FTP Connection
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