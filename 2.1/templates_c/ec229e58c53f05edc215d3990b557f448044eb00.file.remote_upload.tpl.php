<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-29 23:05:19
         compiled from "templates\default\remote_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:873054caae9f2a1cc9-53719743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec229e58c53f05edc215d3990b557f448044eb00' => 
    array (
      0 => 'templates\\default\\remote_upload.tpl',
      1 => 1421871164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '873054caae9f2a1cc9-53719743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_upload_104' => 0,
    'link_upload' => 0,
    'lang_upload_106' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54caae9f2b58f9_60098654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54caae9f2b58f9_60098654')) {function content_54caae9f2b58f9_60098654($_smarty_tpl) {?><form name="form_<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
" class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_upload']->value;?>
">
	<div class="form-group">
		<div class="col-lg-8 col-lg-offset-2 text-center">
			<div class="input-group">
				<input name="<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
" type="text" class="form-control">
				<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
			</div>
			<br>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-4 col-lg-offset-4 text-center">
			<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_106']->value;?>
</button>
		</div>
	</div>
</form><?php }} ?>
