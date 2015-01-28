<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 19:26:30
         compiled from "templates\default\create_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2164754c29256c4b135-83566804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '2164754c29256c4b135-83566804',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c29256c523f3_76946109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c29256c523f3_76946109')) {function content_54c29256c523f3_76946109($_smarty_tpl) {?><div id="create_folder" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Create Folder</h4>
			</div>
			<form class="form-vertical" role="form" method="post">
				<div class="modal-body">
					<div class="form-group col-lg-7">
						<label for="attachment_folder_name" class="control-label">Folder Name</label><br>
						<input id="attachment_folder_name" name="attachment_folder_name" type="text" class="form-control" placeholder="Enter folder name">
					</div>
					<br><br><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button name="create_folder" type="submit" class="btn btn-primary">Create Folder</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
