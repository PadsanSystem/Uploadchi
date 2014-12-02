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
if(!isset($url) && !cleanurl($url)) redirect(BASEDIR.'index.php');

$result=dbquery("SELECT a.*, s.* FROM ".DB_PREFIX."attachments a, ".DB_PREFIX."servers s WHERE a.attachment_uid='$url' AND a.attachment_server=s.server_id AND a.attachment_status='Enable' AND s.server_status='Enable'");

$data=dbarray($result);

if(iMEMBER)
	$attachment_view_user="'".$userdata['user_id']."'";
else
	$attachment_view_user='NULL';

// Get prefix char of country
$country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];

dbquery("INSERT INTO ".DB_PREFIX."attachments_views (attachment_view_user, attachment_view_attachment, attachment_view_ip, attachment_view_country, attachment_view_time) VALUES ($attachment_view_user, '".$data['attachment_id']."', '".get_ip()."', '$country_code', '".time()."')");

// Set download link
$link_download='http://';
$link_download.=$data['server_name'];
$link_download.='/';
$link_download.=$data['attachment_address'];

redirect($link_download);

require_once BASEDIR.'footer.php';
?>