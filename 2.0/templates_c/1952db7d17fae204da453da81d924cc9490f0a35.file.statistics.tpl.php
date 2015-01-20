<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-19 18:10:56
         compiled from "templates\default\statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3246954bd3aa0639ec3-29374875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1952db7d17fae204da453da81d924cc9490f0a35' => 
    array (
      0 => 'templates\\default\\statistics.tpl',
      1 => 1421501792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3246954bd3aa0639ec3-29374875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_home' => 0,
    'lang_commons_117' => 0,
    'lang_commons_119' => 0,
    'lang_statistics_100' => 0,
    'count_all_attachments' => 0,
    'lang_statistics_101' => 0,
    'count_all_attachments_views' => 0,
    'lang_statistics_102' => 0,
    'count_all_servers' => 0,
    'lang_statistics_103' => 0,
    'count_all_users' => 0,
    'lang_statistics_104' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bd3aa069e902_11192471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bd3aa069e902_11192471')) {function content_54bd3aa069e902_11192471($_smarty_tpl) {?><div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_117']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang_commons_117']->value;?>
</a></li>
		<li class="active"><?php echo $_smarty_tpl->tpl_vars['lang_commons_119']->value;?>
</li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-stats"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_statistics_100']->value;?>
</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="badge"><?php echo $_smarty_tpl->tpl_vars['count_all_attachments']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['lang_statistics_101']->value;?>

				</li>
				<li class="list-group-item">
					<span class="badge"><?php echo $_smarty_tpl->tpl_vars['count_all_attachments_views']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['lang_statistics_102']->value;?>

				</li>
				<li class="list-group-item">
					<span class="badge"><?php echo $_smarty_tpl->tpl_vars['count_all_servers']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['lang_statistics_103']->value;?>

				</li>
				<li class="list-group-item">
					<span class="badge"><?php echo $_smarty_tpl->tpl_vars['count_all_users']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['lang_statistics_104']->value;?>

				</li>
			</ul>
		</div>
	</div>
</div><?php }} ?>
