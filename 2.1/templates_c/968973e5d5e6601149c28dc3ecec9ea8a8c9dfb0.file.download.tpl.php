<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-30 17:22:22
         compiled from "templates\default\download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3127754cb5ed47961b4-30145888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968973e5d5e6601149c28dc3ecec9ea8a8c9dfb0' => 
    array (
      0 => 'templates\\default\\download.tpl',
      1 => 1422634928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3127754cb5ed47961b4-30145888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54cb5ed496a529_03425630',
  'variables' => 
  array (
    'error_number' => 0,
    'lang_errors_123' => 0,
    'lang_error_message' => 0,
    'link_home' => 0,
    'lang_errors_122' => 0,
    'intro_download' => 0,
    'attachment_ext_name' => 0,
    'attachment_name' => 0,
    'link_contact_us' => 0,
    'attachment_qrcode' => 0,
    'attachment_user' => 0,
    'attachment_size' => 0,
    'attachment_time' => 0,
    'attachment_views' => 0,
    'attachment_address' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cb5ed496a529_03425630')) {function content_54cb5ed496a529_03425630($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_filesize')) include 'C:\\wamp\\www\\Projects\\Uploadchi\\2.1\\includes\\engines\\smarty\\plugins\\modifier.filesize.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\Projects\\Uploadchi\\2.1\\includes\\engines\\smarty\\plugins\\modifier.date_format.php';
?><div class="container">
	<?php if (isset($_smarty_tpl->tpl_vars['error_number']->value)) {?>
		<div class="alert alert-alert" role="alert">
			<div class="alert alert-danger" role="alert">
				<p class="text-danger"><b><?php echo $_smarty_tpl->tpl_vars['lang_errors_123']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['error_number']->value;?>
</b></p>
				<?php echo $_smarty_tpl->tpl_vars['lang_error_message']->value;?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_errors_122']->value;?>
</a>
			</div>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['intro_download']->value=='true') {?>
		<div class="row">
			<div class="col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading"><img src="<?php echo $_smarty_tpl->tpl_vars['attachment_ext_name']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['attachment_name']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['attachment_name']->value;?>
">&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['attachment_name']->value;?>
</b></div>
					<div class="panel-body text-center">
						<div class="row">
							<div class="col-lg-9">
								<div align="center" class="well well-sm">
									<h6><small>Advertising</small></h6>
									<a href="<?php echo $_smarty_tpl->tpl_vars['link_contact_us']->value;?>
"><img src="http://ads.uploadchi.com/noads_banner-468x60.gif" alt="" title="" class="img-responsive"></a>
								</div>
							</div>
							<div class="col-lg-3">
								<div align="center" class="well well-sm">
									<h6><small>QR Code</small></h6>
									<img src="<?php echo $_smarty_tpl->tpl_vars['attachment_qrcode']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['attachment_name']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['attachment_name']->value;?>
">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="text-info">
									<h6>
									<small>
										<div class="well well-sm">
											<div class="row">
												<div align="center" class="col-lg-3">
													<span class="glyphicon glyphicon-user"></span>&nbsp;<b>Uploaded by:</b>&nbsp;<u><?php echo $_smarty_tpl->tpl_vars['attachment_user']->value;?>
</u>
												</div>
												<div align="center" class="col-lg-3">
													<span class="glyphicon glyphicon-hdd"></span>&nbsp;<b>File size:</b>&nbsp;<?php echo smarty_modifier_filesize($_smarty_tpl->tpl_vars['attachment_size']->value);?>

												</div>
												<div align="center" class="col-lg-3">
													<span class="glyphicon glyphicon-time"></span>&nbsp;<b>Published date:</b>&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['attachment_time']->value,"%m/%d/%Y %l:%m %p");?>

												</div>
												<div align="center" class="col-lg-3">
													<span class="glyphicon glyphicon-download-alt"></span>&nbsp;<b>Downloaded:</b>&nbsp;
													<?php echo number_format($_smarty_tpl->tpl_vars['attachment_views']->value);?>

												</div>
											</div>
										</div>
									</small>
									</h6>
									<a href="<?php echo $_smarty_tpl->tpl_vars['attachment_address']->value;?>
"><div class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;Download&nbsp;<?php echo $_smarty_tpl->tpl_vars['attachment_name']->value;?>
</div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="well well-sm text-center">
					<h6><small>Advertising</small></h6>
					<?php echo '<script'; ?>
 type="text/javascript" src="http://www.ad2ad.ir/showad.aspx?s=8&u=635580366029368258"><?php echo '</script'; ?>
>
					<?php echo '<script'; ?>
 type="text/javascript" src="http://www.ad2ad.ir/showad.aspx?s=8&u=635580366029368258"><?php echo '</script'; ?>
>
				</div>
			</div>
		</div>
	<?php }?>
</div><?php }} ?>
