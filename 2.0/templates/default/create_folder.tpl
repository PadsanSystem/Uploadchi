<div id="create_folder" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">
				<span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;{$lang_file_manager_100}
				</h4>
			</div>
			<form class="form-vertical" role="form" method="post">
				<div class="modal-body">
					<div class="form-group col-lg-7">
						<label for="attachment_folder_name" class="control-label">{$lang_file_manager_118}}</label><br>
						<input id="attachment_folder_name" name="attachment_folder_name" type="text" class="form-control" placeholder="{$lang_file_manager_117}" >
					</div>
					<br><br><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">{$lang_file_manager_119}</button>
					<button name="create_folder" type="submit" class="btn btn-primary">{$lang_file_manager_100}</button>
				</div>
			</form>
		</div>
	</div>
</div>