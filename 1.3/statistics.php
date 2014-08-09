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
$files_active=dbcount("(*)", "attachments", "attachment_status='Enable'");
$servers_active=dbcount("(*)", "servers", "server_status='Enable'");
$users_active=dbcount("(*)", "users", "user_status='Enable'");
?>
<!-- Begin page content -->
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo BASEDIR.'index.php'; ?>" title="Home">Home</a></li>
		<li class="active">Statistics</li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-stats"></span> Statistics</div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="badge"><?php echo $files_active; ?></span>
					URL's
				</li>
				<li class="list-group-item">
					<span class="badge"><?php echo $servers_active; ?></span>
					Servers
				</li>
				<li class="list-group-item">
					<span class="badge"><?php echo $users_active; ?></span>
					Users
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>