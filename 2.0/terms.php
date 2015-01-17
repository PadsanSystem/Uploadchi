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

// Load language
require_once LOCALESET.'commons.php';
require_once LOCALESET.'terms.php';

// Assign Global Locale
$templates->assign('lang_commons_117', $locale['commons_117']);
$templates->assign('lang_commons_118', $locale['commons_118']);
$templates->assign('lang_terms_100', $locale['terms_100']);
$templates->assign('lang_terms_101', $locale['terms_101']);
$templates->assign('lang_terms_102', $locale['terms_102']);
$templates->assign('lang_terms_103', $locale['terms_103']);
$templates->assign('lang_terms_104', $locale['terms_104']);
$templates->assign('lang_terms_105', $locale['terms_105']);
$templates->assign('lang_terms_106', $locale['terms_106']);

// Render subheader
$templates->display('terms.tpl');

require_once BASEDIR.'footer.php';
?>