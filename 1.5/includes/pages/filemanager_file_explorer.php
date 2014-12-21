<ul class="nav nav-tabs" id="file_explorer" style="border-bottom:0">
	<li class="active"><a href="#local_upload" data-toggle="tab"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;Local Upload</a></li>
	<li><a href="#remote_upload" data-toggle="tab"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;&nbsp;Remote Upload</a></li>
	<li><a href="#ftp_storage" data-toggle="tab"><span class="glyphicon glyphicon-transfer"></span>&nbsp;&nbsp;FTP Storage</a></li>
	<li><a href="#file_manager" data-toggle="tab"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;File Manager</a></li>
</ul>
<div class="tab-content">
	<div class="tab-pane active" id="local_upload">
		<div class="panel panel-success" style="border-top-left-radius:0">
			<div class="panel-body">
				<?php
				require_once PAGES.'filemanager_local_upload.php';
				?>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="remote_upload">
		<div class="panel panel-success" style="border-top-left-radius:0">
			<div class="panel-body">
				<?php
				require_once PAGES.'filemanager_remote_upload.php';
				?>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="ftp_storage">
		<div class="panel panel-success" style="border-top-left-radius:0">
			<div class="panel-body">
				<?php
				require_once PAGES.'filemanager_ftp_storage.php';
				?>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="file_manager">
		<div class="panel panel-success" style="border-top-left-radius:0">
			<div class="panel-body">
				<?php
				require_once FUNCTIONS.'file_manager.php';
				?>
			</div>
		</div>
	</div>
</div>