<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-20 12:11:26
         compiled from "templates\default\privacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1984354be25b825fff4-07950424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3dc4630aa75dca7d405878bb8a0358090796914' => 
    array (
      0 => 'templates\\default\\privacy.tpl',
      1 => 1421752285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984354be25b825fff4-07950424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54be25b83fceb9_86516692',
  'variables' => 
  array (
    'link_home' => 0,
    'lang_commons_117' => 0,
    'lang_privacy_100' => 0,
    'lang_privacy_106' => 0,
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be25b83fceb9_86516692')) {function content_54be25b83fceb9_86516692($_smarty_tpl) {?><div class="container">
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
					<a href="<?php echo '<?php'; ?>
 echo BASEDIR.'dashboard.php?route=file_explorer'; <?php echo '?>'; ?>
" class="list-group-item <?php echo '<?php'; ?>
 if(($_GET['route']=='file_explorer') || (!isset($_GET['route']))) echo 'active'; <?php echo '?>'; ?>
"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_privacy_106']->value;?>
</a>
					<a href="<?php echo '<?php'; ?>
 echo BASEDIR.'dashboard.php?route=file_explorer'; <?php echo '?>'; ?>
" class="list-group-item <?php echo '<?php'; ?>
 if(($_GET['route']=='file_explorer') || (!isset($_GET['route']))) echo 'active'; <?php echo '?>'; ?>
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
