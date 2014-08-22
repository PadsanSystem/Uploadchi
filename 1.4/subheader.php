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
session_start();
require_once 'maincore.php';
csrfguard_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $settings['setting_description']; ?>">
	<meta name="keywords" content="<?php echo $settings['setting_keywords']; ?>">
	<meta name="author" content="PadsanSystem Corporation">
	<link rel="shortcut icon" href="favicon.png">
	<title><?php echo $settings['setting_title']; ?></title>
	<?php
	$get_styles = array(CSS.'bootstrap.min.css', CSS.'jasny-bootstrap.min.css', CSS.'ui-lightness/jquery-ui.min.css', CSS.'styles.min.css');
	compress_file($get_styles, 'css');
	?>
	<link href="<?php echo CSS.'cstyles.min.css'; ?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
if(!isset($_GET['aidlink']) && !preg_match('/login.php/i', $_SERVER['SCRIPT_FILENAME'])){
	?>
	<!-- Fixed navbar -->
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo BASEDIR.'index.php'; ?>" title="Uploadchi"><?php echo $settings['setting_title']; ?></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo BASEDIR.'index.php'; ?>" title="Home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="<?php echo BASEDIR.'terms.php'; ?>" title="Terms"><span class="glyphicon glyphicon-book"></span> Terms</a></li>
					<li><a href="<?php echo BASEDIR.'statistics.php'; ?>" title="Statistics"><span class="glyphicon glyphicon-stats"></span> Statistics</a></li>
					<li><a href="<?php echo BASEDIR.'aboutus.php'; ?>" title="About Us"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
					<li><a href="<?php echo BASEDIR.'contactus.php'; ?>" title="Contact Us"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php
					if($userdata['user_id']!=NULL){
					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php
						if($userdata['user_avatar']!='noavatar.png'){
							?>
							<img src="<?php echo AVATARS.$userdata['user_avatar']; ?>" width="19px" height="19px" class="img-circle">
							<?php
						}else{
							?>
							<img src="<?php echo AVATARS.'noavatar_small.png'; ?>" class="img-circle"> 
							<?php
						}
						?>
						<small>Hi, <?php echo "<b>".$userdata['user_username']."</b>"; ?> </small><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEDIR.'edit_profile.php'; ?>"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Edit Profile</a></li>
							<li><a href="<?php echo BASEDIR.'filemanager.php'; ?>"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;File Manager</a></li>
							<li><a href="<?php echo BASEDIR.'user_statistics.php'; ?>"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;View Statistics</a></li>
							<!--<li><a href=""><span class="glyphicon glyphicon-gift"></span>&nbsp;&nbsp;Buy Premium</a></li>!-->
							<?php
							if (iADMIN){
								?>
								<li><a href="<?php echo ADMINISTRATION.'index.php'.$aidlink; ?>"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;Control Panel</a></li>
								<?php
							}
							?>
							<li class="divider"></li>
							<li><a href="<?php echo BASEDIR."index.php?logout=yes"; ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
						</ul>
					</li>
					<?php
					}else{
					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo AVATARS.'noavatar_small.png'; ?>" class="img-circle"> <small>Hello Guest</small> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEDIR.'login.php'; ?>" title="Login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
							<li><a href="<?php echo BASEDIR.'register.php'; ?>" title="Register"><span class="glyphicon glyphicon-plus"></span> Register</a></li>
						</ul>
					</li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
<?php
}