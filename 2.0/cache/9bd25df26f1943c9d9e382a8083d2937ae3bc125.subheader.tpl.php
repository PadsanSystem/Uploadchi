<?php /*%%SmartyHeaderCode:2071354ba67465b3d24-36885466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bd25df26f1943c9d9e382a8083d2937ae3bc125' => 
    array (
      0 => 'templates\\default\\subheader.tpl',
      1 => 1421502464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2071354ba67465b3d24-36885466',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ba68159173a5_10468648',
  'variables' => 
  array (
    'settings_description' => 0,
    'settings_keywords' => 0,
    'settings_author' => 0,
    'settings_title' => 1,
    'settings_css' => 0,
    'visit_page' => 1,
    'link_home' => 1,
    'title' => 1,
    'lang_commons_108' => 1,
    'link_terms' => 1,
    'lang_commons_109' => 1,
    'link_statistics' => 1,
    'lang_commons_110' => 1,
    'link_aboutus' => 1,
    'lang_commons_111' => 1,
    'link_contactus' => 1,
    'lang_commons_112' => 1,
    'iMEMBER' => 1,
    'user_avatar' => 1,
    'lang_commons_113' => 1,
    'user_username' => 1,
    'user_avatar_4' => 1,
    'link_edit_profile' => 1,
    'lang_commons_107' => 1,
    'link_dashboard' => 1,
    'lang_commons_106' => 1,
    'iADMIN' => 1,
    'link_admin' => 1,
    'lang_commons_105' => 1,
    'link_logout' => 1,
    'lang_commons_102' => 1,
    'lang_commons_104' => 1,
    'link_login' => 1,
    'lang_commons_101' => 1,
    'link_register' => 1,
    'lang_commons_103' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ba68159173a5_10468648')) {function content_54ba68159173a5_10468648($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Easily store, manage and share files with anyone">
	<meta name="keywords" content="Easily store, manage, share, files, anyone">
	<meta name="author" content="PadsanSystem Corporation">
	<title>Uploadchi</title>
	<link href="templates/default/css/cstyles.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php if ($_smarty_tpl->tpl_vars['visit_page']->value!='login') {?>
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['settings_title']->value;?>
</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
"><span class="glyphicon glyphicon-home"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_108']->value;?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_terms']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_109']->value;?>
"><span class="glyphicon glyphicon-book"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_109']->value;?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_statistics']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_110']->value;?>
"><span class="glyphicon glyphicon-stats"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_110']->value;?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_aboutus']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_111']->value;?>
"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_111']->value;?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_contactus']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_112']->value;?>
"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_112']->value;?>
</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if ($_smarty_tpl->tpl_vars['iMEMBER']->value) {?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" class="img-circle">
								<small><?php echo $_smarty_tpl->tpl_vars['lang_commons_113']->value;?>
&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
</b></small>&nbsp;<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['user_avatar_4']->value;?>
" class="img-responsive"></a></li>
								<li class="divider"></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_edit_profile']->value;?>
"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_107']->value;?>
</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_dashboard']->value;?>
"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_106']->value;?>
</a></li>
								<?php if ($_smarty_tpl->tpl_vars['iADMIN']->value) {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_admin']->value;?>
"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_105']->value;?>
</a></li>
								<?php }?>
								<li class="divider"></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_logout']->value;?>
"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_102']->value;?>
</a></li>
							</ul>
						</li>
					<?php } else { ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_104']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lang_commons_104']->value;?>
" class="img-circle">&nbsp;<small><?php echo $_smarty_tpl->tpl_vars['lang_commons_104']->value;?>
</small>&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_login']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_101']->value;?>
"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_101']->value;?>
</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['link_register']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang_commons_103']->value;?>
"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang_commons_103']->value;?>
</a></li>
							</ul>
						</li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
<?php }?>
<?php }} ?>
