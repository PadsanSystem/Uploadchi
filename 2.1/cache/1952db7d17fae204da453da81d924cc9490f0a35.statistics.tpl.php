<?php /*%%SmartyHeaderCode:2868754ba6803f10ef3-22413104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2868754ba6803f10ef3-22413104',
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
  'unifunc' => 'content_54ba68040358a1_22609363',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ba68040358a1_22609363')) {function content_54ba68040358a1_22609363($_smarty_tpl) {?><div class="container">
	<ol class="breadcrumb">
		<li><a href="index.php" title="Home">Home</a></li>
		<li class="active">Statistics</li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-stats"></span>&nbsp;Statistics</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="badge">1,268</span>Files
				</li>
				<li class="list-group-item">
					<span class="badge">3,942,997</span>Views
				</li>
				<li class="list-group-item">
					<span class="badge">4</span>Servers
				</li>
				<li class="list-group-item">
					<span class="badge">158</span>Users
				</li>
			</ul>
		</div>
	</div>
</div><?php }} ?>
