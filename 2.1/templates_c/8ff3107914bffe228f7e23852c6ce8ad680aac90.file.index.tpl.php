<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-28 08:31:02
         compiled from "templates\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318454c89036bfb9d2-97637277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff3107914bffe228f7e23852c6ce8ad680aac90' => 
    array (
      0 => 'templates\\default\\index.tpl',
      1 => 1421871171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318454c89036bfb9d2-97637277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_commons_120' => 0,
    'lang_commons_121' => 0,
    'lang_commons_122' => 0,
    'lang_commons_123' => 0,
    'lang_commons_124' => 0,
    'lang_commons_125' => 0,
    'lang_commons_126' => 0,
    'lang_commons_127' => 0,
    'img_banners' => 0,
    'settings_description' => 0,
    'lang_upload_103' => 0,
    'lang_upload_101' => 0,
    'lang_upload_104' => 0,
    'lang_upload_102' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c89036c851d3_88528267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c89036c851d3_88528267')) {function content_54c89036c851d3_88528267($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<h1>
				<?php echo $_smarty_tpl->tpl_vars['lang_commons_120']->value;?>
<br>
				<small class="text-success"><?php echo $_smarty_tpl->tpl_vars['lang_commons_121']->value;?>
</small>
			</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<div class="well well-lg">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<small>
							<ul class="no-more-left">
								<li><?php echo $_smarty_tpl->tpl_vars['lang_commons_122']->value;?>
</li>
								<li><?php echo $_smarty_tpl->tpl_vars['lang_commons_123']->value;?>
</li>
								<li><?php echo $_smarty_tpl->tpl_vars['lang_commons_124']->value;?>
</li>
								<li><?php echo $_smarty_tpl->tpl_vars['lang_commons_125']->value;?>
</li>
								<li><?php echo $_smarty_tpl->tpl_vars['lang_commons_126']->value;?>
</li>
								<li><?php echo $_smarty_tpl->tpl_vars['lang_commons_127']->value;?>
</li>
							</ul>
						</small>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12" align="center">
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_banners']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['settings_description']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['settings_description']->value;?>
" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
	<ul class="nav nav-tabs" id="tabs" style="border-bottom:0">
	  <li class="active"><a href="#<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
" data-toggle="tab"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_101']->value;?>
</a></li>
	  <li><a href="#<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
" data-toggle="tab"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_102']->value;?>
</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<?php echo $_smarty_tpl->getSubTemplate ('local_upload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			</div>
		</div>
		<div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<?php echo $_smarty_tpl->getSubTemplate ('remote_upload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
