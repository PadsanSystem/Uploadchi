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
if (!iADMIN || !defined("iAUTH") || !isset($aid) || $aid != iAUTH) { redirect('../index.php'); }
if(isset($_POST['submit'])){
	$setting_title=secure_itext($_POST['setting_title']);
	$setting_siteurl=cleanurl($_POST['setting_siteurl']);
	$setting_description=secure_itextarea($_POST['setting_description']);
	$setting_keywords=secure_itextarea($_POST['setting_keywords']);
	dbquery("UPDATE ".DB_PREFIX."settings SET setting_title='$setting_title', setting_siteurl='$setting_siteurl', setting_description='$setting_description', setting_keywords='$setting_keywords'");
	$error=0;
}
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-bar-chart-o fa-fw"></i> Management</h3>
		</div>
	</div>
	<div class="row">
		<?php
		if(isset($error) && $error==0){
			?>
			<div class="col-lg-12">
				<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-info-sign"></span> Configuration update successfully.</div>
			</div>
			<?php
		}
		?>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Settings</div>
				<div class="panel-body">
					<ul class="nav nav-tabs" id="myTab" style="border-bottom:0">
						<li class="active"><a href="#general" data-toggle="tab"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;General</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="add_server">
							<div class="panel panel-success" style="border-top-left-radius:0">
								<div class="panel-body">
									<?php
									$result_settings=dbquery("SELECT * FROM ".DB_PREFIX."settings LIMIT 1");
									$data_settings=dbarray($result_settings);
									?>
									<form name="form_settings" class="form-vertical" role="form" method="post" action="<?php echo ADMIN.'settings.php'.$aidlink; ?>">
										<div class="form-group col-lg-12">
											<label for="setting_title" class="control-label">Site Name</label><br>
											<input name="setting_title" type="text" value="<?php echo $data_settings['setting_title']; ?>" class="form-control" placeholder="Enter site name" required>
										</div>
										<div class="form-group col-lg-12">
											<label for="setting_siteurl" class="control-label">Site URL</label><br>
											<input name="setting_siteurl" type="text" value="<?php echo $data_settings['setting_siteurl']; ?>" class="form-control" placeholder="Enter site url" required>
										</div>
										<div class="form-group col-lg-12">
											<label for="setting_description" class="control-label">Description</label><br>
											<textarea name="setting_description" class="form-control" placeholder="Enter description of website" rows="3"><?php echo $data_settings['setting_description']; ?></textarea>
										</div>
										<div class="form-group col-lg-12">
											<label for="setting_keywords" class="control-label">Keywords</label><br>
											<textarea name="setting_keywords" class="form-control" placeholder="Enter keywords of website" rows="3"><?php echo $data_settings['setting_keywords']; ?></textarea>
										</div>
										<div class="col-md-6 col-md-offset-3 text-center">
											<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> Update Settings</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require_once ADMIN.'footer.php';
?>