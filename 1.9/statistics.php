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
require_once LOCALESET.'commons.php';
require_once LOCALESET.'statistics.php';
?>
<!-- Begin page content -->
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo BASEDIR.'index.php'; ?>" title="Home"><?php echo $locale['commons_117']; ?></a></li>
		<li class="active"><?php echo $locale['commons_119']; ?></li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-stats"></span><?php echo $locale['statistics_100']; ?></div>
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<span class="badge"><?php echo number_format($database->count("attachments")); ?></span><?php echo $locale['statistics_101']; ?>
				</li>
				<li class="list-group-item">
					<span class="badge"><?php echo number_format($database->count('attachments_views')); ?></span><?php echo $locale['statistics_102']; ?>
				</li>
				<li class="list-group-item">
					<span class="badge"><?php echo number_format($database->count('servers')); ?></span><?php echo $locale['statistics_103']; ?>
				</li>
				<li class="list-group-item">
					<span class="badge"><?php echo number_format($database->count('users')); ?></span><?php echo $locale['statistics_104']; ?>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>