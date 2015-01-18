<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-18 22:30:05
         compiled from "templates\default\contactus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1049454baaff120c592-17871675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c36a87181ea138911574d650ec43f1608e4e4e9e' => 
    array (
      0 => 'templates\\default\\contactus.tpl',
      1 => 1421616597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049454baaff120c592-17871675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54baaff1287834_27112118',
  'variables' => 
  array (
    'link_home' => 0,
    'lang_commons_108' => 0,
    'lang_contactus_100' => 0,
    'lang_alert_message' => 0,
    'error_number' => 0,
    'lang_errors_123' => 0,
    'lang_error_message' => 0,
    'lang_contactus_111' => 0,
    'img_contactus' => 0,
    'link_contactus' => 0,
    'lang_contactus_101' => 0,
    'lang_contactus_112' => 0,
    'lang_contactus_113' => 0,
    'lang_contactus_114' => 0,
    'lang_contactus_115' => 0,
    'lang_contactus_102' => 0,
    'lang_contactus_106' => 0,
    'lang_contactus_103' => 0,
    'lang_contactus_107' => 0,
    'lang_contactus_104' => 0,
    'lang_contactus_108' => 0,
    'lang_contactus_105' => 0,
    'lang_contactus_109' => 0,
    'lang_contactus_110' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54baaff1287834_27112118')) {function content_54baaff1287834_27112118($_smarty_tpl) {?><div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
</a></li>
		<li class="active"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_100']->value;?>
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
		<div class="panel-heading"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_contactus_111']->value;?>
</div>
		<div class="panel-body">
			<div class="form-group col-lg-5 text-center">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img_contactus']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lang_contactus_100']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_contactus_100']->value;?>
" class="img-responsive img-thumbnail">
			</div>
			<form name="form_contactus" class="form-vertical" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_contactus']->value;?>
">
				<div class="form-group col-lg-7">
					<label for="department" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_101']->value;?>
</label><br>
					<select name="department" class="form-control col-lg-12">
						<option value="1"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_112']->value;?>
</option>
						<option value="2"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_113']->value;?>
</option>
						<option value="3"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_114']->value;?>
</option>
						<option value="4"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_115']->value;?>
</option>
					</select>
				</div>
				<div class="form-group col-lg-7">
					<label for="name" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_102']->value;?>
</label><br>
					<input id="name" name="name" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_contactus_106']->value;?>
" required>
				</div>
				<div class="form-group col-lg-7">
					<label for="email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_103']->value;?>
</label><br>
					<input id="email" name="email" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_contactus_107']->value;?>
" required>
				</div>
				<div class="form-group col-lg-7">
					<label for="subject" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_104']->value;?>
</label><br>
					<input id="subject" name="subject" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_contactus_108']->value;?>
" required>
				</div>
				<div class="form-group col-lg-12">
					<label for="message" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang_contactus_105']->value;?>
</label><br>
					<textarea id="message" name="message" class="form-control" rows="3" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang_contactus_109']->value;?>
"></textarea>
				</div>
				<div class="col-lg-6 col-lg-offset-3 text-center">
					<button id="submit" name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-envelope"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_contactus_110']->value;?>
</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
