<div class="container">
	{if isset($error_number)}
		<div class="alert alert-danger" role="alert">
			<p class="text-danger"><b>{$lang_errors_123}&nbsp;{$error_number}</b></p>
			{$lang_error_message}&nbsp;<a href="{$link_home}">{$lang_errors_122}</a>
		</div>
	{else}
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;{$lang_upload_100}</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="input-group">
						<input name="download_url" type="text" class="form-control" value="{$download_url}">
						<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
					</div>
					<br>
				</div>
			</div>
		</div>
	</div>
	{/if}
</div>