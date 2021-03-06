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
		
		$database->insert(DB_PREFIX.'attachments', ['attachment_uid'=>$uid, 'attachment_size'=>$size, 'attachment_address'=>$generate_name, 'attachment_ext'=>$attachment_ext_id, 'attachment_server'=>$data_server['server_id'], 'attachment_user'=>$userdata['user_id'], '#attachment_time'=>'UNIX_TIMESTAMP()', 'attachment_ip'=>get_ip(), 'attachment_status'=>'Enable']);
		
		require_once MAIL.'phpmail_autoload.php';

		//Create a new PHPMailer instance
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug=SMTP_DEBUG;

		//Ask for HTML-friendly debug output
		$mail->Debugoutput=SMTP_OUTPUT;

		//Set the hostname of the mail server
		$mail->Host=SMTP_HOST;

		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port=SMTP_PORT;

		//Whether to use SMTP authentication
		$mail->SMTPAuth=true;

		//Username to use for SMTP authentication
		$mail->Username=SMTP_USER;

		//Password to use for SMTP authentication
		$mail->Password=SMTP_PASS;

		//Set who the message is to be sent from
		$mail->setFrom(SMTP_OUTPUT, 'Info [ Uploadchi ]');

		//Set an alternative reply-to address
		$mail->addReplyTo(SMTP_USER, 'Info [ Uploadchi ]');

		//Set who the message is to be sent to
		$mail->addAddress($userdata['user_email'], $userdata['user_username']);

		//Set the subject line
		$mail->Subject = 'File Uploaded via '.$userdata['user_username'].' on Uploadchi';

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML(file_get_contents(THEMES_MAIL.'attachments.tpl'));
		
		$mail->send();
		
		$download_url=$settings['setting_siteurl'].'download.php?url='.$uid;
		
		// Assign Locale
		$templates->assign('lang_upload_100', $locale['upload_100']);

		// Assign Others
		$templates->assign('download_url', $download_url);
	}
}
?>