<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-30 17:32:59
         compiled from "templates\default\contact_us.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2229154cbb23b36fde9-76971820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a15edc3b843bc929feefb59bfbd573d27fae82' => 
    array (
      0 => 'templates\\default\\contact_us.tpl',
      1 => 1421872954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2229154cbb23b36fde9-76971820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_home' => 0,
    'lang_commons_108' => 0,
    'lang_contact_us_100' => 0,
    'lang_alert_message' => 0,
    'error_number' => 0,
    'lang_errors_123' => 0,
    'lang_error_message' => 0,
    'lang_contact_us_111' => 0,
    'img_contact_us' => 0,
    'link_contact_us' => 0,
    'lang_contact_us_101' => 0,
    'lang_contact_us_112' => 0,
    'lang_contact_us_113' => 0,
    'lang_contact_us_114' => 0,
    'lang_contact_us_115' => 0,
    'lang_contact_us_102' => 0,
    'name' => 0,
    'lang_contact_us_106' => 0,
    'lang_contact_us_103' => 0,
    'email' => 0,
    'lang_contact_us_107' => 0,
    'lang_contact_us_104' => 0,
    'subject' => 0,
    'lang_contact_us_108' => 0,
    'lang_contact_us_105' => 0,
    'lang_contact_us_109' => 0,
    'message' => 0,
    'lang_contact_us_110' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54cbb23b443245_54826702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cbb23b443245_54826702')) {function content_54cbb23b443245_54826702($_smarty_tpl) {?><div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
</a></li>
		<li class="active"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_100']->value;?>
</li>
	</ol>
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
		<div class="panel-heading"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_contact_us_111']->value;?>
</div>
		<div class="panel-body">
			<div class="form-group col-lg-5 text-center">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img_contact_us']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lang_contact_us_100']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_contact_us_100']->value;?>
" class="img-responsive img-thumbnail">
			</div>
			<form name="form_contact_us" class="form-vertical" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_contact_us']->value;?>
">
				<div class="form-group col-lg-7">
					<label for="department" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_101']->value;?>
</label><br>
					<select name="department" class="form-control col-lg-12">
						<option value="1"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_112']->value;?>
</option>
						<option value="2"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_113']->value;?>
</option>
						<option value="3"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_114']->value;?>
</option>
						<option value="4"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_115']->value;?>
</option>
					</select>
				</div>
				<div class="form-group col-lg-7">
					<label for="name" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_102']->value;?>
</label><br>
					<input id="name" name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_contact_us_106']->value;?>
" required>
				</div>
				<div class="form-group col-lg-7">
					<label for="email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_103']->value;?>
</label><br>
					<input id="email" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_contact_us_107']->value;?>
" required>
				</div>
				<div class="form-group col-lg-7">
					<label for="subject" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_104']->value;?>
</label><br>
					<input id="subject" name="subject" type="text" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_contact_us_108']->value;?>
" required>
				</div>
				<div class="form-group col-lg-12">
					<label for="message" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contact_us_105']->value;?>
</label><br>
					<textarea id="message" name="message" class="form-control" rows="3" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_contact_us_109']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
				</div>
				<div class="col-lg-6 col-lg-offset-3 text-center">
					<button id="submit" name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-envelope"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_contact_us_110']->value;?>
</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
