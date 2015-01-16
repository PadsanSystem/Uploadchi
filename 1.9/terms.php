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
require_once LOCALESET.'terms.php';
?>
<!-- Begin page content -->
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo BASEDIR.'index.php'; ?>" title="Home"><?php echo $locale['commons_117']; ?></a></li>
		<li class="active"><?php echo $locale['commons_118']; ?></li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-book"></span><?php echo $locale['terms_100']; ?></div>
		<div class="panel-body">
			<?php echo $locale['terms_101']; ?>
			<p>
			<ol>
				<li><?php echo $locale['terms_102']; ?></li>
				<li><?php echo $locale['terms_103']; ?></li>
				<li><?php echo $locale['terms_104']; ?></li>
				<li><?php echo $locale['terms_105']; ?></li>
			</ol>
			<p>
			<?php echo $locale['terms_106']; ?>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>