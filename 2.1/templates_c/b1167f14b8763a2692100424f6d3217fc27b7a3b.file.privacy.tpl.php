<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-28 08:35:18
         compiled from "templates\default\privacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1307154c89136955394-20723550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1167f14b8763a2692100424f6d3217fc27b7a3b' => 
    array (
      0 => 'templates\\default\\privacy.tpl',
      1 => 1422430255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1307154c89136955394-20723550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_home' => 0,
    'lang_commons_117' => 0,
    'lang_privacy_100' => 0,
    'navigation_privacy_general' => 0,
    'lang_privacy_106' => 0,
    'navigation_privacy_payments' => 0,
    'lang_privacy_107' => 0,
    'lang_terms_101' => 0,
    'lang_privacy_101' => 0,
    'lang_privacy_102' => 0,
    'lang_privacy_103' => 0,
    'lang_privacy_104' => 0,
    'lang_privacy_105' => 0,
    'lang_terms_106' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c891369c0509_89605993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c891369c0509_89605993')) {function content_54c891369c0509_89605993($_smarty_tpl) {?><div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_117']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_commons_117']->value;?>
</a></li>
		<li class="active"><?php echo $_smarty_tpl->tpl_vars['lang_privacy_100']->value;?>
</li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-book"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_privacy_100']->value;?>
</div>
		<div class="panel-body">
			<div class="col-lg-2">
				<div class="list-group">
					<a href="" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['navigation_privacy_general']->value;?>
"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_privacy_106']->value;?>
</a>
					<a href="" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['navigation_privacy_payments']->value;?>
"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_privacy_107']->value;?>
</a>
				</div>
			</div>
			<div class="col-lg-10">
				<?php echo $_smarty_tpl->tpl_vars['lang_terms_101']->value;?>

				<p><?php echo $_smarty_tpl->tpl_vars['lang_privacy_101']->value;?>
</p>
				<ol>
					<li><?php echo $_smarty_tpl->tpl_vars['lang_privacy_102']->value;?>
</li>
					<li><?php echo $_smarty_tpl->tpl_vars['lang_privacy_103']->value;?>
</li>
					<li><?php echo $_smarty_tpl->tpl_vars['lang_privacy_104']->value;?>
</li>
				</ol>
				<p><?php echo $_smarty_tpl->tpl_vars['lang_privacy_105']->value;?>
</p>
				<?php echo $_smarty_tpl->tpl_vars['lang_terms_106']->value;?>

			</div>
		</div>
	</div>
</div><?php }} ?>
