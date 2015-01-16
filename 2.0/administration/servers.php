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
		if(isset($count)){
			?>
			<div class="col-lg-12">
				<div class="alert alert-success" role="alert"><li class="glyphicon glyphicon-envelope"></li> <?php echo number_format($count); ?> Email sent successfully.</div>
			</div>
			<?php
		}
		?>
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Server Management</div>
				<div class="panel-body">
					<ul class="nav nav-tabs" id="myTab" style="border-bottom:0">
						<li class="active"><a href="#new_server" data-toggle="tab"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;New Server</a></li>
						<li><a href="#list_server" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;List Server</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="new_server">
							<div class="panel panel-success" style="border-top-left-radius:0">
								<div class="panel-body">
									<?php
									require_once 'new_server.php';
									?>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="list_server">
							<div class="panel panel-success" style="border-top-left-radius:0">
								<div class="panel-body">
									<?php
									require_once 'list_server.php';
									?>
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