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
require_once LOCALESET.'footer.php';

$templates->assign('memory_usage', $locale['commons_114'].parsebytesize(memory_get_usage(), 2));
$templates->assign('render_time', $locale['commons_115'].round($page_time_start-$$page_time_end, 5).$locale['commons_116']);
$templates->assign('copyright', $locale['commons_116']);
$templates->assign('lang_footer_101', $locale['footer_101']);
$templates->assign('lang_footer_100', $locale['lang_footer_100']);

// Render
$templates->display('footer.tpl');
?>

<script type="text/JavaScript">
	function callback(){
		if(req.readyState == 4){
			if(req.status == 200){
				eval(req.responseText);
			} else {
				// Error
			}
		}
	};
	var req = new XMLHttpRequest();
	req.onload = callback;
	req.open("get", "<?php echo JAVASCRIPTS.'cjscript.min.js'; ?>", true);
	req.send();
</script>
<?php
$page_time_end=microtime();
?>