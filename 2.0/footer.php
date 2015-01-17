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

// Assign Global Settings
$templates->assign('jscript', JAVASCRIPTS.'cjscript.min.js');

// Asign Global Locale
$templates->assign('lang_copyright', $locale['footer_100']);
$templates->assign('lang_footer_101', $locale['footer_101']);

if(iADMIN){
	// Assign Others
	$templates->assign('memory_usage', parsebytesize(memory_get_usage(), 2));
	$templates->assign('render_time', round($page_time_start-$page_time_end, 5));
	
	// Assign Locale
	$templates->assign('lang_seconds', $locale['commons_116']);
	$templates->assign('lang_memory_usage', $locale['commons_114']);
	$templates->assign('lang_render_time', $locale['commons_115']);
}
// Render
$templates->display('footer.tpl');

// End render time 
$page_time_end=microtime();
?>