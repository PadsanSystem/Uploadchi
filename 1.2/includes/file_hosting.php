<?php
/*
|-----------------------------------|
|	PadsanSystem					|
|-----------------------------------|
|	Uploadcenter Version			|
|-----------------------------------|
|	Web   : www.PadsanSystem.com	|
|	Email : Info@PadsanSystem.com	|
|	Tel   : +98 - 26 325 45 700		|
|	Fax   : +98 - 26 325 45 701		|
|-----------------------------------|
*/
if(isset($_POST['send_file'])){
	// Include class ftp_upload
	include_once CLASSES."class.ftp_upload.php";
	
	// Get Files
	$original_name=$_FILES['file_hosting']['name'];
	$type=get_type($_FILES['file_hosting']['name']);
	$size=$_FILES['file_hosting']['size'];
	
	include_once FUNCTIONS.'function.attachments_exts.php';
	$trust_type=check_validate_exts($type);
	if($trust_type==true){
		// Generate name
		$generate_name=random_text('number');
		
		// String of name and type file
		$generate_name=$generate_name.".".$type;
		$size=$_FILES['file_hosting']['size'];
		
		// Select best server for upload files
		$result_server=dbquery("SELECT * FROM ".DB_PREFIX."servers WHERE server_name='s1.uploadchi.com'");
		$data_server=dbarray($result_server);
		
		// Servers
		$upload_protocol='ftp.';
		$server_name=$data_server['server_name'];
		$rand_address=$upload_protocol.$server_name;
		
		// Set username of server connect
		$rand_username=$data_server['server_username'];
		// Set password of server connect
		$rand_password=$data_server['server_password'];
		
		// Create object as ftp_upload
		$ftp_upload=new ftp_upload();
		// FTP folder
		$ftp_upload->user_ftp=$rand_username;
		// FTP password
		$ftp_upload->pwd_ftp=$rand_password;
		// FTP host address
		$ftp_upload->hostadd=$rand_address;
		// Initialize FTP server
		$ftp_upload->initialize();
		// Upload file in FTP Server
		$ftp_upload->upload($_FILES['file_hosting']['tmp_name'], $generate_name);
		// Close ftp connection
		$ftp_upload->close_connection();
		
		if(iMEMBER)
			$attachment_view_user="'".$userdata['user_id']."'";
		else
			$attachment_view_user='NULL';
		
		$result=dbquery("SELECT * FROM ".DB_PREFIX."attachments_exts WHERE attachment_ext_name='$type'");
		$data=dbarray($result);
		
		$attachment_folder='NULL';

		dbquery("INSERT INTO ".DB_PREFIX."attachments (attachment_uid, attachment_size, attachment_address, attachment_ext, attachment_server, attachment_folder, attachment_user, attachment_time, attachment_ip, attachment_status) VALUES ('$original_name', '$size', '$generate_name', '".$data['attachment_ext_id']."', '1', $attachment_folder, $attachment_view_user, '".time()."', '".get_ip()."', 'Enable')");
		
		$download_url=$settings['setting_siteurl'].'download.php?url='.$original_name;
	}else{
		$error='type';
	}
}
?>