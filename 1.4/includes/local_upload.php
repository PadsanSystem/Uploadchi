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
	// Include class ftp_upload
	include_once CLASSES."class.ftp_upload.php";
	
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
	
	include_once FUNCTIONS.'function.attachments_exts.php';
	$trust_type=check_validate_exts($type);
	
	// Check and set Image virus
	$original_name=$string['tmp_name'];
	$verify_image=verify_image($original_name);
	
	if($trust_type==false){
		$error=100;
	}else{
		if($type==1 && $verify_image==false){
			$error=101;
		}else{
			// Generate name
			$generate_name=random_text('number');
			
			// String of name and type file
			$generate_name=$generate_name.".".$type;
			
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
			$ftp_upload->upload($_FILES['local_upload']['tmp_name'], $generate_name);
			// Close ftp connection
			$ftp_upload->close_connection();
			
			if(iMEMBER)
				$attachment_view_user="'".$userdata['user_id']."'";
			else
				$attachment_view_user='NULL';
			
			$result=dbquery("SELECT * FROM ".DB_PREFIX."attachments_exts WHERE attachment_ext_name='$type'");
			$data=dbarray($result);
			
			$attachment_folder='NULL';
			
			// Get prefix char of country
			$country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];

			dbquery("INSERT INTO ".DB_PREFIX."attachments (attachment_uid, attachment_size, attachment_address, attachment_type, attachment_ext, attachment_server, attachment_folder, attachment_user, attachment_time, attachment_ip, attachment_country, attachment_status) VALUES ('$uid', '$size', '$generate_name', '1', '".$data['attachment_ext_id']."', '1', $attachment_folder, $attachment_view_user, '".time()."', '".get_ip()."', '$country_code', 'Enable')");
			
			$download_url=$settings['setting_siteurl'].'download.php?url='.$uid;
		}
	}
}
?>