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

// Prevent view from Guests
if(!iMEMBER) { redirect(BASEDIR.'index.php'); }

// Load language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'dashboard.php';

// Assign Dashboard Locale
$templates->assign('lang_user_dashboard_100', $locale['dashboard_100']);
$templates->assign('lang_user_dashboard_101', $locale['dashboard_101']);
$templates->assign('lang_user_dashboard_102', $locale['dashboard_102']);
$templates->assign('lang_user_dashboard_103', $locale['dashboard_103']);
$templates->assign('lang_user_dashboard_104', $locale['dashboard_104']);
$templates->assign('lang_user_dashboard_105', $locale['dashboard_105']);
$templates->assign('lang_user_dashboard_106', $locale['dashboard_106']);
$templates->assign('lang_user_dashboard_107', $locale['dashboard_107']);
$templates->assign('lang_user_dashboard_108', $locale['dashboard_108']);
$templates->assign('lang_user_dashboard_109', $locale['dashboard_109']);
$templates->assign('lang_user_dashboard_110', $locale['dashboard_110']);
$templates->assign('lang_user_dashboard_111', $locale['dashboard_111']);
$templates->assign('lang_user_dashboard_112', $locale['dashboard_112']);

// Assign Others
$templates->assign('user_define_attachment_size', user_define_attachment_size());
$templates->assign('user_allocate_attachments_size', user_attachments_size());
$templates->assign('user_remaining_attachments_size', (107374182400-user_attachments_size()));
$templates->assign('user_attachments_count', user_attachments_count());
$templates->assign('user_attachments_views', user_attachments_views());

// Dashboard Links
$templates->assign('link_user_dashboard', BASEDIR.'dashboard.php');
$templates->assign('link_user_reports', BASEDIR.'dashboard.php?route=reports');
$templates->assign('link_user_file_manager', BASEDIR.'dashboard.php?route=file_manager');

if(!isset($_GET['route'])){
	$templates->assign('navigation_user_dashboard', 'active');
}else if(isset($_GET['route']) && $_GET['route']=='reports'){
	$templates->assign('navigation_user_reports', 'active');
}else if(isset($_GET['route']) && $_GET['route']=='file_manager'){
	// Load Language
	include_once LOCALESET.'file_manager.php';

	// Assign FileManager Locale
	$templates->assign('lang_file_manager_100', $locale['file_manager_100']);
	$templates->assign('lang_file_manager_101', $locale['file_manager_101']);
	$templates->assign('lang_file_manager_102', $locale['file_manager_102']);
	$templates->assign('lang_file_manager_103', $locale['file_manager_103']);
	$templates->assign('lang_file_manager_104', $locale['file_manager_104']);
	$templates->assign('lang_file_manager_105', $locale['file_manager_105']);
	$templates->assign('lang_file_manager_106', $locale['file_manager_106']);
	$templates->assign('lang_file_manager_107', $locale['file_manager_107']);
	$templates->assign('lang_file_manager_108', $locale['file_manager_108']);
	$templates->assign('lang_file_manager_109', $locale['file_manager_109']);
	$templates->assign('lang_file_manager_110', $locale['file_manager_110']);
	$templates->assign('lang_file_manager_111', $locale['file_manager_111']);
	$templates->assign('lang_file_manager_112', $locale['file_manager_112']);
	$templates->assign('lang_file_manager_113', $locale['file_manager_113']);
	$templates->assign('lang_file_manager_114', $locale['file_manager_114']);
	$templates->assign('lang_file_manager_115', $locale['file_manager_115']);
	$templates->assign('lang_file_manager_116', $locale['file_manager_116']);
	$templates->assign('lang_file_manager_117', $locale['file_manager_117']);
	$templates->assign('lang_file_manager_118', $locale['file_manager_118']);
	$templates->assign('lang_file_manager_119', $locale['file_manager_119']);
	$templates->assign('lang_file_manager_120', $locale['file_manager_120']);

	// Assign Others
	$templates->assign('navigation_user_file_manager', 'active');
	$templates->assign('img_attachments_types', IMAGES_TYPES);
	$templates->assign('download_link', BASEDIR.'download.php?url=');

	if(isset($_POST['create_folder'])){
		// Insert new user folder in DB
		$user_attachments=$database->insert(DB_PREFIX.'attachments_folders', ["attachment_folder_name"=>secure_itext($_POST['attachment_folder_name']), "attachment_folder_step"=>$_GET['folder_name'], "attachment_folder_user"=>$userdata['user_id'], "#attachment_folder_time"=>"UNIX_TIMESTAMP()"]);	
	}

	// Assign Links
	if(isset($_GET['folder_name'])){
		$user_attachments=$database->select('attachments', ['[>]attachments_exts'=>['attachment_ext'=>'attachment_ext_id']], '*', ["AND"=>["attachment_user"=>$userdata['user_id'], "attachment_folder"=>$_GET['folder_name']]]);
	}else{
		$user_attachments=$database->select('attachments', ['[>]attachments_exts'=>['attachment_ext'=>'attachment_ext_id']], '*', ["attachment_user"=>$userdata['user_id']]);
	}
	$templates->assign('user_attachments', $user_attachments);

	// Controller for Folders
	if(isset($_GET['folder_name'])){
		$user_attachments_folders=$database->select('attachments_folders', '*', ["AND"=>["attachment_folder_user"=>$userdata['user_id'], "attachment_folder_step"=>$_GET['folder_name']]]);
	}else{
		$user_attachments_folders=$database->select('attachments_folders', '*', ["AND"=>["attachment_folder_user"=>$userdata['user_id'], "attachment_folder_step"=>NULL]]);
	}
	$templates->assign('user_attachments_folders', $user_attachments_folders);

	// Create Zip files
	//var_dump($_POST['checkbox_attachments']);

	// UP one level
	if(isset($_GET['folder_name'])){
		$up_one_level=$database->get(DB_PREFIX.'attachments_folders', ['attachment_folder_id', 'attachment_folder_step'], ["attachment_folder_id"=>$_GET['folder_name']]);
		if($up_one_level['attachment_folder_step']==NULL){
			$templates->assign('up_one_level', BASEDIR.'dashboard.php?route=file_manager');
		}else{
			$templates->assign('up_one_level', BASEDIR.'dashboard.php?route=file_manager&folder_name='.$up_one_level['attachment_folder_step']);
		}
	}

	$templates->display('extends:create_folder.tpl'); 
}

// Render Dashboard
$templates->display('dashboard.tpl');

require_once BASEDIR.'footer.php';
?>