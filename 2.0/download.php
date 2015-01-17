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
require_once LOCALESET.'errors.php';

if(!isset($url)) redirect(BASEDIR.'index.php');
$url=cleanurl($url);

$data=$database->get(DB_PREFIX.'attachments', ['[>]servers'=>['attachment_server'=>'server_id']], ['attachment_id', 'attachment_uid', 'attachment_address', 'attachment_status', 'server_name', 'server_status'], ["AND"=>["attachment_uid"=>$url, "attachment_status"=>'Enable', "server_status"=>'Enable']]);

if($data==false){
	$error=106;
	?>
	<div class="container">
		<div class="alert alert-warning" role="alert">
			<p class="text-danger"><b><?php echo $locale['login_105']; ?> <?php echo $error; ?></b></p>
			<?php
			$error_string=show_error($error, 'errors');
			echo $locale["$error_string"];
			?>
		</div>
	</div>
	<?php
}else{
	$database->insert(DB_PREFIX.'attachments_views', ['attachment_view_attachment'=>$data['attachment_id'], 'attachment_view_ip'=>get_ip(), 'attachment_view_user'=>$userdata['user_id'], '#attachment_view_time'=>'UNIX_TIMESTAMP()']);

	// Set download link
	$link_download='http://';
	$link_download.=$data['server_name'];
	$link_download.='/';
	$link_download.=$data['attachment_address'];

	redirect($link_download);
}
require_once BASEDIR.'footer.php';
?>