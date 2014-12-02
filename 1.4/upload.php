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

if(is_uploaded_file($_FILES['local_upload']['tmp_name']))
	require_once INCLUDES.'local_upload.php';
else if(isset($_POST['remote_upload']))
	require_once INCLUDES.'remote_upload.php';
else
	$error=103;

// Check $download_url not empty
if(!isset($download_url) && !isset($error) && !cleanurl($download_url)) redirect(BASEDIR.'index.php');
if (isset($error) && !isnum($error)) { redirect(BASEDIR.'index.php'); }

if(isset($error)){
	$data=show_error($error);
	?>
	<div class="container">
		<div class="alert alert-warning" role="alert">
			<p class="text-danger"><b>Error <?php echo $error; ?></b></p>
			<?php echo $data['error_page_content']; ?>
		</div>
	</div>
	<?php
}else{
	?>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading"><span class="glyphicon glyphicon-cloud-download"></span> Download Link</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="input-group">
							<input name="download_url" type="text" class="form-control" value="<?php echo $download_url; ?>">
							<span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
require_once BASEDIR.'footer.php';
?>