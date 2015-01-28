<div class="login">
	<div class="container-fluid">
		<form name="form_login" role="form" method="post" action="{$link_login}">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">{$lang_login_100}</h3>
						</div>
						<div class="panel-body">
							{if isset($error_number)}
								<div class="alert alert-danger" role="alert">
									<p class="text-danger"><b>{$lang_errors_123}&nbsp;{$error_number}</b></p>
									{$lang_error_message}
								</div>
							{/if}
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="{$lang_login_101}" name="username" type="text" required autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="{$lang_login_102}" name="password" type="password" autocomplete="off" required>
								</div>
								<div class="checkbox">
									<label><input name="remember" type="checkbox" value="1">{$lang_login_104}</label>
								</div>
								<button name="login" type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;{$lang_login_103}</button>
							</fieldset>
						</div>
					</div>
					<small><a href="{$link_home}">{$lang_login_106}</a></small>
				</div>
			</div>
		</form>
	</div>
</div>