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
require_once 'subheader.php';
require_once INCLUDES.'file_hosting.php';

// Check $download_url not empty
if(!isset($download_url) && !isset($error) && !cleanurl($download_url)) redirect(BASEDIR.'index.php');
if (isset($error) && !isnum($error)) { redirect(BASEDIR.'index.php'); }

if(isset($error)){
	$result=dbquery("SELECT * FROM ".DB_PREFIX."errors_pages WHERE error_page_number='$error'");
	$data=dbarray($result);
	?>
	<!-- Begin page content -->
	<div class="container">
		<div class="alert alert-warning" role="alert">
			<p class="text-danger"><b>Error <?php echo $error; ?></b></p>
			<?php echo $data['error_page_content']; ?>
		</div>
	</div>
	<?php
}else{
?>
<!-- Begin page content -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-cloud-download"></span> Download Link</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-5 col-md-offset-3">
					<input type="text" class="form-control" value="<?php echo $download_url; ?>">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
require_once BASEDIR.'footer.php';
?>