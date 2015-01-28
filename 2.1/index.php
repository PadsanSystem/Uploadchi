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

// Load Language
include_once LOCALESET.'upload.php';

// Assign Locale
$templates->assign('lang_commons_120', $locale['commons_120']);
$templates->assign('lang_commons_121', $locale['commons_121']);
$templates->assign('lang_commons_122', $locale['commons_122']);
$templates->assign('lang_commons_123', $locale['commons_123']);
$templates->assign('lang_commons_124', $locale['commons_124']);
$templates->assign('lang_commons_125', $locale['commons_125']);
$templates->assign('lang_commons_126', $locale['commons_126']);
$templates->assign('lang_commons_127', $locale['commons_127']);
$templates->assign('lang_upload_101', $locale['upload_101']);
$templates->assign('lang_upload_102', $locale['upload_102']);
$templates->assign('lang_upload_103', $locale['upload_103']);
$templates->assign('lang_upload_104', $locale['upload_104']);
$templates->assign('lang_upload_105', $locale['upload_105']);
$templates->assign('lang_upload_106', $locale['upload_106']);
$templates->assign('lang_upload_107', $locale['upload_107']);
$templates->assign('lang_upload_108', $locale['upload_108']);

// Assign Images
$templates->assign('img_banners', IMAGES.'banners.png');

// Assign Links
$templates->assign('link_upload', BASEDIR.'upload.php');

// Render Index
$templates->display('index.tpl');

require_once BASEDIR.'footer.php';
?>