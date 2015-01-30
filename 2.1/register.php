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

// Prevent view from Members
if(iMEMBER){redirect(BASEDIR.'index.php');}

// Load Language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'register.php';

if(isset($_POST['submit'])){
	$user_username=secure_itext($_POST['username']);
	$user_password=md5(md5(secure_itext($_POST['password'])));
	$user_name=secure_itext($_POST['name']);
	$user_family=secure_itext($_POST['family']);
	$string=$_FILES['avatar'];
	
	if($database->has(DB_PREFIX.'users', ["user_username"=>$user_username]))
		$error=108;
	else if(!preg_match('/^[a-z\d_]{5,20}$/i', $user_username))
		$error=102;
	else
		$user_username=strtolower($user_username);
	
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$error=104;
	else
		$user_email=strtolower($_POST['email']);
	
	if($database->has(DB_PREFIX.'users', ["user_email"=>$user_email]))
		$error=109;
	
	if(is_uploaded_file($string['tmp_name'])){
		// Get type file
		if(!in_array(get_type($string, 'file'), array('jpg', 'png', 'gif')))
			$error=100;
			
		// Get size file
		if(get_size($string, 'file')>5242880)
			$error=105;
		
		// Verify images
		if(verify_image($string['tmp_name'])==false)
			$error=101;
	}
	
	if(isset($error)){
		// Load Language
		include_once LOCALESET.'errors.php';
		
		$error_string=show_error($error, 'errors');
		$error_message=$locale["$error_string"];
		
		// Assign Alert Message
		$templates->assign('user_username', $user_username);
		$templates->assign('user_name', $user_name);
		$templates->assign('user_family', $user_family);
		$templates->assign('user_email', $user_email);
		
		$templates->assign('lang_errors_123', $locale['errors_123']);
		$templates->assign('lang_error_message', $error_message);
		$templates->assign('error_number', $error);
	}else{
		if(is_uploaded_file($string['tmp_name'])){
			$user_avatar_name=random_text($type='number');
			$user_avatar_type=get_type($string);
			$user_avatar=$user_avatar_name.".".$user_avatar_type;
			
			// Upload AVATARS
			move_uploaded_file($string['tmp_name'], AVATARS.$user_avatar);
			
			// Load Class Image Resizer
			include CLASSES."imageresizer.php";
			
			// Size s1
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(19, 19, 'exact');
			$avatar_create->saveImage(AVATARS.$user_avatar_name.'_1.'.$user_avatar_type, 100);
			
			// Size s2
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(95, 59, 'exact');
			$avatar_create->saveImage(AVATARS.$user_avatar_name.'_2.'.$user_avatar_type, 90);
			
			// Size s3
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(170, 99, 'exact');
			$avatar_create->saveImage(AVATARS.$user_avatar_name.'_3.'.$user_avatar_type, 90);
		}
		
		// Insert User in DB
		$database->insert(DB_PREFIX.'users', ['user_username'=>$user_username, 'user_password'=>$user_password, 'user_name'=>$user_name, 'user_family'=>$user_family, 'user_email'=>$user_email,'user_avatar'=>$user_avatar, '#user_time_sign'=>'UNIX_TIMESTAMP()', '#user_time_visit'=>'UNIX_TIMESTAMP()', 'user_group'=>2, 'user_status'=>'Enable']);
		
		// Assign Alert Message
		$templates->assign('lang_alert_message', $locale['register_115']);
		$templates->assign('lang_register_116', $locale['register_116']);
	}
}

// Assign Locale
$templates->assign('lang_register_100', $locale['register_100']);
$templates->assign('lang_register_101', $locale['register_101']);
$templates->assign('lang_register_102', $locale['register_102']);
$templates->assign('lang_register_103', $locale['register_103']);
$templates->assign('lang_register_104', $locale['register_104']);
$templates->assign('lang_register_105', $locale['register_105']);
$templates->assign('lang_register_106', $locale['register_106']);
$templates->assign('lang_register_107', $locale['register_107']);
$templates->assign('lang_register_108', $locale['register_108']);
$templates->assign('lang_register_109', $locale['register_109']);
$templates->assign('lang_register_110', $locale['register_110']);
$templates->assign('lang_register_111', $locale['register_111']);
$templates->assign('lang_register_112', $locale['register_112']);
$templates->assign('lang_register_113', $locale['register_113']);
$templates->assign('lang_register_114', $locale['register_114']);

// Render Register
$templates->display('register.tpl');

require_once BASEDIR.'footer.php';
?>