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
function check_validate_exts($type_file){
	global $database;
	if($database->get(DB_PREFIX.'attachments_exts', ["[>]attachments_types"=>["attachment_ext_type"=>"attachment_type_id"]], ["attachment_ext_name", "attachment_ext_type", "attachment_type_id"], ["attachment_ext_name"=>$type_file]))
		return true;
	else
		return false;
}
?>