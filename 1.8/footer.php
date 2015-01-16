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
?>
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h5 class="text-muted text-center"><small><a href="http://blog.uploadchi.com">Blog</a></small></h5>
				<p class="text-muted text-center"><small><?php echo $locale['footer_100']; ?></small></p>
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
<script type="text/JavaScript">
	function callback(){
		if(req.readyState == 4){
			if(req.status == 200){
				eval(req.responseText);
			} else {
				// Error
			}
		}
	};
	var req = new XMLHttpRequest();
	req.onload = callback;
	req.open("get", "<?php echo JAVASCRIPTS.'cjscript.min.js'; ?>", true);
	req.send();
</script>
<?php
$page_time_end=microtime();
mysql_close($db_connect);
?>
</body>
</html>