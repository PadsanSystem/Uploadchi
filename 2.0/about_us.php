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

// Load Language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'about_us.php';

// Assign Locale
$templates->assign('lang_commons_108', $locale['commons_108']);
$templates->assign('lang_about_us_100', $locale['about_us_100']);
$templates->assign('lang_about_us_102', $locale['about_us_102']);
$templates->assign('lang_about_us_103', $locale['about_us_103']);
$templates->assign('lang_about_us_104', $locale['about_us_104']);
$templates->assign('lang_about_us_105', $locale['about_us_105']);
$templates->assign('lang_about_us_106', $locale['about_us_106']);
$templates->assign('lang_about_us_107', $locale['about_us_107']);
$templates->assign('lang_about_us_108', $locale['about_us_108']);
$templates->assign('lang_about_us_109', $locale['about_us_109']);
$templates->assign('lang_about_us_110', $locale['about_us_110']);
$templates->assign('lang_about_us_111', $locale['about_us_111']);
$templates->assign('lang_about_us_112', $locale['about_us_112']);
$templates->assign('lang_about_us_113', $locale['about_us_113']);
$templates->assign('lang_about_us_114', $locale['about_us_114']);

// Assign Images
$templates->assign('img_facebook', IMAGES.'facebook.png');
$templates->assign('img_twitter', IMAGES.'twitter.png');
$templates->assign('img_google', IMAGES.'google.png');
$templates->assign('img_linkedin', IMAGES.'linkedin.png');
$templates->assign('img_location_about_us', IMAGES.'location_corporation.jpg');

// Render About Us
$templates->display('about_us.tpl');

require_once BASEDIR.'footer.php';
?>