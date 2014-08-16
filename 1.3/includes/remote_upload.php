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
	$string=$_POST['remote_upload'];
	
	// Get Files
	$name=get_name($string, 'post');
	
	// Get type file
	$type=get_type($string, 'post');
	
	// Set uid file
	$uid=set_uid($name, $type, '_');
	
	include_once FUNCTIONS.'function.attachments_exts.php';
	$trust_type=check_validate_exts($type);
	
	if($trust_type==false){
		$error=100;
	}else{
		// Include class ftp_upload
		include_once CLASSES."class.ftp_upload.php";
		
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
			$fp = fopen ($path, 'w+');
			$ch = curl_init();
			curl_setopt( $ch, CURLOPT_URL, $url );
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3600);
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
		
		if ($headers['http_code'] === 200 and $headers['download_content_length'] < 1024*1024){
			if (download($url, $path)){
				
				// String of name and type file
				$generate_name=$generate_name.".".$type;
				
				// Get size file
				$size=get_size($url, 'post');
				
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
				
				// Get prefix char of country
				$country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];

				dbquery("INSERT INTO ".DB_PREFIX."attachments (attachment_uid, attachment_size, attachment_address, attachment_ext, attachment_server, attachment_folder, attachment_user, attachment_time, attachment_ip, attachment_country, attachment_status) VALUES ('$uid', '$size', '$generate_name', '".$data['attachment_ext_id']."', '1', $attachment_folder, $attachment_view_user, '".time()."', '".get_ip()."', '$country_code', 'Enable')");
				
				$download_url=$settings['setting_siteurl'].'download.php?url='.$uid;
			}else{
				$error=100;
			}
		}
	
	}
}
?>