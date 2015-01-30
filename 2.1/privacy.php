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

// Load language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'privacy.php';

// Assign Global Locale
$templates->assign('lang_commons_117', $locale['commons_117']);
$templates->assign('lang_privacy_100', $locale['privacy_100']);
$templates->assign('lang_privacy_101', $locale['privacy_101']);
$templates->assign('lang_privacy_102', $locale['privacy_102']);
$templates->assign('lang_privacy_103', $locale['privacy_103']);
$templates->assign('lang_privacy_104', $locale['privacy_104']);
$templates->assign('lang_privacy_105', $locale['privacy_105']);
$templates->assign('lang_privacy_106', $locale['privacy_106']);
$templates->assign('lang_privacy_107', $locale['privacy_107']);

// Render Privacy
$templates->display('privacy.tpl');

require_once BASEDIR.'footer.php';
?>