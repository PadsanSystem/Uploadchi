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
if(isset($action) && ($action=='delete')){
	if(isset($folder_name)){
		dbquery("DELETE FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_id='$folder_name'");
	}else if(isset($url)){
		dbquery("DELETE FROM ".DB_PREFIX."attachments WHERE attachment_id='$attachment_folder_id' || attachment_folder_step='$folder_name'");
	}
}
?>