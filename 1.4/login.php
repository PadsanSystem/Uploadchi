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

if(iMEMBER) { redirect(BASEDIR.'index.php'); }

if(isset($_POST['submit'])){
	$login=login($username=$_POST['username'], $password=$_POST['password'], $remember=$_POST['remember']);
}
?>
<div class="login">
	<div class="container-fluid">
		<form name="form_login" role="form" method="post" action="<?php echo BASEDIR.'login.php'; ?>">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Please Sign In</h3>
						</div>
						<div class="panel-body">
							<?php
							if(isset($login)){
								$data=show_error($login);
								?>
								<div class="alert alert-warning" role="alert">
									<p class="text-danger"><b>Error <?php echo $login; ?></b></p>
									<?php echo $data['error_page_content']; ?>
								</div>
								<?php
							}
							?>
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="text" required autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" required>
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="1">Remember Me
									</label>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<button name="submit" type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-hand-up"></span> Login</button>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>