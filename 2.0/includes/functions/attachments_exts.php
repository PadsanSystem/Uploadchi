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
	$result=$database->get("attachments_exts", ["[>]attachments_types"=>["attachment_type_id"=>"attachment_ext_type"]], ["attachment_ext_name", "attachment_ext_type", "attachment_type_id", "attachment_type_name"], ["attachment_ext_name"=>$type_file]);
	
	if($result==false)
		return false;
	else
		return true;
}
?>