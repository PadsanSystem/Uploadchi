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

$result=dbquery("SELECT a.*, s.* FROM ".DB_PREFIX."attachments a, ".DB_PREFIX."servers s WHERE a.attachment_uid='$url' AND a.attachment_server=s.server_id AND a.attachment_status='Enable' AND s.server_status='Enable'");
$data=dbarray($result);

if(dbrows($result)!=0){
	if(iMEMBER)
		$attachment_view_user="'".$userdata['user_id']."'";
	else
		$attachment_view_user='NULL';

	dbquery("INSERT INTO ".DB_PREFIX."attachments_views (attachment_view_user, attachment_view_attachment, attachment_view_ip, attachment_view_country, attachment_view_time) VALUES ($attachment_view_user, '".$data['attachment_id']."', '".get_ip()."', '".COUNTRY_CODE."', '".time()."')");

	// Set download link
	$link_download='http://';
	$link_download.=$data['server_name'];
	$link_download.='/';
	$link_download.=$data['attachment_address'];

	redirect($link_download);
}else{
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
}
require_once BASEDIR.'footer.php';
?>