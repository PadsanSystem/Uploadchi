<div class="container">
	<ol class="breadcrumb">
		<li><a href="{$link_home}" title="{$lang_commons_108}">{$lang_commons_108}</a></li>
		<li class="active">{$lang_register_100}</li>
	</ol>
	{if isset($lang_alert_message)}
		<div class="alert alert-success" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span>&nbsp;{$lang_alert_message}&nbsp;<a href="{$link_login}">{$lang_register_116}</a>
		</div>
	{elseif isset($error_number)}
		<div class="alert alert-danger" role="alert">
			<p class="text-danger"><b>{$lang_errors_123}&nbsp;{$error_number}</b></p>
			{$lang_error_message}
		</div>
	{/if}
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-plus"></span>&nbsp;{$lang_register_100}</div>
		<div class="panel-body">
			<form name="form_register" class="form-vertical" role="form" method="post" action="{$link_register}" enctype="multipart/form-data">
				<div class="form-group col-lg-6">
					<label for="username" class="control-label">{$lang_register_101}</label><br>
					<input id="username" name="username" type="text" value="{$user_username}" class="form-control" placeholder="{$lang_register_114}" autocomplete="off" required>
				</div>
				<div class="form-group col-lg-6">
					<label for="password" class="control-label">{$lang_register_102}</label><br>
					<input id="password" name="password" type="password" class="form-control" placeholder="{$lang_register_113}" autocomplete="off" required>
				</div>
				<div class="form-group col-lg-6">
					<label for="name" class="control-label">{$lang_register_103}</label><br>
					<input id="name" name="name" type="text" value="{$user_name}" class="form-control" placeholder="{$lang_register_112}">
				</div>
				<div class="form-group col-lg-6">
					<label for="family" class="control-label">{$lang_register_104}</label><br>
					<input id="family" name="family" type="text" value="{$user_family}" class="form-control" placeholder="{$lang_register_111}">
				</div>
				<div class="form-group col-lg-6">
					<label for="email" class="control-label">{$lang_register_105}</label><br>
					<input id="email" name="email" type="text" value="{$user_email}" class="form-control" placeholder="{$lang_register_110}" required>
				</div>
				<div class="form-group col-lg-6">
					<label for="avatar" class="control-label">{$lang_register_106}</label><br>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
						<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">{$lang_register_108}</span><span class="fileinput-exists">{$lang_register_109}</span><input type="file" name="avatar"></span>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3 text-center">
					<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-user"></span>&nbsp;{$lang_register_107}</button>
				</div>
			</form>
		</div>
	</div>
</div>