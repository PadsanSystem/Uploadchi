<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$settings_description}">
	<meta name="keywords" content="{$settings_keywords}">
	<meta name="author" content="{$settings_author}">
	<title>{$settings_title}&nbsp;{$seo_title}</title>
	<link href="{$settings_css}" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
{if $visit_page ne 'login'}
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{$link_home}" title="{$title}">{$settings_title}</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{$link_home}" title="{$lang_commons_108}"><span class="glyphicon glyphicon-home"></span>&nbsp;{$lang_commons_108}</a></li>
					<li><a href="{$link_terms}" title="{$lang_commons_109}"><span class="glyphicon glyphicon-book"></span>&nbsp;{$lang_commons_109}</a></li>
					<li><a href="{$link_statistics}" title="{$lang_commons_110}"><span class="glyphicon glyphicon-stats"></span>&nbsp;{$lang_commons_110}</a></li>
					<li><a href="{$link_about_us}" title="{$lang_commons_111}"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;{$lang_commons_111}</a></li>
					<li><a href="{$link_contact_us}" title="{$lang_commons_112}"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;{$lang_commons_112}</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					{if $iMEMBER}
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="{$img_user_avatar_1}" class="img-circle">
								<small>{$lang_commons_113}&nbsp;<b>{$user_username}</b></small>&nbsp;<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><img src="{$img_user_avatar_3}" class="img-responsive"></a></li>
								<li class="divider"></li>
								<li><a href="{$link_edit_profile}"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;{$lang_commons_107}</a></li>
								<li><a href="{$link_dashboard}"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;{$lang_commons_106}</a></li>
								{if $iADMIN}
									<li><a href="{$link_admin}"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;{$lang_commons_105}</a></li>
								{/if}
								<li class="divider"></li>
								<li><a href="{$link_logout}"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;{$lang_commons_102}</a></li>
							</ul>
						</li>
					{else}
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{$img_user_avatar_1}" title="{$lang_commons_104}" alt="{$lang_commons_104}" class="img-circle">&nbsp;<small>{$lang_commons_104}</small>&nbsp;<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{$link_login}" title="{$lang_commons_101}"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;{$lang_commons_101}</a></li>
								<li><a href="{$link_register}" title="{$lang_commons_103}"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;{$lang_commons_103}</a></li>
							</ul>
						</li>
					{/if}
				</ul>
			</div>
		</div>
	</div>
{/if}