<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-17 21:25:28
         compiled from "templates\default\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1868754babc16824d56-05361503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e41cff08563b746bd08f004caf994f16682f8b08' => 
    array (
      0 => 'templates\\default\\login.tpl',
      1 => 1421526326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1868754babc16824d56-05361503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54babc1688db71_97945462',
  'variables' => 
  array (
    'link_login' => 0,
    'lang_login_100' => 0,
    'error_number' => 0,
    'lang_errors_123' => 0,
    'lang_error_message' => 0,
    'lang_login_101' => 0,
    'lang_login_102' => 0,
    'lang_login_104' => 0,
    'lang_login_103' => 0,
    'link_home' => 0,
    'lang_login_106' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54babc1688db71_97945462')) {function content_54babc1688db71_97945462($_smarty_tpl) {?><div class="login">
	<div class="container-fluid">
		<form name="form_login" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_login']->value;?>
">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['lang_login_100']->value;?>
</h3>
						</div>
						<div class="panel-body">
							<?php if (isset($_smarty_tpl->tpl_vars['error_number']->value)) {?>
								<div class="alert alert-danger" role="alert">
									<p class="text-danger"><b><?php echo $_smarty_tpl->tpl_vars['lang_errors_123']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['error_number']->value;?>
</b></p>
									<?php echo $_smarty_tpl->tpl_vars['lang_error_message']->value;?>

								</div>
							<?php }?>
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_login_101']->value;?>
" name="username" type="text" required autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_login_102']->value;?>
" name="password" type="password" autocomplete="off" required>
								</div>
								<div class="checkbox">
									<label><input name="remember" type="checkbox" value="1"><?php echo $_smarty_tpl->tpl_vars['lang_login_104']->value;?>
</label>
								</div>
								<button name="login" type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_login_103']->value;?>
</button>
							</fieldset>
						</div>
					</div>
					<small><a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_login_106']->value;?>
</a></small>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>
