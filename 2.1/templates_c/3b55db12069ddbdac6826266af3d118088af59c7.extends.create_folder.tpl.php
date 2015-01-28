<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-28 08:53:12
         compiled from "templates\default\create_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1619854c895684877d4-14714444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '1619854c895684877d4-14714444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_file_manager_100' => 0,
    'lang_file_manager_118' => 0,
    'lang_file_manager_117' => 0,
    'lang_file_manager_119' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c895684c76e0_52295593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c895684c76e0_52295593')) {function content_54c895684c76e0_52295593($_smarty_tpl) {?><div id="create_folder" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">
				<span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_100']->value;?>

				</h4>
			</div>
			<form class="form-vertical" role="form" method="post">
				<div class="modal-body">
					<div class="form-group col-lg-7">
						<label for="attachment_folder_name" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_118']->value;?>
}</label><br>
						<input id="attachment_folder_name" name="attachment_folder_name" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_117']->value;?>
" >
					</div>
					<br><br><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_119']->value;?>
</button>
					<button name="create_folder" type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_100']->value;?>
</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
