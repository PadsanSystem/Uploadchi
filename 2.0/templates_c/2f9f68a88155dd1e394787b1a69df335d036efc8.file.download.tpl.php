<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 20:30:49
         compiled from "templates\default\download.tpl" */ ?>
<?php /*%%SmartyHeaderCode:700554c2a169ad2134-63437383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f9f68a88155dd1e394787b1a69df335d036efc8' => 
    array (
      0 => 'templates\\default\\download.tpl',
      1 => 1421529793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700554c2a169ad2134-63437383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_errors_123' => 0,
    'error_number' => 0,
    'lang_error_message' => 0,
    'link_home' => 0,
    'lang_errors_122' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c2a169b50916_89709069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c2a169b50916_89709069')) {function content_54c2a169b50916_89709069($_smarty_tpl) {?><div class="container">
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
</div><?php }} ?>
