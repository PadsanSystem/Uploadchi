<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 23:34:13
         compiled from "templates\default\local_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243854c2cc65620999-11413868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24c81e219940e9d26e43596d9bc0aebb536a47e9' => 
    array (
      0 => 'templates\\default\\local_upload.tpl',
      1 => 1421971665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243854c2cc65620999-11413868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_upload_103' => 0,
    'link_upload' => 0,
    'lang_upload_107' => 0,
    'lang_upload_108' => 0,
    'lang_upload_105' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c2cc6565f383_90165435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c2cc6565f383_90165435')) {function content_54c2cc6565f383_90165435($_smarty_tpl) {?><?php if ('iMEMBER') {?>
	<form name="form_<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
" class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_upload']->value;?>
" enctype="multipart/form-data">
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
				  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
				  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><?php echo $_smarty_tpl->tpl_vars['lang_upload_107']->value;?>
</span><span class="fileinput-exists"><?php echo $_smarty_tpl->tpl_vars['lang_upload_108']->value;?>
</span><input type="file" name="<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
"></span>
				</div>
				<br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-4 col-lg-offset-4 text-center">
				<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_105']->value;?>
</button>
			</div>
		</div>
	</form>
<?php } else { ?>
	<form name="form_<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
" class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_upload']->value;?>
" enctype="multipart/form-data">
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
				  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
				  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><?php echo $_smarty_tpl->tpl_vars['lang_upload_107']->value;?>
</span><span class="fileinput-exists"><?php echo $_smarty_tpl->tpl_vars['lang_upload_108']->value;?>
</span><input type="file" name="<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
"></span>
				</div>
				<br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-4 col-lg-offset-4 text-center">
				<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_105']->value;?>
</button>
			</div>
		</div>
	</form>
<?php }?><?php }} ?>
