<?php
/*
|-------------------------------|
| PadsanCMS						|
|-------------------------------|
| UploadCenter Version v2.0		|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
require_once 'subheader.php';

// Prevent view from Guests
if(!iMEMBER){redirect(BASEDIR.'index.php');}

// Load Language
include_once LOCALESET.'commons.php';
include_once LOCALESET.'errors.php';
include_once LOCALESET.'edit_profile.php';


if(isset($_POST['submit'])){
	if($_POST['password']=='')
		$user_password=$userdata['user_password'];
	else
		$user_password=md5(md5(secure_itext($_POST['password'])));

	$user_name=secure_itext($_POST['name']);
	$user_family=secure_itext($_POST['family']);
	
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$error=104;
	else
		$user_email=strtolower($_POST['email']);
	
	// Check this
	// if($database->has(DB_PREFIX.'users', ['user_email[!]'=>$user_email]))
		// $error=109;
	
	// Get string
	$string=$_FILES['avatar'];
	
	if(is_uploaded_file($string['tmp_name'])){
		// Get type file
		$type=get_type($string, 'file');
		if(!in_array($type, array('jpg', 'png', 'gif')))
			$error=100;
			
		// Get size file
		if(get_size($string, 'file')>5242880)
			$error=105;
		
		if(!isset($error)){
			$random_name=random_text('number');
			$user_avatar=$random_name.'.'.$type;
			move_uploaded_file($string['tmp_name'], AVATARS.$user_avatar);
			
			include CLASSES."imageresizer.php";
			// Size s1
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(19, 19, 'exact');
			$avatar_create->saveImage(AVATARS.$random_name.'_2.'.$type, 80);
			
			// Size s2
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(95, 59, 'exact');
			$avatar_create->saveImage(AVATARS.$random_name.'_3.'.$type, 80);
			
			// Size s3
			$avatar_create=new resize(AVATARS.$user_avatar);
			$avatar_create->resizeImage(170, 99, 'exact');
			$avatar_create->saveImage(AVATARS.$random_name.'_4.'.$type, 80);
			
			if(file_exists(AVATARS.$userdata['user_avatar']) && $userdata['user_avatar']!='noavatar.png')
				remove_avatars($userdata['user_avatar']);
		}
	}else{
		$user_avatar=$userdata['user_avatar'];
	}

	if(!isset($error)){
		$database->update(DB_PREFIX.'users', ['user_name'=>$user_name, 'user_family'=>$user_family, 'user_password'=>$user_password, 'user_email'=>$user_email, 'user_avatar'=>$user_avatar, '#user_time_visit'=>'UNIX_TIMESTAMP()'], ['user_id'=>$userdata['user_id']]);
		redirect(BASEDIR.'edit_profile.php?action=update_profile');
	}
}

if(isset($_GET['action']) && ($_GET['action']=='update_profile'))
	$message="<div class='alert alert-success' role='alert'><span class='glyphicon glyphicon-info-sign'></span> Well done! You successfully update your profile.</div>";

if(isset($_GET['action']) && ($_GET['action']=='remove_avatar')){
	if(file_exists(AVATARS.$userdata['user_avatar'])){
		remove_avatars($userdata['user_avatar']);
		$database->update(DB_PREFIX.'users', ['user_avatar'=>'noavatar.png'], ['user_id'=>$userdata['user_id']]);
	}
}
?>
<!-- Begin page content -->
<div class="container">
	<?php
	if(isset($error)){
		?>
		<div class="alert alert-warning" role="alert">
			<p class="text-danger"><?php echo $locale['login_105']; ?> <?php echo $error; ?></p>
			<?php
			$error_string=show_error($error, 'errors');
			echo $locale["$error_string"];
			?>
		</div>
		<?php
	}else if(isset($message)){
		echo $message;
	}
	?>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> <?php echo $locale['edit_profile_108']; ?></div>
		<div class="panel-body">
			<form name="form_edit_profile" class="form-vertical" role="form" method="post" action="edit_profile.php" enctype="multipart/form-data">
				<div class="form-group col-lg-12">
					<label class="control-label"><?php echo $locale['edit_profile_100']; ?></label><br>
					<div class="well well-sm"><?php echo $userdata['user_username']; ?></div>
				</div>
				<div class="form-group col-lg-6">
					<label for="password" class="control-label"><?php echo $locale['edit_profile_101']; ?></label><br>
					<input id="password" name="password" type="password" class="form-control" placeholder="Enter your password" autocomplete="off">
				</div>
				<div class="form-group col-lg-6">
					<label for="name" class="control-label"><?php echo $locale['edit_profile_102']; ?></label><br>
					<input id="name" name="name" type="text" value="<?php echo $userdata['user_name']; ?>" class="form-control" placeholder="Enter your name">
				</div>
				<div class="form-group col-lg-6">
					<label for="family" class="control-label"><?php echo $locale['edit_profile_103']; ?></label><br>
					<input id="family" name="family" type="text" value="<?php echo $userdata['user_family']; ?>" class="form-control" placeholder="Enter your family">
				</div>
				<div class="form-group col-lg-6">
					<label for="email" class="control-label"><?php echo $locale['edit_profile_104']; ?></label><br>
					<input id="email" name="email" type="text" value="<?php echo $userdata['user_email']; ?>" class="form-control" placeholder="Enter your email">
				</div>
				<div class="form-group col-lg-6">
					<div align="center" class="pull-left">
						<?php
						if($userdata['user_avatar']!='noavatar.png' && file_exists(AVATARS.$userdata['user_avatar'])){
							?>
							<img src="<?php echo show_avatars(3); ?>" alt="<?php echo $userdata['user_username']; ?>" title="<?php echo $userdata['user_username']; ?>" class="img-responsive" style="margin-right:10px;">
							<small><a href="<?php echo BASEDIR.'edit_profile.php?action=remove_avatar'; ?>" class="text-danger"><span class="glyphicon glyphicon-remove"></span> <?php echo $locale['edit_profile_111']; ?></a></small>
							<?php
						}else{
							?>
							<img src="<?php echo AVATARS.'noavatar.png'; ?>" alt="<?php echo $userdata['user_username']; ?>" title="<?php echo $userdata['user_username']; ?>" class="img-responsive" style="margin-right:10px;">
							<?php
						}
						?>
					</div>
					<label for="avatar" class="control-label"><?php echo $locale['edit_profile_105']; ?></label><br>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
						<span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><?php echo $locale['edit_profile_110']; ?></span><span class="fileinput-exists"><?php echo $locale['edit_profile_109']; ?></span><input type="file" name="avatar"></span>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3 text-center">
					<button name="submit" type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> <?php echo $locale['edit_profile_107']; ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>