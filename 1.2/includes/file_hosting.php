<?php
/*
|-----------------------------------|
| PadsanCMS							|
|-----------------------------------|
| Uploadcenter Version				|
|-----------------------------------|
| Web   : www.PadsanCMS.com			|
| Email : Info@PadsanCMS.com		|
| Tel   : +98 - 26 325 45 700		|
| Fax   : +98 - 26 325 45 701		|
|-----------------------------------|
*/
if(isset($_POST['send_file'])){
	// Include class ftp_upload
	include_once CLASSES."class.ftp_upload.php";
	
	// Servers
	$rand_address="s1.uploadchi.com";
	$rand_username="archive";
	$rand_password="14e1b600b1fd579f47433b88e8d85291";
	
	// Files
	$original_name=$_FILES['file_hosting']['name'];
	$type=get_type($_FILES['file_hosting']['name']);
	$size=$_FILES['file_hosting']['size'];
	
	// Generate name
	$generate_name=random_text('number');
	
	// String of name and type file
	$generate_name=$generate_name.".".$type;
	$size=$_FILES['file_hosting']['size'];
	
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
	
	if(iMEMBER){
		$attachment_view_user="'".$userdata['user_id']."'";
	}else{
		$attachment_view_user='NULL';
	}
	
	$result=dbquery("SELECT * FROM ".DB_PREFIX."attachments_exts WHERE attachment_ext_name='$type'");
	$data=dbarray($result);
	
	$attachment_folder='NULL';

	dbquery("INSERT INTO ".DB_PREFIX."attachments (attachment_uid, attachment_size, attachment_address, attachment_ext, attachment_server, attachment_folder, attachment_user, attachment_time, attachment_ip, attachment_status) VALUES ('$original_name', '$size', '$generate_name', '".$data['attachment_ext_id']."', '1', $attachment_folder, $attachment_view_user, '".time()."', '".get_ip()."', 'Enable')");
	
	$download_url=$settings['setting_siteurl']."download.php?url=".$original_name;
}
?>