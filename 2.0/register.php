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
require_once LOCALESET.'commons.php';
require_once LOCALESET.'register.php';
require_once LOCALESET.'errors.php';

if(iMEMBER){redirect(BASEDIR.'index.php');}

if(isset($_POST['submit'])){
	if(!preg_match('/^[a-z\d_]{5,20}$/i', $_POST['username']))
		$error=102;
	else
		$user_username=strtolower($_POST['username']);
	
	if($database->has(DB_PREFIX.'users', ["user_username"=>$user_username]))
		$error=108;
	
	$user_password=md5(md5(secure_itext($_POST['password'])));
	$user_name=secure_itext($_POST['name']);
	$user_family=secure_itext($_POST['family']);
	
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$error=104;
	else
		$user_email=strtolower($_POST['email']);
	
	if($database->has(DB_PREFIX.'users', ["user_email"=>$user_email]))
		$error=109;
	
	// Get string
	$string=$_FILES['avatar'];
	if(is_uploaded_file($string['tmp_name'])){
		// Get type file
		if(!in_array(get_type($string, 'file'), array('jpg', 'png', 'gif')))
			$error=100;
			
		// Get size file
		if(get_size($string, 'file')>5242880)
			$error=105;
		
		// Verify images
		if(verify_image($string['tmp_name'])==false)
			$error=101;
			
		$user_avatar_name=random_text($type='number');
		$user_avatar_type=get_type($string);
		$user_avatar=$user_avatar_name.".".$user_avatar_type;
	}else{
		$user_avatar='noavatar_small.png';
	}
	
	if(!isset($error)){
		move_uploaded_file($string['tmp_name'], AVATARS.$user_avatar);
		$database->insert(DB_PREFIX.'users', ['user_username'=>$user_username, 'user_password'=>$user_password, 'user_name'=>$user_name, 'user_family'=>$user_family, 'user_email'=>$user_email,'user_avatar'=>$user_avatar, '#user_time_sign'=>'UNIX_TIMESTAMP()', '#user_time_visit'=>'UNIX_TIMESTAMP()', 'user_group'=>2, 'user_status'=>'Enable']);
		$message="<div class='alert alert-success'>Well done! You successfully register on Uploadchi.</div>";
	}
}
?>
<!-- Begin page content -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-plus"></span> Register</div>
		<div class="panel-body">
			<?php
			if(isset($error)){
				?>
				<div class="alert alert-warning" role="alert">
					<p class="text-danger"><b><?php echo $locale['login_105']; ?> <?php echo $error; ?></b></p>
					<?php
					$error_string=show_error($error, 'errors');
					echo $locale["$error_string"];
					?>
				</div>
				<?php
			}
			?>
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
<?php
require_once BASEDIR.'footer.php';
?>