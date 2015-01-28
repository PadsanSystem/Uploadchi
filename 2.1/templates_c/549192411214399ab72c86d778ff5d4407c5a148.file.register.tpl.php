<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-19 21:40:43
         compiled from "templates\default\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2061854bd6ab209ded5-80117907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549192411214399ab72c86d778ff5d4407c5a148' => 
    array (
      0 => 'templates\\default\\register.tpl',
      1 => 1421700039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2061854bd6ab209ded5-80117907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bd6ab21549a0_67859609',
  'variables' => 
  array (
    'link_home' => 0,
    'lang_commons_108' => 0,
    'lang_register_100' => 0,
    'lang_alert_message' => 0,
    'link_login' => 0,
    'lang_register_116' => 0,
    'error_number' => 0,
    'lang_errors_123' => 0,
    'lang_error_message' => 0,
    'link_register' => 0,
    'lang_register_101' => 0,
    'user_username' => 0,
    'lang_register_114' => 0,
    'lang_register_102' => 0,
    'lang_register_113' => 0,
    'lang_register_103' => 0,
    'user_name' => 0,
    'lang_register_112' => 0,
    'lang_register_104' => 0,
    'user_family' => 0,
    'lang_register_111' => 0,
    'lang_register_105' => 0,
    'user_email' => 0,
    'lang_register_110' => 0,
    'lang_register_106' => 0,
    'lang_register_108' => 0,
    'lang_register_109' => 0,
    'lang_register_107' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bd6ab21549a0_67859609')) {function content_54bd6ab21549a0_67859609($_smarty_tpl) {?><div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
</a></li>
		<li class="active"><?php echo $_smarty_tpl->tpl_vars['lang_register_100']->value;?>
</li>
	</ol>
	<?php if (isset($_smarty_tpl->tpl_vars['lang_alert_message']->value)) {?>
		<div class="alert alert-success" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_alert_message']->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['link_login']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_register_116']->value;?>
</a>
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
		<div class="panel-heading"><span class="glyphicon glyphicon-plus"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_register_100']->value;?>
</div>
		<div class="panel-body">
			<form name="form_register" class="form-vertical" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_register']->value;?>
" enctype="multipart/form-data">
				<div class="form-group col-lg-6">
					<label for="username" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_register_101']->value;?>
</label><br>
					<input id="username" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_register_114']->value;?>
" autocomplete="off" required>
				</div>
				<div class="form-group col-lg-6">
					<label for="password" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_register_102']->value;?>
</label><br>
					<input id="password" name="password" type="password" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_register_113']->value;?>
" autocomplete="off" required>
				</div>
				<div class="form-group col-lg-6">
					<label for="name" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_register_103']->value;?>
</label><br>
					<input id="name" name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_register_112']->value;?>
">
				</div>
				<div class="form-group col-lg-6">
					<label for="family" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_register_104']->value;?>
</label><br>
					<input id="family" name="family" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_family']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_register_111']->value;?>
">
				</div>
				<div class="form-group col-lg-6">
					<label for="email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_register_105']->value;?>
</label><br>
					<input id="email" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_register_110']->value;?>
" required>
				</div>
				<div class="form-group col-lg-6">
					<label for="avatar" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_register_106']->value;?>
</label><br>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
						<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><?php echo $_smarty_tpl->tpl_vars['lang_register_108']->value;?>
</span><span class="fileinput-exists"><?php echo $_smarty_tpl->tpl_vars['lang_register_109']->value;?>
</span><input type="file" name="avatar"></span>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3 text-center">
					<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_register_107']->value;?>
</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
