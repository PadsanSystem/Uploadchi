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
	$string=cleanurl($_POST['remote_upload']);
	
	// Get Files
	$name=get_name($string, 'post');
	
	// Get type file
	$type=get_type($string, 'post');
	
	// Set uid file
	$uid=set_uid($name, $type, '_');
	
	include_once FUNCTIONS.'attachments_exts.php';
	$trust_type=check_validate_exts($type);
	
	if($string==''){
		$error=103;
	}else if($trust_type==false){
		$error=100;
	}else{
		// Include class ftp_upload
		include_once CLASSES."ftp_upload.php";
		
		// Get headers
		function getHeaders($url){
			$ch=curl_init($url);
			curl_setopt($ch, CURLOPT_NOBODY, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
			curl_exec($ch);
			$headers=curl_getinfo($ch);
			curl_close($ch);

			return $headers;
		}
		
		// Download via curl
		function download($url, $path){
			$fp=fopen($path, 'w+');
			$ch=curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
			curl_setopt($ch, CURLOPT_AUTOREFERER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0');
			curl_setopt($ch, CURLOPT_REFERER, 'http://www.uploadchi.com');
			curl_setopt($ch, CURLOPT_FILE, $fp);
			curl_exec($ch);
			curl_close($ch);
			fclose($fp);

			if (filesize($path) > 0) return true;
		}
		
		// Generate name
		$generate_name=random_text('number');
		
		$url=$string;
		$path = 'tmp/'.$generate_name;
		$headers = getHeaders($url);
		
		if ($headers['http_code']!=200){
			$error=107;
		}else if ($headers['download_content_length']==0 && $headers['download_content_length']>=1074790400){
			$error=121;
		}else{
			download($url, $path);
			// String of name and type file
			$generate_name=$generate_name.".".$type;
			
			// Get size file
			$size=get_size($url, 'post');
			
			// Select best server for upload files
			$result_server=dbquery("SELECT server_id, server_name, server_username, server_password FROM ".DB_PREFIX."servers WHERE server_name='s1.uploadchi.com' AND server_status='Enable'");
			$data_server=dbarray($result_server);
			
			// Servers
			$rand_address='ftp.'.$data_server['server_name'];
			
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
			$ftp_upload->upload($path, $generate_name);
			// Close ftp connection
			$ftp_upload->close_connection();
			
			unlink($path);
				
			if(iMEMBER)
				$attachment_view_user="'".$userdata['user_id']."'";
			else
				$attachment_view_user='NULL';
			
			$result=dbquery("SELECT * FROM ".DB_PREFIX."attachments_exts WHERE attachment_ext_name='$type'");
			$data=dbarray($result);
			
			$attachment_folder='NULL';

			dbquery("INSERT INTO ".DB_PREFIX."attachments (attachment_uid, attachment_size, attachment_address, attachment_type, attachment_ext, attachment_server, attachment_folder, attachment_user, attachment_time, attachment_ip, attachment_country, attachment_status) VALUES ('$uid', '$size', '$generate_name', '".$data['attachment_ext_id']."', '".$data['attachment_ext_id']."', '".$data_server['server_id']."', $attachment_folder, $attachment_view_user, '".time()."', '".get_ip()."', '".COUNTRY_CODE."', 'Enable')");
			
			$download_url=$settings['setting_siteurl'].'download.php?url='.$uid;
		}
	}
}
?>