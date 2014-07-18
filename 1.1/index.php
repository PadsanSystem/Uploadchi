<?php
require_once("subheader.php");
require_once("includes/file_hosting.php");
?>
<div class="container">
	<img src="images/cloud2.jpg" alt="Easily store, manage and share files with anyone" title="Easily store, manage and share files with anyone" class="img-responsive pull-right">
	<h1>
		Welcome to Uploadchi.com
		<br>
		<small class="text-success">Easily store, manage and share files with anyone</small>
	</h1>
	<br>
	<ul class="nav nav-tabs" id="myTab" style="border-bottom:0">
	  <li class="active"><a href="#upload_file" data-toggle="tab">Upload Files</a></li>
	  <li><a href="#download_link" data-toggle="tab">Download From Links</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="upload_file">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="post" action="download.php" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-lg-12">
								<input id="file_hosting" name="file_hosting" type="file">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-3">
								<button id="send_file" name="send_file" type="submit" class="btn btn-danger">Upload Files</button>
							</div>
						</div>
					</form>
				</div>
				<div class="panel-heading" style="border-top-left-radius:0; border-top-right-radius:0"><span class="glyphicon glyphicon-cloud-upload"> UploadFiles</span></div>
			</div>
		</div>
		<div class="tab-pane" id="download_link">
			<div class="panel panel-success" style="border-top-left-radius:0">
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="post" action="index.php">
						<div class="form-group">
							<div class="col-lg-12">
								<input id="link_hosting" name="link_hosting" type="file">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-3">
								<button id="send_link" name="send_link" type="submit" class="btn btn-danger">Upload Files</button>
							</div>
						</div>
					</form>
				</div>
				<div class="panel-heading" style="border-top-left-radius:0; border-top-right-radius:0"><span class="glyphicon glyphicon-cloud-download"> DownloadFromLinks</span></div>
			</div>
		</div>
	</div>
	<script>
	  $(function () {
		$('#myTab a:last').tab('show')
	  })
	</script>
</div>
<?php
require_once("footer.php");
?>