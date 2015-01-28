<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-28 09:04:39
         compiled from "templates\default\edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1547154c89817d88196-98265749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b80b25d5edd853ef8ba23855f7bc8bfb54d5a1' => 
    array (
      0 => 'templates\\default\\edit_profile.tpl',
      1 => 1421785979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1547154c89817d88196-98265749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_alert_message' => 0,
    'error_number' => 0,
    'lang_errors_123' => 0,
    'lang_error_message' => 0,
    'lang_edit_profile_108' => 0,
    'lang_edit_profile_100' => 0,
    'user_username' => 0,
    'lang_edit_profile_101' => 0,
    'lang_edit_profile_113' => 0,
    'lang_edit_profile_102' => 0,
    'user_name' => 0,
    'lang_edit_profile_114' => 0,
    'lang_edit_profile_103' => 0,
    'user_family' => 0,
    'lang_edit_profile_115' => 0,
    'lang_edit_profile_104' => 0,
    'user_email' => 0,
    'edit_profile_116' => 0,
    'img_user_avatar_2' => 0,
    'img_user_avatar' => 0,
    'lang_edit_profile_111' => 0,
    'lang_edit_profile_105' => 0,
    'lang_edit_profile_110' => 0,
    'lang_edit_profile_109' => 0,
    'lang_edit_profile_107' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c89817e3d751_41198998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c89817e3d751_41198998')) {function content_54c89817e3d751_41198998($_smarty_tpl) {?><div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['lang_alert_message']->value)) {?>
		<div class="alert alert-success" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_alert_message']->value;?>

		</div>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['error_number']->value)) {?>
		<div class="alert alert-danger" role="alert">
			<p class="text-danger"><b><?php echo $_smarty_tpl->tpl_vars['lang_errors_123']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['error_number']->value;?>
</b></p>
			<?php echo $_smarty_tpl->tpl_vars['lang_error_message']->value;?>

		</div>
	<?php }?>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_108']->value;?>
</div>
		<div class="panel-body">
			<form name="form_edit_profile" class="form-vertical" role="form" method="post" action="edit_profile.php" enctype="multipart/form-data">
				<div class="form-group col-lg-12">
					<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_100']->value;?>
</label><br>
					<div class="well well-sm"><?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
</div>
				</div>
				<div class="form-group col-lg-6">
					<label for="password" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_101']->value;?>
</label><br>
					<input id="password" name="password" type="password" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_113']->value;?>
" autocomplete="off">
				</div>
				<div class="form-group col-lg-6">
					<label for="name" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_102']->value;?>
</label><br>
					<input id="name" name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_114']->value;?>
">
				</div>
				<div class="form-group col-lg-6">
					<label for="family" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_103']->value;?>
</label><br>
					<input id="family" name="family" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_family']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_115']->value;?>
">
				</div>
				<div class="form-group col-lg-6">
					<label for="email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_104']->value;?>
</label><br>
					<input id="email" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['edit_profile_116']->value;?>
">
				</div>
				<div class="form-group col-lg-6">
					<div align="center" class="pull-left">
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_user_avatar_2']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
" class="img-responsive" style="margin-right:10px;">
						<?php if ($_smarty_tpl->tpl_vars['img_user_avatar']->value!='images/avatars/noavatar.png') {?>
							<small><a href="edit_profile.php?route=remove_avatar" class="text-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_111']->value;?>
</a></small>
						<?php }?>
					</div>
					<label for="avatar" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_105']->value;?>
</label><br>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
						<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_110']->value;?>
</span><span class="fileinput-exists"><?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_109']->value;?>
</span><input type="file" name="avatar"></span>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3 text-center">
					<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_edit_profile_107']->value;?>
</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
