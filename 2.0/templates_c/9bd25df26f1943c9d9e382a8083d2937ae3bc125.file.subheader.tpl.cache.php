<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-16 23:55:18
         compiled from "templates\default\subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:805954b996d634c0e3-51565486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bd25df26f1943c9d9e382a8083d2937ae3bc125' => 
    array (
      0 => 'templates\\default\\subheader.tpl',
      1 => 1421448853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '805954b996d634c0e3-51565486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings_description' => 0,
    'settings_keywords' => 0,
    'settings_author' => 0,
    'settings_title' => 0,
    'settings_css' => 0,
    'iMEMBER' => 0,
    'link_home' => 0,
    'title' => 0,
    'lang_commons_108' => 0,
    'link_terms' => 0,
    'lang_commons_109' => 0,
    'link_statistics' => 0,
    'lang_commons_110' => 0,
    'link_aboutus' => 0,
    'lang_commons_111' => 0,
    'link_contactus' => 0,
    'lang_commons_112' => 0,
    'user_avatar' => 0,
    'lang_commons_113' => 0,
    'user_username' => 0,
    'user_avatar_4' => 0,
    'link_edit_profile' => 0,
    'lang_commons_107' => 0,
    'link_dashboard' => 0,
    'lang_commons_106' => 0,
    'link_admin' => 0,
    'lang_commons_105' => 0,
    'link_logout' => 0,
    'lang_commons_102' => 0,
    'lang_commons_104' => 0,
    'link_login' => 0,
    'lang_commons_101' => 0,
    'link_register' => 0,
    'lang_commons_103' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b996d645ff96_04054557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b996d645ff96_04054557')) {function content_54b996d645ff96_04054557($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['settings_description']->value;?>
">
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['settings_keywords']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['settings_author']->value;?>
">
	<title><?php echo $_smarty_tpl->tpl_vars['settings_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['settings_css']->value;?>
" rel="stylesheet">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['iMEMBER']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
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
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['iMEMBER']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
" class="img-circle">
							<small><?php echo $_smarty_tpl->tpl_vars['lang_commons_113']->value;?>
 <b><?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
</b> </small><b class="caret"></b></a>
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
								<?php if (('iADMIN')) {?>
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
" class="img-circle"> <small><?php echo $_smarty_tpl->tpl_vars['lang_commons_104']->value;?>
</small> <b class="caret"></b></a>
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
<?php }?><?php }} ?>
