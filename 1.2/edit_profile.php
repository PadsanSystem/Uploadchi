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

if(isset($_POST['submit'])){
	$user_username=secure_itext($_POST['username']);
	$user_password=md5(md5(secure_itext($_POST['password'])));
	if($user_password!="")
		$user_password="user_password='$user_password',";
	else
		$user_password="";
	$user_name=secure_itext($_POST['name']);
	$user_family=secure_itext($_POST['family']);
	$user_email=$_POST['email'];
	$user_avatar=$_FILES['avatar']['name'];
	dbquery("UPDATE ".DB_PREFIX."users SET $user_password user_name='$user_name', user_family='$user_family', user_email='$user_email', user_time_visit='".time()."' WHERE user_id='".$userdata['user_id']."'");

	$error="<div class='alert alert-success'>Well done! You successfully update your profile.</div>";
}

$result_profile=dbquery("SELECT * FROM ".DB_PREFIX."users WHERE user_id='".$userdata['user_id']."'");
$data_profile=dbarray($result_profile);
?>
<!-- Begin page content -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Edit Profile</div>
		<div class="panel-body">
			<?php echo $error; ?>
			<form class="form-vertical" role="form" method="post" action="edit_profile.php" enctype="multipart/form-data">
				<div class="form-group col-lg-6">
					<label for="username" class="control-label">Username</label><br>
					<input id="username" name="username" type="text" value="<?php echo $data_profile['user_username']; ?>" class="form-control" placeholder="Enter your username" autocomplete="off" disabled>
				</div>
				<div class="form-group col-lg-6">
					<label for="password" class="control-label">Password</label><br>
					<input id="password" name="password" type="password" class="form-control" placeholder="Enter your password" autocomplete="off">
				</div>
				<div class="form-group col-lg-6">
					<label for="name" class="control-label">Name</label><br>
					<input id="name" name="name" type="text"  value="<?php echo $data_profile['user_name']; ?>"class="form-control" placeholder="Enter your name">
				</div>
				<div class="form-group col-lg-6">
					<label for="family" class="control-label">Family</label><br>
					<input id="family" name="family" type="text"  value="<?php echo $data_profile['user_family']; ?>"class="form-control" placeholder="Enter your family">
				</div>
				<div class="form-group col-lg-6">
					<label for="email" class="control-label">Email</label><br>
					<input id="email" name="email" type="text"  value="<?php echo $data_profile['user_email']; ?>"class="form-control" placeholder="Enter your email">
				</div>
				<div class="form-group col-lg-6">
					<label for="avatar" class="control-label">Avatar</label><br>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
						<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Browse</span><span class="fileinput-exists">Change</span><input type="file" name="file_hosting"></span>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3 text-center">
					<button name="submit" type="submit" class="btn btn-primary">Update Profile</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once BASEDIR."footer.php";
?>