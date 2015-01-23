<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-23 23:23:40
         compiled from "templates\default\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2940054bfdf9f9f68d9-93587490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2940054bfdf9f9f68d9-93587490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54bfdf9fa76841_20049927',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bfdf9fa76841_20049927')) {function content_54bfdf9fa76841_20049927($_smarty_tpl) {?><div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_100']->value;?>
</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-12">
							<div class="list-group">
								<small>
									<a href="<?php echo $_smarty_tpl->tpl_vars['link_user_dashboard']->value;?>
" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['navigation_user_dashboard']->value;?>
"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_101']->value;?>
</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['link_user_file_manager']->value;?>
" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['navigation_user_file_manager']->value;?>
"><span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_107']->value;?>
</a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['link_user_reports']->value;?>
" class="list-group-item <?php echo $_smarty_tpl->tpl_vars['navigation_user_reports']->value;?>
"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_102']->value;?>
</a>
								</small>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="well well-sm">
								<span class="glyphicon glyphicon-stats"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_112']->value;?>

							</div>
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge"><small><?php echo $_smarty_tpl->tpl_vars['user_allocate_attachments_size_display']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_104']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['user_define_attachment_percent_display']->value;?>
</small></span>
									<small><?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_103']->value;?>
</small>
								</li>
								
							</ul>
							<div class="well well-sm">
								<span class="glyphicon glyphicon-stats"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_111']->value;?>

							</div>
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge"><small><?php echo $_smarty_tpl->tpl_vars['user_attachments_count']->value;?>
</small></span>
									<small><?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_108']->value;?>
</small>
								</li>
								<li class="list-group-item">
									<span class="badge"><small><?php echo $_smarty_tpl->tpl_vars['user_attachments_views']->value;?>
</small></span>
									<small><?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_109']->value;?>
</small>
								</li>
								<li class="list-group-item">
									<span class="badge"><small>0 Rial's</small></span>
									<small><?php echo $_smarty_tpl->tpl_vars['lang_user_dashboard_110']->value;?>
</small>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<?php if (isset($_smarty_tpl->tpl_vars['navigation_user_file_manager']->value)) {?>
						<?php echo $_smarty_tpl->getSubTemplate ('file_manager.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
