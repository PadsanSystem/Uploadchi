<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-20 10:52:42
         compiled from "templates\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1974154bd362c49d9e4-72321764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5580d09fd83a41b886fc605d7c785beaf203714a' => 
    array (
      0 => 'templates\\default\\footer.tpl',
      1 => 1421747534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1974154bd362c49d9e4-72321764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bd362c5e9913_10773755',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bd362c5e9913_10773755')) {function content_54bd362c5e9913_10773755($_smarty_tpl) {?><div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h5 class="text-muted text-center">
					<small><a href="http://blog.uploadchi.com" title="<?php echo $_smarty_tpl->tpl_vars['lang_footer_101']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_footer_101']->value;?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['link_privacy']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_footer_102']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_footer_102']->value;?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://blog.uploadchi.com" title="<?php echo $_smarty_tpl->tpl_vars['lang_footer_103']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_footer_103']->value;?>
</a></small>
				</h5>
				<p class="text-muted text-center"><small><?php echo $_smarty_tpl->tpl_vars['lang_copyright']->value;?>
</small></p>
				<?php if (($_smarty_tpl->tpl_vars['iADMIN']->value)) {?>
					<p class="text-muted text-center">
						<small><b><?php echo $_smarty_tpl->tpl_vars['lang_memory_usage']->value;?>
</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['memory_usage']->value;?>
&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang_render_time']->value;?>
</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['render_time']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_seconds']->value;?>
</small>
					</p>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/JavaScript">
	function callback(){
		if(req.readyState == 4){
			if(req.status == 200){
				eval(req.responseText);
			}
		}
	};
	var req=new XMLHttpRequest();
	req.onload=callback;
	req.open("get", "<?php echo $_smarty_tpl->tpl_vars['jscript']->value;?>
", true);
	req.send();
<?php echo '</script'; ?>
><?php }} ?>
