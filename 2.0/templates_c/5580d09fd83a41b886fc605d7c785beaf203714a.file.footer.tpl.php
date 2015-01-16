<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-17 00:21:51
         compiled from "templates\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3247654b99d0fa8f5f7-34143785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5580d09fd83a41b886fc605d7c785beaf203714a' => 
    array (
      0 => 'templates\\default\\footer.tpl',
      1 => 1421444010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3247654b99d0fa8f5f7-34143785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_footer_101' => 0,
    'locale' => 0,
    'memory_usage' => 0,
    'render_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b99d0faaf271_35692804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b99d0faaf271_35692804')) {function content_54b99d0faaf271_35692804($_smarty_tpl) {?><div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h5 class="text-muted text-center">
					<small>
						<a href="http://blog.uploadchi.com" title="<?php echo $_smarty_tpl->tpl_vars['lang_footer_101']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_footer_101']->value;?>
</a>
					</small>
				</h5>
				<p class="text-muted text-center">
					<small>
						<?php echo $_smarty_tpl->tpl_vars['locale']->value['lang_footer_100'];?>

					</small>
				</p>
				<?php if (('iADMIN')) {?>
					<p class="text-muted text-center">
						<small>
							<?php echo $_smarty_tpl->tpl_vars['memory_usage']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['render_time']->value;?>

						</small>
					</p>
				<?php }?>
			</div>
		</div>
	</div>
</div><?php }} ?>
