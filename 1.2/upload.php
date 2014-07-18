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
require_once "subheader.php";
require_once INCLUDES."file_hosting.php";
$download="http://www.".$_SERVER['SERVER_NAME']."/download.php?url=".$name;
?>
<!-- Begin page content -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-cloud-download"></span> Download Link</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-5 col-md-offset-3">
					<input type="text" class="form-control" value="<?php echo $download; ?>">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require_once BASEDIR."footer.php";
?>