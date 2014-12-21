<div class="row">
	<div class="col-lg-12">
		<div class="list-group">
			<a href="<?php echo BASEDIR.'dashboard.php?route=file_explorer'; ?>" class="list-group-item <?php if(($_GET['route']=='file_explorer') || (!isset($_GET['route']))) echo 'active'; ?>"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;File Explorer</a>
			<a href="<?php echo BASEDIR.'dashboard.php?route=settings'; ?>" class="list-group-item <?php if($_GET['route']=='settings') echo 'active'; ?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Settings</a>
		</div>
	</div>
</div>