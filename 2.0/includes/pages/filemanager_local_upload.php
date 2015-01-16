<form name="form_local_upload" class="form-horizontal" role="form" method="post" action="<?php echo BASEDIR.'upload.php'; ?>" enctype="multipart/form-data">
	<div class="form-group">
		<div class="col-lg-8 col-lg-offset-2 text-center">
			<div class="fileinput fileinput-new input-group" data-provides="fileinput">
			  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
			  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Browse</span><span class="fileinput-exists">Change</span><input type="file" name="local_upload"></span>
			</div>
			<br>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-4 col-lg-offset-4 text-center">
			<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;Upload Files</button>
		</div>
	</div>
</form>