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
// Load language
include_once LOCALESET.'footer.php';

$get_js=array(
	STATICS.'jquery/jquery.min.js',
	STATICS.'jquery-ui/js/jquery-ui.min.js',
	STATICS.'bootstrap/js/bootstrap.min.js',
	STATICS.'bootstrap-jasny/js/inputmask.min.js',
	STATICS.'bootstrap-jasny/js/jasny-bootstrap.min.js',
	STATICS.'bootstrap-datatables/js/jquery.datatables.min.js',
	STATICS.'bootstrap-datatables/js/datatables.bootstrap.min.js',
	STATICS.'others/others.min.js',
	STATICS.'google/google_analytics.min.js'
);

//compress_file($get_js, 'js');

// Assign Javascript
$templates->assign('jscript', STATICS.'cjscript.min.js');

// Assign Links
$templates->assign('link_privacy', BASEDIR.'privacy.php');

// Asign Global Locale
$templates->assign('lang_copyright', $locale['footer_100']);
$templates->assign('lang_footer_101', $locale['footer_101']);
$templates->assign('lang_footer_102', $locale['footer_102']);
$templates->assign('lang_footer_103', $locale['footer_103']);

if(iADMIN){
	// Assign Others
	$templates->assign('memory_usage', parsebytesize(memory_get_usage(), 2));
	$templates->assign('render_time', round($page_time_start-$page_time_end, 5));
	
	// Assign Locale
	$templates->assign('lang_seconds', $locale['commons_116']);
	$templates->assign('lang_memory_usage', $locale['commons_114']);
	$templates->assign('lang_render_time', $locale['commons_115']);
}

// End render time 
$page_time_end=microtime();

// Render
$templates->display('footer.tpl');
?>