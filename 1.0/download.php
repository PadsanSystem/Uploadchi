<?php
require_once("subheader.php");
require_once("includes/file_hosting.php");
?>
<div class="container">
	<div class="panel panel-default col-lg-4 pull-right">
		<div class="panel-body">
			
		</div>
		<div class="panel-heading" style="border-top-left-radius:0; border-top-right-radius:0"><span class="glyphicon glyphicon-cloud-download"> Advertising</span></div>
	</div>
	<div class="panel panel-success">
		<div class="panel-body">
			<div class="col-lg-7">
				<h4>Name</h4>
			</div>
			<div class="col-lg-7">
				<h5>name of file</h5>
			</div>
			<div class="col-lg-7">
				<h4>Address</h4>
			</div>
			<div class="col-lg-7">
				<input name="address" type="text" class="form-control" id="address" value="http://server1.uploadchi.com/ss.zip">
			</div>
			<div class="col-lg-7">
				<h4>Size</h4>
			</div>
			<div class="col-lg-7">
				<h5>size of file</h5>
			</div>
			<div class="col-lg-7">
				<h4>Downloaded</h4>
			</div>
			<div class="col-lg-7">
				<h5>size of file</h5>
			</div>
			<div class="col-lg-7">
				<h4>Publish Date</h4>
			</div>
			<div class="col-lg-7">
				<h5>size of file</h5>
			</div>
			<div class="col-lg-7">
				<h4>Last Download</h4>
			</div>
			<div class="col-lg-7">
				<h5>size of file</h5>
			</div>
			<div class="col-lg-offset-5 col-lg-2">
				<a href="http://78.47.248.97/archive/<?php echo $upload_name;?>" class="btn btn-danger btn-lg"> Download File</a>
			</div>
		</div>
		<div class="panel-heading" style="border-top-left-radius:0; border-top-right-radius:0"><span class="glyphicon glyphicon-cloud-download"> Download</span></div>
	</div>
</div>
<?php
require_once("footer.php");
?>