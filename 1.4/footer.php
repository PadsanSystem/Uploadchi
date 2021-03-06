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
require_once LOCALESET.'footer.php';

$get_jscripts = array(JAVASCRIPTS.'jquery.min.js', JAVASCRIPTS.'jquery-ui.min.js', JAVASCRIPTS.'bootstrap.min.js', JAVASCRIPTS.'jasny-bootstrap.min.js', JAVASCRIPTS.'inputmask.js', JAVASCRIPTS.'datatables/jquery.datatables.min.js', JAVASCRIPTS.'datatables/datatables.bootstrap.min.js', JAVASCRIPTS.'livechat.js', JAVASCRIPTS.'others.js');
compress_file($get_jscripts, 'javascript');
?>
<script src="<?php echo JAVASCRIPTS.'cjscript.min.js'; ?>"></script>
<?php
$page_time_end=microtime();
mysql_close($db_connect);
?>
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="text-muted text-center"><small><br><?php echo $locale['footer_100']; ?></small></p>
				<?php
				if(iADMIN){
					?>
					<p class="text-muted text-center"><small><?php echo $locale['commons_114'].parsebytesize(memory_get_usage(), 2); ?> <?php echo $locale['commons_115'].round($page_time_start-$$page_time_end, 5); ?> <?php echo $locale['commons_116']; ?></small></p>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
</body>
</html>