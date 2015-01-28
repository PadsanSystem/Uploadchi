<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-21 21:13:05
         compiled from "templates\default\remote_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214754c0078d0b6129-65309415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12cd62a0cced778f0d90230a475b5237520ff744' => 
    array (
      0 => 'templates\\default\\remote_upload.tpl',
      1 => 1421871164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214754c0078d0b6129-65309415',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c0078d0b9691_13686333',
  'variables' => 
  array (
    'lang_upload_104' => 0,
    'link_upload' => 0,
    'lang_upload_106' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c0078d0b9691_13686333')) {function content_54c0078d0b9691_13686333($_smarty_tpl) {?><form name="form_<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
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
