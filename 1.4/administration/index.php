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
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div>
	<?php
	$result_files_count=dbcount('(*)', $table='attachments', $conditions='');
	$result_files_views_count=dbcount('(*)', $table='attachments_views', $conditions='');
	$result_users_count=dbcount('(*)', $table='users', $conditions='');
	?>
	<div class="row">
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-upload fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">
								<h5><?php echo number_format($result_files_count); ?></h5>
							</div>
							<div>Attachments</div>
						</div>
					</div>
				</div>
				<a href="<?php echo ADMIN.'attachments.php'.$aidlink; ?>">
					<div class="panel-footer">
						<span class="pull-left">Management</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-eye fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">
								<h5><?php echo number_format($result_files_views_count); ?></h5>
							</div>
							<div>Attachments Views</div>
						</div>
					</div>
				</div>
				<a href="<?php echo ADMIN.'attachments_views.php'.$aidlink; ?>">
					<div class="panel-footer">
						<span class="pull-left">Management</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-users fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">
								<h5><?php echo number_format($result_users_count); ?></h5>
							</div>
							<div>Users</div>
						</div>
					</div>
				</div>
				<a href="<?php echo ADMIN.'users.php'.$aidlink; ?>">
					<div class="panel-footer">
						<span class="pull-left">Management</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-dollar fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">
								<h5>0 $</h5>
							</div>
							<div>Payments</div>
						</div>
					</div>
				</div>
				<a href="<?php echo ADMIN.'payments.php'.$aidlink; ?>">
					<div class="panel-footer">
						<span class="pull-left">Management</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<?php
require_once ADMIN.'footer.php';
?>