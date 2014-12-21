<?php
/*
|-------------------------------|
| PadsanCMS						|
|-------------------------------|
| UploadCenter Version v1.0		|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
require_once 'subheader.php';
?>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<h1>
				Welcome to Uploadchi.com
				<br>
				<small class="text-success">Easily store, manage and share files with anyone</small>
			</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
			<div class="well well-lg">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<small>
							<ul class="no-more-left">
								<li>even more place to store and capture all your life's fleeting moments</li>
								<li>with SSL data encryption your data will stay protected</li>
								<li>let your friends instantly download files, which you send them</li>
								<li>absolutely no interruptions</li>
								<li>enjoy better performance and speed</li>
								<li>restore even deleted files</li>
							</ul>
						</small>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12" align="center">
						<img src="<?php echo IMAGES.'banners.png'; ?>" alt="Easily store, manage and share files with anyone" title="Easily store, manage and share files with anyone" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
	<ul class="nav nav-tabs" id="myTab" style="border-bottom:0">
	  <li class="active"><a href="#local_upload" data-toggle="tab"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;Local Upload</a></li>
	  <li><a href="#remote_upload" data-toggle="tab"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp;Remote Upload</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="local_upload">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
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
				</div>
			</div>
		</div>
		<div class="tab-pane" id="remote_upload">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<form name="form_remote_upload" class="form-horizontal" role="form" method="post" action="<?php echo BASEDIR.'upload.php'; ?>">
						<div class="form-group">
							<div class="col-lg-8 col-lg-offset-2 text-center">
								<div class="input-group">
									<input name="remote_upload" type="text" class="form-control">
									<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
								</div>
								<br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-4 col-lg-offset-4 text-center">
								<button id="send_file" name="send_file" type="submit button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-cloud-upload"></span>&nbsp;&nbsp;Transfer Links</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>