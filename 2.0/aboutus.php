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
include_once LOCALESET.'aboutus.php';

// Assign Locale
$templates->assign('lang_commons_108', $locale['commons_108']);
$templates->assign('lang_aboutus_100', $locale['aboutus_100']);
$templates->assign('lang_aboutus_101', $locale['aboutus_101']);
$templates->assign('lang_aboutus_102', $locale['aboutus_102']);
$templates->assign('lang_aboutus_103', $locale['aboutus_103']);
$templates->assign('lang_aboutus_104', $locale['aboutus_104']);
$templates->assign('lang_aboutus_105', $locale['aboutus_105']);
$templates->assign('lang_aboutus_106', $locale['aboutus_106']);
$templates->assign('lang_aboutus_107', $locale['aboutus_107']);
$templates->assign('lang_aboutus_108', $locale['aboutus_108']);
$templates->assign('lang_aboutus_109', $locale['aboutus_109']);
$templates->assign('lang_aboutus_110', $locale['aboutus_110']);
$templates->assign('lang_aboutus_111', $locale['aboutus_111']);
$templates->assign('lang_aboutus_112', $locale['aboutus_112']);
$templates->assign('lang_aboutus_113', $locale['aboutus_113']);
$templates->assign('lang_aboutus_114', $locale['aboutus_114']);

// Assign Images
$templates->assign('img_facebook', IMAGES.'facebook.png');
$templates->assign('img_twitter', IMAGES.'twitter.png');
$templates->assign('img_google', IMAGES.'google.png');
$templates->assign('img_linkedin', IMAGES.'linkedin.png');
$templates->assign('img_location_aboutus', IMAGES.'location_corporation.jpg');

// Render About Us
$templates->display('aboutus.tpl');

require_once BASEDIR.'footer.php';
?>