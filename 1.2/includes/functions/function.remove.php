<?php
$result=dbarray(dbquery("SELECT attachment_folder_Id FROM
							attachments_folders
						WHERE
							attachment_folder_step!=0
						AND attachment_folder_step NOT IN (SELECT attachment_folder_id FROM attachments_folders)"));
		$implode=implode(',', $result);
		// var_dump($implode);
		dbquery("DELETE FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_id IN ($implode)");
		
if(isset($action) && ($action=='delete')){
	if(isset($folder_name)){
	
		
		dbquery("DELETE FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_id='$folder_name'");
		
		$result=dbarray(dbquery("SELECT * FROM
							attachments_folders
						WHERE
							attachment_folder_step!=0
						AND attachment_folder_step NOT IN (SELECT attachment_folder_id FROM attachments_folders)"));
		$implode=implode(',', $result);
		dbquery("DELETE FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_id IN ($implode)");
		// $check=dbquery("SELECT * FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_step!=0 ");
		// $out=array();
		// $ids='';
		// $cache=$folder_name;
		// while($result_f=dbarray($check)){
			// if($result_f['attachment_folder_step']==$cache){
				// $ids.=$result_f['attachment_folder_step'].',';
				// $cache=$result_f['attachment_folder_step'];
			// }
		// }
		
		// $ids=substr($ids,0,strlen($ids)-1);
		
		// dbquery("DELETE FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_id IN ($ids)");
		
		dbquery("DELETE FROM ".DB_PREFIX."attachments WHERE attachment_folder='$folder_name' ");
	
	}else if(isset($url)){
		$attachment_folder_id = $folder_name;
		dbquery("DELETE FROM ".DB_PREFIX."attachments WHERE attachment_id='$attachment_folder_id' || attachment_folder_step='$attachment_folder_id'  ");
	}else{
		// . . .
	}
}

?>