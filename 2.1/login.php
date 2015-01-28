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

// Load language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'login.php';

if(isset($_POST['login'])){
	$username=strtolower(secure_itext($_POST['username']));
	$password=md5(md5(secure_itext($_POST['password'])));
	$remember=isNum($_POST['remember']) ? $_POST['remember'] : 0;
	$result_login=$database->get("users", ["user_id", "user_username", "user_password"], ["AND"=>["user_username"=>$username, "user_password"=>$password, 'user_status'=>'Enable']]);
	
	if($result_login==false){
		// Load language
		include_once LOCALESET.'errors.php';
		
		$error=120;
		$error_string=show_error($error, 'errors');
		$error_message=$locale["$error_string"];
		
		// Assign Alert Message
		$templates->assign('lang_errors_123', $locale['errors_123']);
		$templates->assign('error_number', $error);
		$templates->assign('lang_error_message', $error_message);
	}else{
		$expired=time()+604800;
		
		if($remember==1){
			setcookie("user_id", $result_login['user_id'], $expired, "/", "", true, true);
		}else{
			$_SESSION['user_id']=$result_login['user_id'];
		}
		$userdata=$result_login;
		redirect(BASEDIR.'index.php');
	}
}

// Assign Locale
$templates->assign('lang_login_100', $locale['login_100']);
$templates->assign('lang_login_101', $locale['login_101']);
$templates->assign('lang_login_102', $locale['login_102']);
$templates->assign('lang_login_103', $locale['login_103']);
$templates->assign('lang_login_104', $locale['login_104']);
$templates->assign('lang_login_105', $locale['login_105']);
$templates->assign('lang_login_106', $locale['login_106']);

// Render Login
$templates->display('login.tpl');

require_once BASEDIR.'footer.php';
?>