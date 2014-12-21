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
require_once LOCALESET.'login.php';
require_once LOCALESET.'errors.php';

if(iMEMBER) { redirect(BASEDIR.'index.php'); }

?>
<div class="login">
	<div class="container-fluid">
		<form name="form_login" role="form" method="post" action="<?php echo BASEDIR.'login.php'; ?>">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $locale['login_100']; ?></h3>
						</div>
						<div class="panel-body">
							<?php
							if(isset($login)){
								?>
								<div class="alert alert-warning" role="alert">
									<p class="text-danger"><b><?php echo $locale['login_105']; ?> <?php echo $login; ?></b></p>
									<?php echo $locale['errors_120']; ?>
								</div>
								<?php
							}
							?>
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="<?php echo $locale['login_101']; ?>" name="username" type="text" required autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="<?php echo $locale['login_102']; ?>" name="password" type="password" autocomplete="off" required>
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="1"><?php echo $locale['login_104']; ?>
									</label>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<button name="login" type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;<?php echo $locale['login_103']; ?></button>
							</fieldset>
						</div>
					</div>
					<small><a href="<?php echo BASEDIR.'index.php'; ?>"><?php echo $locale['login_106']; ?></a></small>
				</div>
			</div>
		</form>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>