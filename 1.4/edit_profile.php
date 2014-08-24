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

if(!iMEMBER) { redirect(BASEDIR.'index.php'); }

$result_profile=dbquery("SELECT * FROM ".DB_PREFIX."users WHERE user_id='".$userdata['user_id']."'");
$data_profile=dbarray($result_profile);

if(isset($_POST['submit'])){
	if($_POST['password']=='')
		$user_password=$data_profile['user_password'];
	else
		$user_password=md5(md5(secure_itext($_POST['password'])));

	$user_name=secure_itext($_POST['name']);
	$user_family=secure_itext($_POST['family']);

	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$user_email=strtolower($data_profile['user_email']);
		$error=104;
	}else{
		$user_email=strtolower($_POST['email']);
	}

	// Get string
	$string=$_FILES['avatar'];
	
	if(is_uploaded_file($string['tmp_name'])){
		// Get type file
		$type=get_type($string, 'file');
		$type_array=array('jpg', 'png', 'gif');
		
		if(!in_array($type, $type_array))
			$error=106;
			
		// Get size file
		$size=get_size($string, 'file');
		if($size>5242880){
			$error=105;
		}
		
		if(!isset($error)){
			$user_avatar=random_text('number').'.'.$type;
			move_uploaded_file($string['tmp_name'], AVATARS.$user_avatar);
			if(file_exists(AVATARS.$userdata['user_avatar'])){
				unlink(AVATARS.$data_profile['user_avatar']);
			}
		}
	}else{
		$user_avatar=$data_profile['user_avatar'];
	}

	if(!isset($error)){
		$message="<div class='alert alert-success'>Well done! You successfully update your profile.</div>";
	
		dbquery("UPDATE ".DB_PREFIX."users SET user_password='$user_password', user_name='$user_name', user_family='$user_family', user_email='$user_email', user_avatar='$user_avatar', user_time_visit='".time()."' WHERE user_id='".$userdata['user_id']."'");
	}
}
?>
<!-- Begin page content -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Edit Profile</div>
		<div class="panel-body">
			<?php
			if(isset($error)){
				$data=show_error($error);
				?>
				<div class="alert alert-warning" role="alert">
					<p class="text-danger"><b>Error <?php echo $error; ?></b></p>
					<?php echo $data['error_page_content']; ?>
				</div>
				<?php
			}
			echo $message;
			?>
			<form name="form_edit_profile" class="form-vertical" role="form" method="post" action="edit_profile.php" enctype="multipart/form-data">
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
					<input id="name" name="name" type="text" value="<?php echo $data_profile['user_name']; ?>" class="form-control" placeholder="Enter your name">
				</div>
				<div class="form-group col-lg-6">
					<label for="family" class="control-label">Family</label><br>
					<input id="family" name="family" type="text" value="<?php echo $data_profile['user_family']; ?>" class="form-control" placeholder="Enter your family">
				</div>
				<div class="form-group col-lg-6">
					<label for="email" class="control-label">Email</label><br>
					<input id="email" name="email" type="text" value="<?php echo $data_profile['user_email']; ?>" class="form-control" placeholder="Enter your email">
				</div>
				<div class="form-group col-lg-6">
					<label for="avatar" class="control-label">Avatar</label><br>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
						<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Browse</span><span class="fileinput-exists">Change</span><input type="file" name="avatar"></span>
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
require_once BASEDIR.'footer.php';
?>