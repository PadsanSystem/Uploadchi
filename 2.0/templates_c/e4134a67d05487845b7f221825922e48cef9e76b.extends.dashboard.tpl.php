<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 18:15:24
         compiled from "templates\default\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517854c281accab1a1-09687022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '517854c281accab1a1-09687022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_user_dashboard_100' => 0,
    'link_user_dashboard' => 0,
    'navigation_user_dashboard' => 0,
    'lang_user_dashboard_101' => 0,
    'link_user_reports' => 0,
    'navigation_user_reports' => 0,
    'lang_user_dashboard_102' => 0,
    'lang_user_dashboard_103' => 0,
    'user_allocate_attachments_size_display' => 0,
    'lang_user_dashboard_104' => 0,
    'user_define_attachment_percent_display' => 0,
    'user_allocate_attachments_percent_display' => 0,
    'lang_user_dashboard_105' => 0,
    'lang_upload_103' => 0,
    'lang_upload_101' => 0,
    'lang_upload_104' => 0,
    'lang_upload_102' => 0,
    'lang_upload_110' => 0,
    'lang_upload_109' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c281acd6ae73_17941976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c281acd6ae73_17941976')) {function content_54c281acd6ae73_17941976($_smarty_tpl) {?><div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_100']->value;?>
</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-12">
							<div class="list-group">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link_user_dashboard']->value;?>
" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['navigation_user_dashboard']->value;?>
"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_101']->value;?>
</a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['link_user_reports']->value;?>
" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['navigation_user_reports']->value;?>
"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_102']->value;?>
</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="well">
								<h5>
								<span class="glyphicon glyphicon-hdd"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_103']->value;?>
<br>
								<small><?php echo $_smarty_tpl->tpl_vars['user_allocate_attachments_size_display']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_104']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['user_define_attachment_percent_display']->value;?>
</small>
								</h5>
								<div class="progress">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['user_allocate_attachments_percent_display']->value;?>
" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $_smarty_tpl->tpl_vars['user_allocate_attachments_percent_display']->value;?>
%">
										<small><?php echo $_smarty_tpl->tpl_vars['user_allocate_attachments_percent_display']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_105']->value;?>
</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<ul class="nav nav-tabs" id="tabs" style="border-bottom:0">
						<li class="active"><a href="#<?php echo $_smarty_tpl->tpl_vars['lang_upload_103']->value;?>
" data-toggle="tab"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_101']->value;?>
</a></li>
						<li><a href="#<?php echo $_smarty_tpl->tpl_vars['lang_upload_104']->value;?>
" data-toggle="tab"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_102']->value;?>
</a></li>
						<li><a href="#<?php echo $_smarty_tpl->tpl_vars['lang_upload_110']->value;?>
" data-toggle="tab"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_upload_109']->value;?>
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
						<div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['lang_upload_110']->value;?>
">
							<div class="panel panel-success" style="border-top-left-radius:0">
								<div class="panel-body">
									<?php echo $_smarty_tpl->getSubTemplate ('file_manager.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
