<?php
/*
|-----------------------------------|
|	PadsanSystem					|
|-----------------------------------|
|	Uploadcenter Version			|
|-----------------------------------|
|	Web   : www.PadsanSystem.com	|
|	Email : Info@PadsanSystem.com	|
|	Tel   : +98 - 26 325 45 700		|
|	Fax   : +98 - 26 325 45 701		|
|-----------------------------------|
*/
require_once "subheader.php";
if(iMEMBER){
	require_once FUNCTIONS."function.create_folder.php";
	require_once FUNCTIONS."function.file_info.php";
	require_once FUNCTIONS."function.remove.php";

	if(isset($folder_name) && !isnum($folder_name)) redirect($REQUEST_URI);
	if(isset($action) && ($folder_name!="delete")) redirect($PHP_SELF);

	
	?>

	<!-- Begin page content -->
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;File Manager</div>
			<div class="panel-body">
				<div class="col-lg-12">
					<form class="form-horizontal" role="form" method="post" action="filemanager.php">
						<div class="form-group col-lg-7">
							<a href="#" class="btn btn-default btn-info" data-toggle="modal" data-target="#create_folder"><span class="glyphicon glyphicon-plus"></span> Create Folder</a>
							<a href="#" class="btn btn-default btn-info" role="button"><span class="glyphicon glyphicon-edit"></span> Rename</a>
							<a href="#" class="btn btn-default btn-info" role="button"><span class="glyphicon glyphicon-remove"></span> Delete</a>
							<a href="#" class="btn btn-default btn-info" role="button"><span class="glyphicon glyphicon-tag"></span> Copy</a>
							<a href="#" class="btn btn-default btn-info" role="button"><span class="glyphicon glyphicon-move"></span> Move</a>
						</div>
						<div class="form-group col-lg-5 pull-right">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search filename">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button">Search</button>
								</span>
							</div>
						</div>
						<?php
						if(isset($folder_name)){
							$result_attachment_folder_step=dbquery("SELECT * FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_user='".$userdata['user_id']."' AND attachment_folder_id='$folder_name'");
							$data_attachment_folder_step=dbarray($result_attachment_folder_step);
							if($data_attachment_folder_step['attachment_folder_step']==0){
								$up_one_level="";
							}else{
								$up_one_level="?folder_folder_name=".$data_attachment_folder_step['attachment_folder_step'];
							}
							?>
							<div class="form-group col-lg-7">
								<a href="<?php echo $_SERVER['PHP_SELF'].$up_one_level; ?>" role="button"><span class="glyphicon glyphicon-folder-open"></span> &nbsp;&nbsp;Up One Level</a>
							</div>
							<?php
						}
						?>
						<div class="table-responsive">
							<table class="table table-bordered col-lg-12">
								<tr class="active">
									<td class="text-center col-lg-5">
										<a href="#">Name</a>
									</td>
									<td class="text-center col-lg-1">
										<a href="#">Date Modified</a>
									</td>
									<td class="text-center col-lg-1">
										<a href="#">Type</a>
									</td>
									<td class="text-center col-lg-1">
										<a href="#">Size</a>
									</td>
									<td class="text-center col-lg-1">
										<a href="#">Operation</a>
									</td>
								</tr>
								<?php
								if(isset($folder_name)){
									$query_attachment_folder="AND attachment_folder_step='$folder_name'";
								}else{
									$query_attachment_folder="AND attachment_folder_step='0'";
								}
								$result_attachment_folder=dbquery("SELECT * FROM ".DB_PREFIX."attachments_folders WHERE attachment_folder_user='".$userdata['user_id']."' $query_attachment_folder");
								if(dbrows($result_attachment_folder)!=0){
									while($data_attachment_folder=dbarray($result_attachment_folder)){
										?>
										<tr>
											<td class="text-left col-lg-5">
												<a href="<?php echo $_SERVER['PHP_SELF']."?folder_name=".$data_attachment_folder['attachment_folder_id']; ?>">
													<img src="<?php echo IMAGES_TYPES."file.png"; ?>" alt="File folder" title="File folder"/>
													<?php echo $data_attachment_folder['attachment_folder_name']; ?>
												</a>
											</td>
											<td class="text-center col-lg-1 text-muted">
												<small><?php echo date("d/m/Y H:m:s A", $data_attachment_folder['attachment_folder_time']); ?></small>
											</td>
											<td class="text-center col-lg-1 text-muted">
												<small>File Folder</small>
											</td>
											<td class="text-center col-lg-1"></td>
											<td class="text-center col-lg-1">
												<a href="<?php echo BASEDIR."filemanager.php?folder_name=".$data_attachment_folder['attachment_folder_id']."&action=delete"; ?>"><span class="glyphicon glyphicon-floppy-remove"></span></a>
											</td>
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
											<td class="text-left col-lg-5">
												<a href="<?php echo BASEDIR."download.php?url=".$data_attachment['attachment_uid']; ?>" target="_blank">
												<img src="<?php echo IMAGES_TYPES.get_type($data_attachment['attachment_uid']).".png"; ?>"/>
												<?php echo $data_attachment['attachment_uid']; ?>
												</a>
											</td>
											<td class="text-center col-lg-1 text-muted">
												<small><?php echo date("d/m/Y H:m:s A", $data_attachment['attachment_time']); ?></small>
											</td>
											<td class="text-center col-lg-1 text-muted">
												<small><?php echo strtoupper(get_type($data_attachment['attachment_uid']))." File"; ?></small>
											</td>
											<td class="text-center col-lg-1 text-muted">
												<small><?php echo parsebytesize($data_attachment['attachment_size'], 2); ?></small>
											</td>
											<td class="text-center col-lg-1">
												<a href="<?php echo BASEDIR."filemanager.php?url=".$data_attachment['attachment_uid']."&action=delete"; ?>"><span class="glyphicon glyphicon-floppy-remove"></span></a>
												<a href="<?php echo BASEDIR."download.php?url=".$data_attachment['attachment_uid']; ?>" target="_blank"><span class="glyphicon glyphicon-cloud-download"></span></a>
												<a href="#" data-toggle="modal" data-target="#file_info"><span class="glyphicon glyphicon-info-sign"></span></a>
											</td>
										</tr>
									<?php
									
									}
								}else{
									if($count_list==-1){
										?>
										<tr>
											<td colspan="5" class="text-center col-lg-1 text-muted">
												<small>This folder is empty.</small>
											</td>
										</tr>
										<?php
									}
								}
								?>
							</table>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
}else{
	redirect(BASEDIR."login.php");
}
require_once BASEDIR."footer.php";
?>