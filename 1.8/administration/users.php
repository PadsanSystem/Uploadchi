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
if (!iADMIN || !defined("iAUTH") || !isset($aid) || $aid != iAUTH) { redirect('../index.php'); }

if(isset($id) && isset($action) && ($action=='delete')){
	dbquery("DELETE FROM ".DB_PREFIX."users WHERE user_id='$id'");
}else if(isset($id) && isset($action) && ($action=='Enable')){
	dbquery("UPDATE ".DB_PREFIX."users SET user_status='Disable' WHERE user_id='$id'");
}else if(isset($id) && isset($action) && ($action=='Disable')){
	dbquery("UPDATE ".DB_PREFIX."users SET user_status='Enable' WHERE user_id='$id'");
}
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-user"></i> Users Management</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Add new users</div>
				<div class="panel-body">
					<form name="form_register" class="form-vertical" role="form" method="post" action="register.php" enctype="multipart/form-data">
						<div class="form-group col-lg-6">
							<label for="username" class="control-label">Username</label><br>
							<input id="username" name="username" type="text" class="form-control" placeholder="Enter your username" autocomplete="off" required>
						</div>
						<div class="form-group col-lg-6">
							<label for="password" class="control-label">Password</label><br>
							<input id="password" name="password" type="password" class="form-control" placeholder="Enter your password" autocomplete="off" required>
						</div>
						<div class="form-group col-lg-6">
							<label for="name" class="control-label">Name</label><br>
							<input id="name" name="name" type="text" class="form-control" placeholder="Enter your name">
						</div>
						<div class="form-group col-lg-6">
							<label for="family" class="control-label">Family</label><br>
							<input id="family" name="family" type="text" class="form-control" placeholder="Enter your family">
						</div>
						<div class="form-group col-lg-6">
							<label for="email" class="control-label">Email</label><br>
							<input id="email" name="email" type="text" class="form-control" placeholder="Enter your email" required>
						</div>
						<div class="form-group col-lg-6">
							<label for="avatar" class="control-label">Avatar</label><br>
							<div class="fileinput fileinput-new input-group" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Browse</span><span class="fileinput-exists">Change</span><input type="file" name="avatar"></span>
							</div>
						</div>
						<div class="col-md-6 col-md-offset-3 text-center">
							<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-user"></span> Create Account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Users list
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th class="text-center">ID</th>
								<th class="text-center">Username</th>
								<th class="text-center">Name</th>
								<th class="text-center">Family</th>
								<th class="text-center">Groups</th>
								<th class="text-center">Signup Date</th>
								<th class="text-center">Last visit</th>
								<th class="text-center">Operations</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$result_users=dbquery("SELECT users.*, users_groups.* FROM ".DB_PREFIX."users users,".DB_PREFIX."users_groups users_groups WHERE users.user_group=users_groups.user_group_id ORDER BY users.user_time_sign DESC");
						if(dbrows($result_users)!=0){
							$i=1;
							while($data_users=dbarray($result_users)){
								?>
								<tr class="odd gradeX">
									<td><?php echo $i; ?>.</td>
									<td><?php echo $data_users['user_username']; ?></td>
									<td><?php echo $data_users['user_name']; ?></td>
									<td><?php echo $data_users['user_family']; ?></td>
									<td><?php echo $data_users['user_group_name']; ?></td>
									<td><?php echo date('m/d/Y', $data_users['user_time_sign']); ?></td>
									<td><?php echo date('m/d/Y', $data_users['user_time_visit']); ?></td>
									<td class="text-center">
										<a href="<?php echo ADMIN.'users.php'.$aidlink.'&id='.$data_users['user_id'].'&action=delete'; ?>"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
										<a href="<?php echo ADMIN.'users.php'.$aidlink.'&id='.$data_users['user_id'].'&action=edit'; ?>"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
										<a href="<?php echo ADMIN.'users.php'.$aidlink.'&id='.$data_users['user_id'].'&action='.$data_users['user_status']; ?>">
										<?php
										if($data_users['user_status']=='Enable'){
											?>
											<i class="fa fa-unlock"></i>&nbsp;
											<?php
										}else{
											?>
											<span class="glyphicon glyphicon-lock"></span>&nbsp;
											<?php
										}
										?>
										</a>
										<a href="<?php echo ADMIN.'users.php'.$aidlink.'&id='.$data_users['user_id'].'&action=info'; ?>"><span class="glyphicon glyphicon-info-sign"></span></a>
									</td>
								</tr>
								<?php
								$i++;
							}
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require_once ADMIN.'footer.php';
?>
<script>
$(document).ready(function() {
	$('#dataTables-example').dataTable({
		"paging":   true,
        "ordering": true,
		"stateSave": true
	});
});
</script>