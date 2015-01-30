<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-30 14:04:04
         compiled from "templates\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:852354caae9f2cb3b1-28352042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa919187c1fe52a8f1fd2a120f1a77a2edea863e' => 
    array (
      0 => 'templates\\default\\footer.tpl',
      1 => 1422623044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '852354caae9f2cb3b1-28352042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54caae9f318957_86287840',
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
<?php if ($_valid && !is_callable('content_54caae9f318957_86287840')) {function content_54caae9f318957_86287840($_smarty_tpl) {?><div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h6 class="text-muted text-center">
					<small class="text-muted text-center"><a href="http://blog.uploadchi.com" title="<?php echo $_smarty_tpl->tpl_vars['lang_footer_101']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_footer_101']->value;?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['link_privacy']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_footer_102']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_footer_102']->value;?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://blog.uploadchi.com" title="<?php echo $_smarty_tpl->tpl_vars['lang_footer_103']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_footer_103']->value;?>
</a></small>
				</h6>
				<h6 class="text-muted text-center"><small><?php echo $_smarty_tpl->tpl_vars['lang_copyright']->value;?>
</small></h6>
				<?php if (($_smarty_tpl->tpl_vars['iADMIN']->value)) {?>
					<h6 class="text-muted text-center">
						<small><b><?php echo $_smarty_tpl->tpl_vars['lang_memory_usage']->value;?>
</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['memory_usage']->value;?>
&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['lang_render_time']->value;?>
</b>&nbsp;<?php echo $_smarty_tpl->tpl_vars['render_time']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_seconds']->value;?>
</small>
					</h6>
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
