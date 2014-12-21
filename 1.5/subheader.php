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
$page_time_start = microtime();
session_start();
require_once 'maincore.php';
require_once LOCALESET.'commons.php';
require_once LOCALESET.'login.php';
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
	$get_styles = array(THEMES_CSS.'bootstrap.min.css', THEMES_CSS.'jasny-bootstrap.min.css', THEMES_CSS.'ui-lightness/jquery-ui.min.css', THEMES_CSS.'datatables.bootstrap.min.css', THEMES.'font-awesome/css/font-awesome.min.css', THEMES_CSS.'styles.min.css');
	compress_file($get_styles, 'css');
	?>
	<link href="<?php echo THEMES_CSS.'cstyles.min.css'; ?>" rel="stylesheet">
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
					<li><a href="<?php echo BASEDIR.'index.php'; ?>" title="<?php echo $locale['commons_108']; ?>"><span class="glyphicon glyphicon-home"></span>&nbsp;<?php echo $locale['commons_108']; ?></a></li>
					<li><a href="<?php echo BASEDIR.'terms.php'; ?>" title="<?php echo $locale['commons_109']; ?>"><span class="glyphicon glyphicon-book"></span>&nbsp;<?php echo $locale['commons_109']; ?></a></li>
					<li><a href="<?php echo BASEDIR.'statistics.php'; ?>" title="<?php echo $locale['commons_110']; ?>"><span class="glyphicon glyphicon-stats"></span>&nbsp;<?php echo $locale['commons_110']; ?></a></li>
					<li><a href="<?php echo BASEDIR.'aboutus.php'; ?>" title="<?php echo $locale['commons_111']; ?>"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<?php echo $locale['commons_111']; ?></a></li>
					<li><a href="<?php echo BASEDIR.'contactus.php'; ?>" title="<?php echo $locale['commons_112']; ?>"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;<?php echo $locale['commons_112']; ?></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php
					if(iMEMBER){
					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php
						if($userdata['user_avatar']!='noavatar.png' && file_exists(AVATARS.$userdata['user_avatar'])){
							?>
							<img src="<?php echo AVATARS.$userdata['user_avatar']; ?>" width="19px" height="19px" class="img-circle">
							<?php
						}else{
							?>
							<img src="<?php echo AVATARS.'noavatar_small.png'; ?>" class="img-circle"> 
							<?php
						}
						?>
						<small><?php echo $locale['commons_113']; ?> <?php echo "<b>".$userdata['user_username']."</b>"; ?> </small><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><img src="<?php echo AVATARS.$userdata['user_avatar']; ?>" class="img-responsive" style="width:170px; height:99px"></a></li>
							<li class="divider"></li>
							<li><a href="<?php echo BASEDIR.'edit_profile.php'; ?>"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $locale['commons_107']; ?></a></li>
							<li><a href="<?php echo BASEDIR.'dashboard.php'; ?>"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;<?php echo $locale['commons_106']; ?></a></li>
							<!--<li><a href=""><span class="glyphicon glyphicon-gift"></span>&nbsp;&nbsp;Buy Premium</a></li>!-->
							<?php
							if (iADMIN){
								?>
								<li><a href="<?php echo ADMIN.'index.php'.$aidlink; ?>"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;<?php echo $locale['commons_105']; ?></a></li>
								<?php
							}
							?>
							<li class="divider"></li>
							<li><a href="<?php echo BASEDIR."index.php?logout=yes"; ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;<?php echo $locale['commons_102']; ?></a></li>
						</ul>
					</li>
					<?php
					}else{
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo AVATARS.'noavatar_small.png'; ?>" title="<?php echo $locale['commons_104']; ?>" alt="<?php echo $locale['commons_104']; ?>" class="img-circle"> <small><?php echo $locale['commons_104']; ?></small> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo BASEDIR.'login.php'; ?>" title="<?php echo $locale['commons_101']; ?>"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;<?php echo $locale['commons_101']; ?></a></li>
								<li><a href="<?php echo BASEDIR.'register.php'; ?>" title="<?php echo $locale['commons_103']; ?>"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;<?php echo $locale['commons_103']; ?></a></li>
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