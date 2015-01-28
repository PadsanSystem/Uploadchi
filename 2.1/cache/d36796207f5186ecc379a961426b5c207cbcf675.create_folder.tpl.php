<?php /*%%SmartyHeaderCode:1618754c2cbf9968709-32781344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36796207f5186ecc379a961426b5c207cbcf675' => 
    array (
      0 => 'templates\\default\\create_folder.tpl',
      1 => 1422050613,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1618754c2cbf9968709-32781344',
  'variables' => 
  array (
    'lang_file_manager_100' => 0,
    'lang_file_manager_118' => 0,
    'lang_file_manager_117' => 0,
    'lang_file_manager_119' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c2cbf99c9354_71129935',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c2cbf99c9354_71129935')) {function content_54c2cbf99c9354_71129935($_smarty_tpl) {?><div id="create_folder" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">
				<span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Create Folder
				</h4>
			</div>
			<form class="form-vertical" role="form" method="post">
				<div class="modal-body">
					<div class="form-group col-lg-7">
						<label for="attachment_folder_name" class="control-label">Folder name}</label><br>
						<input id="attachment_folder_name" name="attachment_folder_name" type="text" class="form-control" placeholder="Enter folder name" >
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
