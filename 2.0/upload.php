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
require_once 'subheader.php';

if(is_uploaded_file($_FILES['local_upload']['tmp_name'])){
	require_once INCLUDES.'local_upload.php';
}else if(isset($_POST['remote_upload'])){
	require_once INCLUDES.'remote_upload.php';
}else{
	// Load language
	include_once LOCALESET.'errors.php';
	
	$error=103;
	$error_string=show_error($error, 'errors');
	$error_message=$locale["$error_string"];
	
	// Assign Alert Message
	$templates->assign('lang_errors_122', $locale['errors_122']);
	$templates->assign('lang_errors_123', $locale['errors_123']);
	$templates->assign('error_number', $error);
	$templates->assign('lang_error_message', $error_message);
}

// Load language
include_once LOCALESET.'upload.php';

// Assign Locale
$templates->assign('lang_upload_100', $locale['upload_100']);

// Assign Others
$templates->assign('download_url', $download_url);

// Render UploadFiles
$templates->display('upload.tpl');

require_once BASEDIR.'footer.php';
?>