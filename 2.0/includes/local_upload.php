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
	$trust_type=check_validate_exts($type);
	
	// Check and set Image virus
	$original_name=$string['tmp_name'];
	$verify_image=verify_image($original_name);
	
	if($trust_type==false){
		$error=100;
	}else if($type==1 && $verify_image==false){
		$error=101;
	}else{
		// Include class ftp_upload
		include_once CLASSES."ftp_upload.php";
		
		// Generate name
		$generate_name=random_text('number');
		
		// String of name and type file
		$generate_name=$generate_name.".".$type;
		
		// Select best server for upload files
		$data_server=$database->db_get_results("SELECT server_id, server_name, server_username, server_password FROM ".DB_PREFIX."servers WHERE server_name='s1.uploadchi.com' AND server_status='Enable'");		
		
		// Servers
		$rand_address='ftp.'.$data_server['server_name'];
		
		// Create object as ftp_upload
		$ftp_upload=new ftp_upload();
		// FTP folder
		$ftp_upload->user_ftp=$data_server['server_username'];
		// FTP password
		$ftp_upload->pwd_ftp=$data_server['server_password'];
		// FTP host address
		$ftp_upload->hostadd=$rand_address;
		// Initialize FTP server
		$ftp_upload->initialize();
		// Upload file in FTP Server
		$ftp_upload->upload($string['tmp_name'], $generate_name);
		// Close ftp connection
		$ftp_upload->close_connection();
		
		if(iMEMBER)
			$attachment_view_user="'".$userdata['user_id']."'";
		else
			$attachment_view_user='NULL';
		
		$data=$database->db_get_results("SELECT * FROM ".DB_PREFIX."attachments_exts WHERE attachment_ext_name='$type'");
		
		$attachment_folder='NULL';

		$database->db_get_results("INSERT INTO ".DB_PREFIX."attachments (attachment_uid, attachment_size, attachment_address, attachment_ext, attachment_server, attachment_folder, attachment_time, attachment_ip, attachment_status) VALUES ('$uid', '$size', '$generate_name', '".$data['attachment_ext_id']."', '".$data_server['server_id']."', $attachment_folder, $attachment_view_user, '".time()."', '".get_ip()."', 'Enable')");
		
		$to='mahmoodi@uploadchi.com';
		$subject='New file on Uploadchi';
		$message='http://www.uploadchi.com/download.php?url='.$uid;
		$message.='Size file:'.parsebytesize($size);
		$headers='CC: s.saeidi@uploadchi.com';
		@mail($to, $subject, $message, $headers);
		
		$download_url=$settings['setting_siteurl'].'download.php?url='.$uid;
	}
}
?>