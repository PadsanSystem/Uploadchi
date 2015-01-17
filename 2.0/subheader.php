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
// Start Output Buffering
ob_start("ob_gzhandler");

// Start render time 
$page_time_start=microtime();

// Start session
session_start();

// Load kernel
require_once 'maincore.php';

// Load language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'login.php';

// Assign Global Settings
$templates->assign('settings_description', $settings['setting_description']);
$templates->assign('settings_keywords', $settings['setting_keywords']);
$templates->assign('settings_title', $settings['setting_title']);
$templates->assign('settings_author', 'PadsanSystem Corporation');
$templates->assign('settings_css', THEMES_CSS.'cstyles.min.css');

// Assign Global Others
$templates->assign('user_avatar', exists_avatars()==true ? show_avatars(2) : AVATARS.'noavatar_small.png');
$templates->assign('visit_page', $visit_page);

// Assign Global Locale
$templates->assign('lang_commons_108', $locale['commons_108']);
$templates->assign('lang_commons_109', $locale['commons_109']);
$templates->assign('lang_commons_110', $locale['commons_110']);
$templates->assign('lang_commons_111', $locale['commons_111']);
$templates->assign('lang_commons_112', $locale['commons_112']);

// Assign Global Links
$templates->assign('link_home', BASEDIR.'index.php');
$templates->assign('link_terms', BASEDIR.'terms.php');
$templates->assign('link_statistics', BASEDIR.'statistics.php');
$templates->assign('link_aboutus', BASEDIR.'aboutus.php');
$templates->assign('link_contactus', BASEDIR.'contactus.php');

// Member members
if(iMEMBER){
	// Assign Others
	$templates->assign('iMEMBER', iMEMBER);
	$templates->assign('user_username', $userdata['user_username']);
	$templates->assign('user_name', $userdata['user_family']);
	$templates->assign('user_family', $userdata['user_name']);
	$templates->assign('user_avatar_4', show_avatars(4));
	
	// Assign Links
	$templates->assign('link_logout', BASEDIR.'index.php?logout=yes');
	$templates->assign('link_dashboard', BASEDIR.'dashboard.php');
	$templates->assign('link_edit_profile', BASEDIR.'edit_profile.php');
	
	// Assign Locale
	$templates->assign('lang_commons_102', $locale['commons_102']);
	$templates->assign('lang_commons_106', $locale['commons_106']);
	$templates->assign('lang_commons_107', $locale['commons_107']);
	$templates->assign('lang_commons_113', $locale['commons_113']);
}

// Admin members
if(iADMIN){
	// Assign Others
	$templates->assign('iADMIN', iADMIN);
	
	// Assign Links
	$templates->assign('link_admin', ADMIN.'index.php'.$aidlink);
	
	// Assign Locale
	$templates->assign('lang_commons_105', $locale['commons_105']);
}

// Guest members
if(iGUEST){
	// Assign Links
	$templates->assign('link_login', BASEDIR.'login.php');
	$templates->assign('link_register', BASEDIR.'register.php');
	
	// Assign Locale
	$templates->assign('lang_commons_101', $locale['commons_101']);
	$templates->assign('lang_commons_103', $locale['commons_103']);
	$templates->assign('lang_commons_104', $locale['commons_104']);
}

// Render Subheader
$templates->display('subheader.tpl');
?>