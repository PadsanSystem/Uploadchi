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

// Prevent view not Exists $url Query
if(!isset($url)) redirect(BASEDIR.'index.php');

$url=cleanurl($url);

$data=$database->get(DB_PREFIX.'attachments', ['[>]servers'=>['attachment_server'=>'server_id'], '[>]users'=>['attachment_user'=>'user_id'], '[>]attachments_exts'=>['attachment_ext'=>'attachment_ext_id']], ['attachment_ext_name', 'user_username', 'user_avatar', 'attachment_id', 'attachment_uid', 'attachment_size', 'attachment_address', 'attachment_ext', 'attachment_user', 'attachment_time', 'attachment_status', 'server_name', 'server_status'], ["AND"=>["attachment_uid"=>$url, "attachment_status"=>'Enable', "server_status"=>'Enable']]);

if($data==false){
	// Load Language
	include_once LOCALESET.'errors.php';
	
	$error=106;
	$error_string=show_error($error, 'errors');
	$error_message=$locale["$error_string"];
	
	// Assign Alert Message
	$templates->assign('lang_errors_122', $locale['errors_122']);
	$templates->assign('lang_errors_123', $locale['errors_123']);
	$templates->assign('lang_error_message', $error_message);
	$templates->assign('error_number', $error);

	// Render DownloadFiles
	$templates->display('download.tpl');
}else{
	// Set download link
	$link_download='http://';
	$link_download.=$data['server_name'];
	$link_download.='/';
	$link_download.=$data['attachment_address'];

	if($data['attachment_ext']==1 || $data['attachment_ext']==2 || $data['attachment_ext']==3){
		$database->insert(DB_PREFIX.'attachments_views', ['attachment_view_attachment'=>$data['attachment_id'], 'attachment_view_ip'=>get_ip(), 'attachment_view_user'=>$userdata['user_id'], '#attachment_view_time'=>'UNIX_TIMESTAMP()']);
		redirect($link_download);
	}else{
		// Load language
		include_once LOCALESET.'upload.php';

		// Get attachment view
		$attachment_views=$database->count(DB_PREFIX.'attachments_views', ['attachment_view_attachment'=>$data['attachment_id']]);

		$templates->assign('lang_upload_100', $locale['upload_100']);
		$templates->assign('attachment_name', $data['attachment_uid']);
		$templates->assign('attachment_size', $data['attachment_size']);
		$templates->assign('attachment_user', $data['user_username']);
		$templates->assign('attachment_time', $data['attachment_time']);
		$templates->assign('attachment_views', $attachment_views);
		$templates->assign('attachment_address', $link_download);
		$templates->assign('attachment_ext_name', IMAGES_TYPES.$data['attachment_ext_name'].'.png');
		
		// Set QRCode data
		$data_qrcode=$settings['setting_siteurl'].'download.php?url='.$data['attachment_uid'];

		// Load QRCode Class
		include CLASSES.'qrcode/qrlib.php';

		$images_qrcode=IMAGES_QRCODE.$data['attachment_id'].'.png';

		if(!file_exists($images_qrcode))
			QRcode::png($data_qrcode, $images_qrcode);

		$templates->assign('attachment_qrcode', $images_qrcode);

		$templates->assign('intro_download', true);

		// Render DownloadFiles
		$templates->display('download.tpl');
	}
}

require_once BASEDIR.'footer.php';
?>