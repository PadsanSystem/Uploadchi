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

if(!iMEMBER) { redirect(BASEDIR.'index.php'); }

require_once FUNCTIONS.'create_folder.php';
require_once FUNCTIONS.'remove.php';
require_once FUNCTIONS.'diskspace.php';

if(isset($action) && ($action=='delete')) { redirect($_SERVER['PHP_SELF']); }
?>

<!-- Begin page content -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;My Dashboard</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-3">
					<?php
					require_once PAGES.'filemanager_accordion_menu.php';
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="well">
								<?php
								$space=10737418240;
								$allocate=user_space()['size'];
								$remaining=round(($allocate*100)/$space, 2);
								?>
								<h5><span class="glyphicon glyphicon-hdd"></span> Disk space<br><small><?php echo parsebytesize(user_space()['size'], 2); ?> of <?php echo parsebytesize($space, 2); ?></small></h5>
								<div class="progress">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $remaining; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $remaining; ?>%">
										<small><?php echo $remaining; ?>%</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<?php
					if(isset($_GET['route']) && ($_GET['route']=='file_explorer'))
						require_once PAGES.'filemanager_file_explorer.php';
					else if(isset($_GET['route']) && ($_GET['route']=='local_upload'))
						require_once PAGES.'filemanager_local_upload.php';
					else if(isset($_GET['route']) && ($_GET['route']=='remote_files'))
						require_once PAGES.'filemanager_remote_files.php';
					else if(isset($_GET['route']) && ($_GET['route']=='ftp_storage'))
						require_once PAGES.'filemanager_ftp_storage.php';
					else if(isset($_GET['route']) && ($_GET['route']=='settings'))
						require_once PAGES.'filemanager_settings.php';
					else
						require_once PAGES.'filemanager_file_explorer.php';
					?>
				</div>	
			</div>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>