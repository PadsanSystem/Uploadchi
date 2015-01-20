<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-19 17:51:56
         compiled from "templates\default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1278854bd362c208d09-30908629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '454b718d7f07c916e94cab7deecbd48fb748d3a3' => 
    array (
      0 => 'templates\\default\\index.tpl',
      1 => 1421603531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1278854bd362c208d09-30908629',
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
    'link_upload' => 0,
    'lang_upload_107' => 0,
    'lang_upload_108' => 0,
    'lang_upload_105' => 0,
    'lang_upload_106' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bd362c44b178_88885733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bd362c44b178_88885733')) {function content_54bd362c44b178_88885733($_smarty_tpl) {?><div class="container">
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
					<form name="form_<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
" class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_upload']->value;?>
" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2 text-center">
								<div class="fileinput fileinput-new input-group" data-provides="fileinput">
								  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
								  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><?php echo $_smarty_tpl->tpl_vars['lang_upload_107']->value;?>
</span><span class="fileinput-exists"><?php echo $_smarty_tpl->tpl_vars['lang_upload_108']->value;?>
</span><input type="file" name="<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
"></span>
								</div>
								<br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-4 col-lg-offset-4 text-center">
								<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_105']->value;?>
</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<form name="form_<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
" class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['link_upload']->value;?>
">
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2 text-center">
								<div class="input-group">
									<input name="<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
" type="text" class="form-control">
									<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
								</div>
								<br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-4 col-lg-offset-4 text-center">
								<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_106']->value;?>
</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
