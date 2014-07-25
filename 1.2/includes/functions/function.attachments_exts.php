<?php
/*
|-----------------------------------|
| PadsanCMS							|
|-----------------------------------|
| Uploadcenter Version				|
|-----------------------------------|
| Web   : www.PadsanCMS.com			|
| Email : Info@PadsanCMS.com		|
| Tel   : +98 - 26 325 45 700		|
| Fax   : +98 - 26 325 45 701		|
|-----------------------------------|
*/
function check_validate_exts($type_file){
	$result=dbquery("SELECT a.*, b.* FROM ".DB_PREFIX."attachments_exts a, ".DB_PREFIX."attachments_types b WHERE a.attachment_ext_type=b.attachment_type_id AND a.attachment_ext_name='$type_file'");
	$data=dbarray($result);
	
	if(dbrows($result)!=0)
		return true;
	else
		return false;
}
?>