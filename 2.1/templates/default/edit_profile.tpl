<div class="container">
	{if isset($lang_alert_message)}
		<div class="alert alert-success" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span>&nbsp;{$lang_alert_message}
		</div>
	{elseif isset($error_number)}
		<div class="alert alert-danger" role="alert">
			<p class="text-danger"><b>{$lang_errors_123}&nbsp;{$error_number}</b></p>
			{$lang_error_message}
		</div>
	{/if}
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span>&nbsp;{$lang_edit_profile_108}</div>
		<div class="panel-body">
			<form name="form_edit_profile" class="form-vertical" role="form" method="post" action="edit_profile.php" enctype="multipart/form-data">
				<div class="form-group col-lg-12">
					<label class="control-label">{$lang_edit_profile_100}</label><br>
					<div class="well well-sm">{$user_username}</div>
				</div>
				<div class="form-group col-lg-6">
					<label for="password" class="control-label">{$lang_edit_profile_101}</label><br>
					<input id="password" name="password" type="password" class="form-control" placeholder="{$lang_edit_profile_113}" autocomplete="off">
				</div>
				<div class="form-group col-lg-6">
					<label for="name" class="control-label">{$lang_edit_profile_102}</label><br>
					<input id="name" name="name" type="text" value="{$user_name}" class="form-control" placeholder="{$lang_edit_profile_114}">
				</div>
				<div class="form-group col-lg-6">
					<label for="family" class="control-label">{$lang_edit_profile_103}</label><br>
					<input id="family" name="family" type="text" value="{$user_family}" class="form-control" placeholder="{$lang_edit_profile_115}">
				</div>
				<div class="form-group col-lg-6">
					<label for="email" class="control-label">{$lang_edit_profile_104}</label><br>
					<input id="email" name="email" type="text" value="{$user_email}" class="form-control" placeholder="{$edit_profile_116}">
				</div>
				<div class="form-group col-lg-6">
					<div align="center" class="pull-left">
						<img src="{$img_user_avatar_2}" alt="{$user_username}" title="{$user_username}" class="img-responsive" style="margin-right:10px;">
						{if $img_user_avatar ne 'images/avatars/noavatar.png'}
							<small><a href="edit_profile.php?route=remove_avatar" class="text-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;{$lang_edit_profile_111}</a></small>
						{/if}
					</div>
					<label for="avatar" class="control-label">{$lang_edit_profile_105}</label><br>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
						<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">{$lang_edit_profile_110}</span><span class="fileinput-exists">{$lang_edit_profile_109}</span><input type="file" name="avatar"></span>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3 text-center">
					<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;{$lang_edit_profile_107}</button>
				</div>
			</form>
		</div>
	</div>
</div>