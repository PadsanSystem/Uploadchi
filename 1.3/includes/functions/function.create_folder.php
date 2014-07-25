<?php
/*
|-----------------------------------|
|	PadsanSystem					|
|-----------------------------------|
|	Uploadcenter Version			|
|-----------------------------------|
|	Web   : www.PadsanSystem.com	|
|	Email : Info@PadsanSystem.com	|
|	Tel   : +98 - 26 325 45 700		|
|	Fax   : +98 - 26 325 45 701		|
|-----------------------------------|
*/
if(isset($_POST['create_folder'])){	
	$attachment_folder_name=secure_itext($_POST['attachment_folder_name']);
	dbquery("INSERT INTO ".DB_PREFIX."attachments_folders (attachment_folder_name, attachment_folder_step, attachment_folder_user, attachment_folder_time) VALUES ('$attachment_folder_name', '$folder_name', '".$userdata['user_id']."', '".time()."')");
	
	if(isset($folder_name)){
		redirect($REQUEST_URI);
	}else{
		redirect($PHP_SELF);
	}
}

if(isset($action) && isset($folder_name) && ($action=="delete")){
	dbquery("DELETE FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_id='$folder_name'");
}
?>
<!-- Modal / Create Folder -->
<div id="create_folder" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus"></span> Create Folder</h4>
			</div>
			<form class="form-vertical" role="form" method="post">
				<div class="modal-body">
					<div class="form-group col-lg-7">
						<label for="attachment_folder_name" class="control-label">Folder Name</label><br>
						<input id="attachment_folder_name" name="attachment_folder_name" type="text" class="form-control" placeholder="Enter folder name">
					</div>
					<br><br><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button name="create_folder" type="submit" class="btn btn-primary">Save Folder</button>
				</div>
			</form>
		</div>
	</div>
</div>