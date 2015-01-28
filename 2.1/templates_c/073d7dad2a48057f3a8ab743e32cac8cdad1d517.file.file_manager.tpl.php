<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 23:26:54
         compiled from "templates\default\file_manager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3168654c007959dbfe1-43470884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '073d7dad2a48057f3a8ab743e32cac8cdad1d517' => 
    array (
      0 => 'templates\\default\\file_manager.tpl',
      1 => 1422052013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3168654c007959dbfe1-43470884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c007959feec2_27969580',
  'variables' => 
  array (
    'lang_commons_108' => 0,
    'lang_file_manager_100' => 0,
    'lang_file_manager_101' => 0,
    'lang_file_manager_102' => 0,
    'lang_file_manager_103' => 0,
    'lang_file_manager_104' => 0,
    'lang_file_manager_105' => 0,
    'lang_file_manager_106' => 0,
    'lang_file_manager_107' => 0,
    'lang_file_manager_108' => 0,
    'up_one_level' => 0,
    'lang_file_manager_115' => 0,
    'lang_commons_119' => 0,
    'lang_file_manager_110' => 0,
    'lang_file_manager_111' => 0,
    'lang_file_manager_112' => 0,
    'lang_file_manager_113' => 0,
    'user_attachments_folders' => 0,
    'link_user_dashboard' => 0,
    'data_user_attachments_folders' => 0,
    'lang_file_manager_116' => 0,
    'user_attachments' => 0,
    'data_user_attachments' => 0,
    'download_link' => 0,
    'img_attachments_types' => 0,
    'lang_file_manager_120' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c007959feec2_27969580')) {function content_54c007959feec2_27969580($_smarty_tpl) {?><div class="well well-sm">
	<div class="btn-group">
		<button type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
</button>
		<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" data-toggle="modal" data-target="#create_folder"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_100']->value;?>
</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-open-file"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_101']->value;?>
</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-duplicate"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_102']->value;?>
</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-paste"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_103']->value;?>
</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_104']->value;?>
</a></li>
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-share"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_105']->value;?>
</button>
		<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_106']->value;?>
</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-compressed"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_107']->value;?>
</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_108']->value;?>
</a></li>
		</ul>
	</div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['up_one_level']->value)) {?>
<ol class="breadcrumb">
	<li><small><a href="<?php echo $_smarty_tpl->tpl_vars['up_one_level']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_115']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_115']->value;?>
</a></small></li>
	<li class="active"><?php echo $_smarty_tpl->tpl_vars['lang_commons_119']->value;?>
</li>
</ol>
<?php }?>

<form name="frm_filemanager" method="post" action="">
	<table class="table table-striped table-bordered table-hover" id="tables">
		<thead>
			<tr>
				<td class="text-center col-lg-1"></td>
				<td class="text-left col-lg-7"><a href="#"><small><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_110']->value;?>
</small></a></td>
				<td class="text-left col-lg-2"><a href="#"><small><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_111']->value;?>
</small></a></td>
				<td class="text-left col-lg-2"><a href="#"><small><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_112']->value;?>
</small></a></td>
				<td class="text-left col-lg-1"><a href="#"><small><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_113']->value;?>
</small></a></td>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['data_user_attachments_folders'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_user_attachments_folders']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_attachments_folders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_user_attachments_folders']->key => $_smarty_tpl->tpl_vars['data_user_attachments_folders']->value) {
$_smarty_tpl->tpl_vars['data_user_attachments_folders']->_loop = true;
?>
				<tr>
					<td class="text-center col-lg-1">
						<input name="no[]" type="checkbox"/>
					</td>
					<td class="text-left col-lg-5">
						<a href="<?php echo $_smarty_tpl->tpl_vars['link_user_dashboard']->value;?>
?route=file_manager&folder_name=<?php echo $_smarty_tpl->tpl_vars['data_user_attachments_folders']->value['attachment_folder_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data_user_attachments_folders']->value['attachment_folder_name'];?>
">
							<span class="glyphicon glyphicon-folder-open"></span>&nbsp;
							<small><?php echo $_smarty_tpl->tpl_vars['data_user_attachments_folders']->value['attachment_folder_name'];?>
</small>
						</a>
					</td>
					<td class="text-center col-lg-2 text-muted">
						<small><?php echo $_smarty_tpl->tpl_vars['data_user_attachments_folders']->value['attachment_folder_time'];?>
</small>
					</td>
					<td class="text-center col-lg-1 text-muted">
						<small><?php echo $_smarty_tpl->tpl_vars['lang_file_manager_116']->value;?>
</small>
					</td>
					<td class="text-center col-lg-1 text-muted">
						<small></small>
					</td>
				</tr>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['data_user_attachments'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_user_attachments']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_user_attachments']->key => $_smarty_tpl->tpl_vars['data_user_attachments']->value) {
$_smarty_tpl->tpl_vars['data_user_attachments']->_loop = true;
?>
				<tr>
					<td class="text-center col-lg-1">
						<input name="checkbox_attachments" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_id'];?>
"/>
					</td>
					<td class="text-left col-lg-5">
						<a href="<?php echo $_smarty_tpl->tpl_vars['download_link']->value;
echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_uid'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_uid'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['img_attachments_types']->value;
echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_ext_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_uid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_uid'];?>
"/>
							<small><?php echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_uid'];?>
</small>
						</a>
					</td>
					<td class="text-center col-lg-2 text-muted">
						<small><?php echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_time'];?>
</small>
					</td>
					<td class="text-center col-lg-1 text-muted">
						<small><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_ext_name'], 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_file_manager_120']->value;?>
</small>
					</td>
					<td class="text-center col-lg-1 text-muted">
						<small><?php echo $_smarty_tpl->tpl_vars['data_user_attachments']->value['attachment_size'];?>
</small>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</form><?php }} ?>
