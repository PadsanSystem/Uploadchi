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
if(isset($action) && ($action=='delete')){
	if(isset($folder_name)){
		dbquery("DELETE FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_id='$folder_name'");
	}else if(isset($url)){
		dbquery("DELETE FROM ".DB_PREFIX."attachments WHERE attachment_uid='$url'");
	}
}
?>