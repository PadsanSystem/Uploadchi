<?php /*%%SmartyHeaderCode:1399654b98e93a28f39-74727154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bd25df26f1943c9d9e382a8083d2937ae3bc125' => 
    array (
      0 => 'templates\\default\\subheader.tpl',
      1 => 1421446624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1399654b98e93a28f39-74727154',
  'variables' => 
  array (
    'settings_description' => 0,
    'settings_keywords' => 0,
    'settings_author' => 0,
    'settings_title' => 0,
    'settings_css' => 0,
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
    'avatar_2' => 0,
    'no_avatar' => 0,
    'lang_commons_113' => 0,
    'user_username' => 0,
    'avatar_4' => 0,
    'link_edit_profile' => 0,
    'lang_commons_107' => 0,
    'link_dashboard' => 0,
    'lang_commons_106' => 0,
    'link_admin' => 0,
    'lang_commons_105' => 0,
    'link_logout' => 0,
    'lang_commons_102' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b98e93b44c16_35049184',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b98e93b44c16_35049184')) {function content_54b98e93b44c16_35049184($_smarty_tpl) {?><!DOCTYPE html>
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
	<!-- Fixed navbar -->
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php" title="">Uploadchi</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php" title="Home"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
					<li><a href="terms.php" title="Terms"><span class="glyphicon glyphicon-book"></span>&nbsp;Terms</a></li>
					<li><a href="statistics.php" title="Statistics"><span class="glyphicon glyphicon-stats"></span>&nbsp;Statistics</a></li>
					<li><a href="aboutus.php" title="About Us"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;About Us</a></li>
					<li><a href="contactus.php" title="Contact Us"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="images/avatars/_2." class="img-circle">
							<img src="images/avatars/noavatar_small.png" class="img-circle">
						<small>Hi,  <b></b> </small><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><img src="images/avatars/_4." class="img-responsive"></a></li>
							<li class="divider"></li>
							<li><a href="edit_profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Edit Profile</a></li>
							<li><a href="dashboard.php"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;My Dashboard</a></li>
															<li><a href="administration/index.php?aid=n1csq1hq5s6j5uvl0a08ga3835"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;Control Panel</a></li>
														<li class="divider"></li>
							<li><a href="index.php?logout=yes"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Log out</a></li>
						</ul>
					</li>
									</ul>
			</div>
		</div>
	</div>
<?php }} ?>
