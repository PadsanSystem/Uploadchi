{if iMEMBER}
	<form name="form_{$lang_upload_103}" class="form-horizontal" role="form" method="post" action="{$link_upload}" enctype="multipart/form-data">
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
				  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
				  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">{$lang_upload_107}</span><span class="fileinput-exists">{$lang_upload_108}</span><input type="file" name="{$lang_upload_103}"></span>
				</div>
				<br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-4 col-lg-offset-4 text-center">
				<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;{$lang_upload_105}</button>
			</div>
		</div>
	</form>
{else}
	<form name="form_{$lang_upload_103}" class="form-horizontal" role="form" method="post" action="{$link_upload}" enctype="multipart/form-data">
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
				  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span></div>
				  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">{$lang_upload_107}</span><span class="fileinput-exists">{$lang_upload_108}</span><input type="file" name="{$lang_upload_103}"></span>
				</div>
				<br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-4 col-lg-offset-4 text-center">
				<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;{$lang_upload_105}</button>
			</div>
		</div>
	</form>
{/if}