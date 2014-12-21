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
require_once LOCALESET.'errors.php';
require_once LOCALESET.'edit_profile.php';

if(!iMEMBER) { redirect(BASEDIR.'index.php'); }

if(isset($_POST['submit'])){
	if($_POST['password']=='')
		$user_password=$userdata['user_password'];
	else
		$user_password=md5(md5(secure_itext($_POST['password'])));

	$user_name=secure_itext($_POST['name']);
	$user_family=secure_itext($_POST['family']);
	
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$user_email=strtolower($userdata['user_email']);
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
			$random_name=random_text('number');
			$user_avatar=$random_name.'.'.$type;
			
			move_uploaded_file($string['tmp_name'], AVATARS.$user_avatar);
			
			// include CLASSES."imageresizer.php";
			
			if(file_exists(AVATARS.$userdata['user_avatar']) && $userdata['user_avatar']!='noavatar.png'){
				unlink(AVATARS.$userdata['user_avatar']);
			}
		}
	}else{
		$user_avatar=$userdata['user_avatar'];
	}

	if(!isset($error)){
		dbquery("UPDATE ".DB_PREFIX."users SET user_password='$user_password', user_name='$user_name', user_family='$user_family', user_email='$user_email', user_avatar='$user_avatar', user_time_visit='".time()."' WHERE user_id='".$userdata['user_id']."'");
		redirect(BASEDIR.'edit_profile.php?action=update_profile');
	}
}
if(isset($_GET['action']) && ($_GET['action']=='update_profile')){
	$message="<div class='alert alert-success'>Well done! You successfully update your profile.</div>";
}
if(isset($_GET['action']) && ($_GET['action']=='remove_avatar')){
	if(file_exists(AVATARS.$userdata['user_avatar'])){
		unlink(AVATARS.$userdata['user_avatar']);
		dbquery("UPDATE ".DB_PREFIX."users SET user_avatar='noavatar.png' WHERE user_id='".$userdata['user_id']."'");
	}
}
?>
<!-- Begin page content -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> <?php echo $locale['edit_profile_108']; ?></div>
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
			echo $message;
			?>
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
							<img src="<?php echo AVATARS.$userdata['user_avatar']; ?>" alt="<?php echo $userdata['user_username']; ?>" title="<?php echo $userdata['user_username']; ?>" class="img-responsive" style="width:95px;height:59px;margin-right:10px;">
							<small><a href="<?php echo BASEDIR.'edit_profile.php?action=remove_avatar'; ?>" class="text-danger"><?php echo $locale['edit_profile_111']; ?></a></small>
							<?php
						}else{
							?>
							<img src="<?php echo AVATARS.'noavatar.png'; ?>" alt="<?php echo $userdata['user_username']; ?>" title="<?php echo $userdata['user_username']; ?>" class="img-responsive" style="width:59px;height:59px;margin-right:10px;">
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