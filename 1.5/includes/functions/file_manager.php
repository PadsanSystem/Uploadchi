<div class="col-lg-7">
	<div class="btn-group">
		<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Home</button>
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#" data-toggle="modal" data-target="#create_folder"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Create Folder</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;Create File</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;Copy</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-move"></span>&nbsp;&nbsp;Move</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete</a></li>
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-share"></span>&nbsp;&nbsp;Share</button>
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Email</a></li>
			<li><a href="<?php echo BASEDIR.'dashboard.php?action=compress#file_manager'; ?>"><span class="glyphicon glyphicon-compressed"></span>&nbsp;&nbsp;Compress</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;Password</a></li>
		</ul>
	</div>
</div>
<?php
if(isset($folder_name)){
	$result_attachment_folder_step=dbquery("SELECT * FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_user='".$userdata['user_id']."' AND attachment_folder_id='$folder_name'");
	
	$data_attachment_folder_step=dbarray($result_attachment_folder_step);
	
	if($data_attachment_folder_step['attachment_folder_step']>0)
		$up_one_level="?folder_name=".$data_attachment_folder_step['attachment_folder_step'];
	else
		$up_one_level='';
	
	?>
	<div class="col-lg-7">
		<br><a href="<?php echo $_SERVER['PHP_SELF'].$up_one_level; ?>" role="button"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Up One Level</a>
	</div>
	<?php
}
?>
<form name="frm_filemanager" method="post" action="">
	<table class="table table-striped table-bordered table-hover" id="filemanager">
		<thead>
			<tr>
				<td class="text-center col-lg-1"><input name="no[]" type="checkbox"/></td>
				<td class="text-left col-lg-5"><a href="#"><small>Name</small></a></td>
				<td class="text-left col-lg-2"><a href="#"><small>Date modified</small></a></td>
				<td class="text-left col-lg-1"><a href="#"><small>Type</small></a></td>
				<td class="text-left col-lg-1"><a href="#"><small>Size</small></a></td>
			</tr>
		</thead>
		<tbody>
			<?php
			if(isset($folder_name))
				$query_attachment_folder="AND attachment_folder_step='$folder_name'";
			else
				$query_attachment_folder="AND attachment_folder_step IS NULL";
			
			$result_attachment_folder=dbquery("SELECT * FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_user='".$userdata['user_id']."' $query_attachment_folder");
			if(dbrows($result_attachment_folder)!=0){
				while($data_attachment_folder=dbarray($result_attachment_folder)){
					?>
					<tr>
						<td class="text-center col-lg-1"><input name="no[]" type="checkbox"/></td>
						<td class="text-left col-lg-5">
							<a href="<?php echo $_SERVER['PHP_SELF']."?folder_name=".$data_attachment_folder['attachment_folder_id']; ?>">
								<img src="<?php echo IMAGES_TYPES."file.png"; ?>" alt="File folder" title="File folder"/>
								<small><?php echo $data_attachment_folder['attachment_folder_name']; ?></small>
							</a>
						</td>
						<td class="text-center col-lg-2 text-muted">
							<small><?php echo date("m/d/Y H:m:s A", $data_attachment_folder['attachment_folder_time']); ?></small>
						</td>
						<td class="text-center col-lg-1 text-muted">
							<small>File folder</small>
						</td>
						<td class="text-center col-lg-1"></td>
					</tr>
					<?php
				}
			}else{
				$count_list=-1;
			}
			if(isset($folder_name)){
				$query_attachment="AND a.attachment_folder='$folder_name'";
			}else{
				$query_attachment="AND a.attachment_folder IS NULL";
			}
			$result_attachment=dbquery("SELECT a.*, s.* FROM ".DB_PREFIX."attachments a, ".DB_PREFIX."servers s WHERE a.attachment_status='Enable' AND a.attachment_user='".$userdata['user_id']."' AND a.attachment_server=s.server_id $query_attachment");
			if(dbrows($result_attachment)!=0){
				while($data_attachment=dbarray($result_attachment)){
					$attachment_link="http://www.".$data_attachment['server_name']."/download.php?url=".$data_attachment['attachment_uid'];
					?>
					<tr>
						<td class="text-center col-lg-1"><input name="no[<?php echo $data_attachment['attachment_id']; ?>]" type="checkbox"/></td>
						<td class="text-left col-lg-5">
							<a href="<?php echo BASEDIR."download.php?url=".$data_attachment['attachment_uid']; ?>" target="_blank">
							<img src="<?php echo IMAGES_TYPES.get_type($data_attachment['attachment_uid'], 'post').".png"; ?>"/>
							<small><?php echo trimlink($data_attachment['attachment_uid'], 50); ?></small>
							</a>
						</td>
						<td class="text-center col-lg-2 text-muted">
							<small><?php echo date("m/d/Y H:m:s A", $data_attachment['attachment_time']); ?></small>
						</td>
						<td class="text-center col-lg-1 text-muted">
							<small><?php echo strtoupper(get_type($data_attachment['attachment_uid'], 'post'))." File"; ?></small>
						</td>
						<td class="text-center col-lg-1 text-muted">
							<small><?php echo parsebytesize($data_attachment['attachment_size'], 2); ?></small>
						</td>
					</tr>
					<?php
				}
			}else{
				if($count_list==-1){
					?>
					<tr>
						<td colspan="6" class="text-center col-lg-1 text-muted">
							<small>This folder is empty.</small>
						</td>
					</tr>
					<?php
				}
			}
			?>
		</tbody>
	</table>
</form>