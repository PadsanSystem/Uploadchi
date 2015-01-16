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
require_once LOCALESET.'aboutus.php';
?>
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo BASEDIR.'index.php'; ?>" title="<?php echo $locale['commons_108']; ?>"><?php echo $locale['commons_108']; ?></a></li>
		<li class="active"><?php echo $locale['aboutus_100']; ?></li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-info-sign"></span><?php echo $locale['aboutus_101']; ?></div>
		<div class="panel-body">
			<div class="form-group col-lg-5 text-center">
				<img src="<?php echo IMAGES."location_corporation.jpg"; ?>" alt="<?php echo $locale['aboutus_102']; ?>" title="<?php echo $locale['aboutus_102']; ?>" class="img-responsive img-thumbnail">
			</div>
			<div class="form-group col-lg-5">
				<blockquote>
					<address>
						<strong><?php echo $locale['aboutus_103']; ?></strong>
						<small><?php echo $locale['aboutus_104']; ?></small>
					</address>
				</blockquote>
				<?php echo $locale['aboutus_110']; ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php echo $locale['aboutus_111']; ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;
				<?php echo $locale['aboutus_112']; ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;
				<?php echo $locale['aboutus_113']; ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;
				<?php echo $locale['aboutus_114']; ?>
				<br><br><br><br>
				<p><?php echo $locale['aboutus_105']; ?></p>
				<img src="<?php echo IMAGES."facebook.png"; ?>" alt="<?php echo $locale['aboutus_106']; ?>" title="<?php echo $locale['aboutus_106']; ?>">
				<img src="<?php echo IMAGES."twitter.png"; ?>" alt="<?php echo $locale['aboutus_107']; ?>" title="<?php echo $locale['aboutus_107']; ?>">
				<img src="<?php echo IMAGES."google.png"; ?>" alt="<?php echo $locale['aboutus_108']; ?>" title="<?php echo $locale['aboutus_108']; ?>">
				<img src="<?php echo IMAGES."linkedin.png"; ?>" alt="<?php echo $locale['aboutus_109']; ?>" title="<?php echo $locale['aboutus_109']; ?>">
			</div>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>