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
function user_space(){
	global $userdata;
	
	$result=dbquery("SELECT count(*) AS count, SUM(attachment_size) AS size FROM ".DB_PREFIX."attachments WHERE attachment_user='".$userdata['user_id']."'");
	$data=dbarray($result);
	
	return $data;
}
?>