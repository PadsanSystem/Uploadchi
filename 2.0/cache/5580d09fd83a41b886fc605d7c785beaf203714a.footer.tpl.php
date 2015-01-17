<?php /*%%SmartyHeaderCode:855854ba67466d36d6-91976336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5580d09fd83a41b886fc605d7c785beaf203714a' => 
    array (
      0 => 'templates\\default\\footer.tpl',
      1 => 1421499741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855854ba67466d36d6-91976336',
  'variables' => 
  array (
    'lang_footer_101' => 0,
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
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ba6746712e42_87303226',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ba6746712e42_87303226')) {function content_54ba6746712e42_87303226($_smarty_tpl) {?><div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h5 class="text-muted text-center">
					<small><a href="http://blog.uploadchi.com" title="Blog">Blog</a></small>
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
	req.open("get", "includes/javascripts/cjscript.min.js", true);
	req.send();
</script><?php }} ?>
