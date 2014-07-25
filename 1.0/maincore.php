<?php
require_once("subheader.php");
?>
<div class="container">
	<ul class="nav nav-tabs" id="myTab">
		<li class="active"><a href="#files">Upload From Files</a></li>
		<li><a href="#links">Download From Links</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="files">...</div>
		<div class="tab-pane" id="links">...</div>
	</div>
	<script>
		$('#myTab a').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
		})
	</script>
</div>
<?php
require_once("footer.php");
?>