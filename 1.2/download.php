<?php
/*
|-----------------------------------|
|	PadsanSystem					|
|-----------------------------------|
|	Uploadcenter Version			|
|-----------------------------------|
|	Web   : www.PadsanSystem.com	|
|	Email : Info@PadsanSystem.com	|
|	Tel   : +98 - 26 325 45 700		|
|	Fax   : +98 - 26 325 45 701		|
|-----------------------------------|
*/
require_once "subheader.php";
require_once INCLUDES."file_hosting.php";
require_once CLASSES."class.httpdownload.php";

if(isset($url) && !cleanurl($url)) redirect($REQUEST_URI);

$result=dbquery("SELECT a.*, s.* FROM ".DB_PREFIX."attachments a, ".DB_PREFIX."servers s WHERE a.attachment_uid='$url' AND a.attachment_server=s.server_id");
$data=dbarray($result);

if(iMEMBER){
	$attachment_view_user="'".$userdata['user_id']."'";
}else{
	$attachment_view_user='NULL';
}

dbquery("INSERT INTO ".DB_PREFIX."attachments_views (attachment_view_user, attachment_view_attachment, attachment_view_ip, attachment_view_time) VALUES ($attachment_view_user, '".$data['attachment_id']."', '".get_ip()."', '".time()."')");
$object = new httpdownload;
$object->set_byurl("http://www.".$data['server_name']."/".$data['attachment_address']); //Download from a file
$object->use_resume = true; //Enable Resume Mode
$object->download(); //Download File

require_once BASEDIR."footer.php";
?>