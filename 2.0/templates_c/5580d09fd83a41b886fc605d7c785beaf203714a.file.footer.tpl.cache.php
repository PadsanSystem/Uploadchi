<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-16 23:20:03
         compiled from "templates\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2443754b98e93b52107-89576816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2443754b98e93b52107-89576816',
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
  'unifunc' => 'content_54b98e93b76b91_18391543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b98e93b76b91_18391543')) {function content_54b98e93b76b91_18391543($_smarty_tpl) {?><div id="footer">
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
