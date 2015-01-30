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
	$string=cleanurl($_POST['remote_upload']);
	
	// Get Files
	$name=get_name($string, 'post');
	
	// Get Type file
	$type=get_type($string, 'post');
	
	// Set UID file
	$uid=set_uid($name, $type, '_');
	
	include_once FUNCTIONS.'attachments_exts.php';
	
	// Error
	if($string=='')
		$error=103;
	
	// Validate Type
	if(check_validate_exts($type)==false)
		$error=100;
	
	// Include Class UpiDopi
	include_once CLASSES.'upidopi.php';
	
	// Generate name
	$generate_name=random_text('number');
	
	$url=$string;
	$path='tmp/'.$generate_name;
	$headers=getHeaders($url);
	
	if ($headers['http_code']!=200){
		$error=107;
	}else if ($headers['download_content_length']==0 && $headers['download_content_length']>=1074790400){
		$error=121;
	}else{
		// Load language
		include_once LOCALESET.'upload.php';
		
		// Get File
		download($url, $path);
		
		// String of name and type file
		$generate_name=$generate_name.".".$type;
		
		// Get Size File
		$size=get_size($url, 'post');
		
		// Select Best Server for UploadFiles
		$data_server=$database->get(DB_PREFIX.'servers', '*', ['AND'=>['server_status'=>'Enable', 'server_name'=>'s1.uploadchi.com']]);
		
		// Servers
		$rand_address='ftp.'.$data_server['server_name'];
		
		// Set Username of Server connect
		$rand_username=$data_server['server_username'];
		
		// Set Password of Server connect
		$rand_password=$data_server['server_password'];
		
		// Include Class FTP Upload
		include_once CLASSES.'ftp_upload.php';
	
		// Create Object as FTP Upload
		$ftp_upload=new ftp_upload();
		
		// FTP Folder
		$ftp_upload->user_ftp=$rand_username;
		
		// FTP Password
		$ftp_upload->pwd_ftp=$rand_password;
		
		// FTP Host Address
		$ftp_upload->hostadd=$rand_address;
		
		// Initialize FTP server
		$ftp_upload->initialize();
		
		// Upload File in FTP Server
		$ftp_upload->upload($path, $generate_name);
		
		// Close FTP Connection
		$ftp_upload->close_connection();
		
		unlink($path);
		
		$attachment_ext_id=$database->get(DB_PREFIX.'attachments_exts', 'attachment_ext_id', ['attachment_ext_name'=>$type]);

		$database->insert(DB_PREFIX.'attachments', ['attachment_uid'=>$uid, 'attachment_size'=>$size, 'attachment_address'=>$generate_name, 'attachment_ext'=>$attachment_ext_id, 'attachment_server'=>$data_server['server_id'], 'attachment_folder'=>$attachment_folder, 'attachment_user'=>$userdata['user_id'], '#attachment_time'=>'UNIX_TIMESTAMP()', 'attachment_ip'=>get_ip(), 'attachment_status'=>'Enable']);
		
		$to='mahmoodi@uploadchi.com';
		$subject='New file on Uploadchi';
		$message='http://www.uploadchi.com/download.php?url='.$uid;
		$message.='Size file:'.parsebytesize($size);
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