<?php
/*
|-------------------------------|
| PadsanCMS						|
|-------------------------------|
| UploadCenter Version v2.0		|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
require_once 'subheader.php';

// Prevent view from Guests
if(!iMEMBER){redirect(BASEDIR.'index.php');}

// Load Language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'edit_profile.php';

if(isset($_POST['submit'])){
	$user_name=secure_itext($_POST['name']);
	$user_family=secure_itext($_POST['family']);
	$user_password=secure_itext($_POST['password']);
	
	if($user_password=='')
		$user_password=$userdata['user_password'];
	else
		$user_password=md5(md5($user_password));

	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$error=104;
	else
		$user_email=strtolower($_POST['email']);
	
	// Check this
	// if($database->has(DB_PREFIX.'users', ['user_email[!]'=>$user_email]))
		// $error=109;
	
	// Get string
	$string=$_FILES['avatar'];
	
	if(is_uploaded_file($string['tmp_name'])){
		// Get type file
		$type=get_type($string, 'file');
		if(!in_array($type, array('jpg', 'png', 'gif')))
			$error=100;
			
		// Get size file
		if(get_size($string, 'file')>5242880)
			$error=105;
		
		if(!isset($error)){
			$random_name=random_text('number');
			$user_avatar=$random_name.'.'.$type;
			move_uploaded_file($string['tmp_name'], AVATARS.$user_avatar);
			
			// Load Class Image Resizer
			include CLASSES."imageresizer.php";
			
			// Size s1
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(19, 19, 'exact');
			$avatar_create->saveImage(AVATARS.$random_name.'_1.'.$type, 100);
			
			// Size s2
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(95, 59, 'exact');
			$avatar_create->saveImage(AVATARS.$random_name.'_2.'.$type, 90);
			
			// Size s3
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(170, 99, 'exact');
			$avatar_create->saveImage(AVATARS.$random_name.'_3.'.$type, 90);
			
			if(file_exists(AVATARS.$userdata['user_avatar']) && $userdata['user_avatar']!=NULL)
				remove_avatars($userdata['user_avatar']);
		}
	}else{
		$user_avatar=$userdata['user_avatar'];
	}

	if(!isset($error)){
		$database->update(DB_PREFIX.'users', ['user_name'=>$user_name, 'user_family'=>$user_family, 'user_password'=>$user_password, 'user_email'=>$user_email, 'user_avatar'=>$user_avatar, '#user_time_visit'=>'UNIX_TIMESTAMP()'], ['user_id'=>$userdata['user_id']]);
		redirect(BASEDIR.'edit_profile.php?route=update_profile');
	}else{
		// Load Language
		include_once LOCALESET.'errors.php';
		
		$error_string=show_error($error, 'errors');
		$error_message=$locale["$error_string"];
		
		// Assign Alert Message
		$templates->assign('lang_errors_123', $locale['errors_123']);
		$templates->assign('lang_error_message', $error_message);
		$templates->assign('error_number', $error);
	}
}

if(isset($_GET['route']) && ($_GET['route']=='update_profile'))
	// Assign Alert Message
	$templates->assign('lang_alert_message', $locale['edit_profile_112']);

if(isset($_GET['route']) && ($_GET['route']=='remove_avatar') && !isset($_GET['action'])){
	if(file_exists(AVATARS.$userdata['user_avatar'])){
		$database->update(DB_PREFIX.'users', ['user_avatar'=>NULL], ['user_id'=>$userdata['user_id']]);
		remove_avatars($userdata['user_avatar']);
		redirect(BASEDIR.'edit_profile.php?route=remove_avatar&action=removed');
	}
}
if(isset($_GET['route']) && $_GET['route']=='remove_avatar' && isset($_GET['action']) && $_GET['action']=='removed'){
	// Assign Alert Message
	$templates->assign('lang_alert_message', $locale['edit_profile_116']);
}

// Assign Locale
$templates->assign('lang_edit_profile_100', $locale['edit_profile_100']);
$templates->assign('lang_edit_profile_101', $locale['edit_profile_101']);
$templates->assign('lang_edit_profile_102', $locale['edit_profile_102']);
$templates->assign('lang_edit_profile_103', $locale['edit_profile_103']);
$templates->assign('lang_edit_profile_104', $locale['edit_profile_104']);
$templates->assign('lang_edit_profile_105', $locale['edit_profile_105']);
$templates->assign('lang_edit_profile_107', $locale['edit_profile_107']);
$templates->assign('lang_edit_profile_108', $locale['edit_profile_108']);
$templates->assign('lang_edit_profile_109', $locale['edit_profile_109']);
$templates->assign('lang_edit_profile_110', $locale['edit_profile_110']);
$templates->assign('lang_edit_profile_111', $locale['edit_profile_111']);
$templates->assign('lang_edit_profile_113', $locale['edit_profile_113']);
$templates->assign('lang_edit_profile_114', $locale['edit_profile_114']);
$templates->assign('lang_edit_profile_115', $locale['edit_profile_115']);
$templates->assign('lang_edit_profile_116', $locale['edit_profile_116']);

// Render Edit Profile
$templates->display('edit_profile.tpl');

require_once BASEDIR.'footer.php';
?>