<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-19 19:04:50
         compiled from "templates\default\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3181554bd4742e5b919-41434345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a4a16f530a5661967974537e4391687cc0c246' => 
    array (
      0 => 'templates\\default\\upload.tpl',
      1 => 1421529162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3181554bd4742e5b919-41434345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_number' => 0,
    'lang_errors_123' => 0,
    'lang_error_message' => 0,
    'link_home' => 0,
    'lang_errors_122' => 0,
    'lang_upload_100' => 0,
    'download_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bd4742ebc7f1_84956794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bd4742ebc7f1_84956794')) {function content_54bd4742ebc7f1_84956794($_smarty_tpl) {?><div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['error_number']->value)) {?>
		<div class="alert alert-danger" role="alert">
			<p class="text-danger"><b><?php echo $_smarty_tpl->tpl_vars['lang_errors_123']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['error_number']->value;?>
</b></p>
			<?php echo $_smarty_tpl->tpl_vars['lang_error_message']->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_errors_122']->value;?>
</a>
		</div>
	<?php } else { ?>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_100']->value;?>
</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="input-group">
						<input name="download_url" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['download_url']->value;?>
">
						<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
</div><?php }} ?>
