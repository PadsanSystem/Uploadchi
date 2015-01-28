<?php /*%%SmartyHeaderCode:235754c2cbf51e1306-92115972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4134a67d05487845b7f221825922e48cef9e76b' => 
    array (
      0 => 'templates\\default\\dashboard.tpl',
      1 => 1422051801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235754c2cbf51e1306-92115972',
  'variables' => 
  array (
    'lang_user_dashboard_100' => 0,
    'link_user_dashboard' => 0,
    'navigation_user_dashboard' => 0,
    'lang_user_dashboard_101' => 0,
    'link_user_file_manager' => 0,
    'navigation_user_file_manager' => 0,
    'lang_user_dashboard_107' => 0,
    'link_user_reports' => 0,
    'navigation_user_reports' => 0,
    'lang_user_dashboard_102' => 0,
    'lang_user_dashboard_112' => 0,
    'user_allocate_attachments_size_display' => 0,
    'lang_user_dashboard_104' => 0,
    'user_define_attachment_percent_display' => 0,
    'lang_user_dashboard_103' => 0,
    'lang_user_dashboard_111' => 0,
    'user_attachments_count' => 0,
    'lang_user_dashboard_108' => 0,
    'user_attachments_views' => 0,
    'lang_user_dashboard_109' => 0,
    'lang_user_dashboard_110' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c2cbf5257be6_78540089',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c2cbf5257be6_78540089')) {function content_54c2cbf5257be6_78540089($_smarty_tpl) {?><div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;My Dashboard</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-12">
							<div class="list-group">
								<small>
									<a href="dashboard.php" class="list-group-item active"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Dashboard</a>
									<a href="dashboard.php?route=file_manager" class="list-group-item "><span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;File Manager</a>
									<a href="dashboard.php?route=reports" class="list-group-item "><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Reports</a>
								</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="well well-sm">
								<span class="glyphicon glyphicon-stats"></span>&nbsp;Storage status
							</div>
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge"><small>7.86 GB&nbsp;of&nbsp;100 GB</small></span>
									<small>Disk space</small>
								</li>
								
							</ul>
							<div class="well well-sm">
								<span class="glyphicon glyphicon-stats"></span>&nbsp;Quick reports
							</div>
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge"><small>21</small></span>
									<small>Files</small>
								</li>
								<li class="list-group-item">
									<span class="badge"><small>29</small></span>
									<small>Files View</small>
								</li>
								<li class="list-group-item">
									<span class="badge"><small>0 Rial's</small></span>
									<small>My Credit</small>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
									</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
