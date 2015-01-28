<?php /*%%SmartyHeaderCode:1684254c2cbf529ae07-75542374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5580d09fd83a41b886fc605d7c785beaf203714a' => 
    array (
      0 => 'templates\\default\\footer.tpl',
      1 => 1422052498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684254c2cbf529ae07-75542374',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c2cc93ead1f9_48910760',
  'variables' => 
  array (
    'lang_footer_101' => 0,
    'link_privacy' => 0,
    'lang_footer_102' => 0,
    'lang_footer_103' => 0,
    'lang_copyright' => 0,
    'iADMIN' => 0,
    'lang_memory_usage' => 0,
    'memory_usage' => 0,
    'lang_render_time' => 0,
    'render_time' => 0,
    'lang_seconds' => 0,
    'jscript' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c2cc93ead1f9_48910760')) {function content_54c2cc93ead1f9_48910760($_smarty_tpl) {?><div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h5 class="text-muted text-center">
					<small><a href="http://blog.uploadchi.com" title="Blog">Blog</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="privacy.php" title="Privacy">Privacy</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://blog.uploadchi.com" title="Our Networks">Our Networks</a></small>
				</h5>
				<p class="text-muted text-center"><small>Copyright &copy; 2011-2015 Uploadchi.com. All Rights Reserved</small></p>
							</div>
		</div>
	</div>
</div>
<script type="text/JavaScript">
	function callback(){
		if(req.readyState == 4){
			if(req.status == 200){
				eval(req.responseText);
			}
		}
	};
	var req=new XMLHttpRequest();
	req.onload=callback;
	req.open("get", "statics/cjscript.min.js", true);
	req.send();
</script><?php }} ?>
