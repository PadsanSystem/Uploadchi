<?php
/*
|-------------------------------|
| PadsanSystem Corporation		|
|-------------------------------|
| Upload Center Version			|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/

?>
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="text-muted text-center"><small><br>Copyright &copy; 2011-2014 Uploadchi.com. All Rights Reserved</small></p>
			</div>
		</div>
	</div>
</div>
<?php
$get_jscripts = array(JAVASCRIPTS.'jquery.js', JAVASCRIPTS.'jquery-ui.min.js', JAVASCRIPTS.'bootstrap.min.js', JAVASCRIPTS.'jasny-bootstrap.min.js', JAVASCRIPTS.'tab.js', JAVASCRIPTS.'modal.js', JAVASCRIPTS.'tooltip.js', JAVASCRIPTS.'fileinput.js', JAVASCRIPTS.'inputmask.js');

compress_file($get_jscripts, 'javascript');
?>
<script src="<?php echo JAVASCRIPTS."cjscript.min.js"; ?>"></script>
</body>
</html>