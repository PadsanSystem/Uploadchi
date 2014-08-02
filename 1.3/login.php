<?php
/*
|-------------------------------|
| PadsanSystem Corporation		|
|-------------------------------|
| Upload Center Version			|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
require_once 'subheader_uniq.php';

if(iADMIN) { redirect(BASEDIR.'index.php'); }

if(isset($_POST['submit'])){
	login($username=$_POST['username'], $password=$_POST['password'], $remember=$_POST['remember']);
}
?>
<div class="container">
	<form role="form" method="post" action="login.php">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Please Sign In</h3>
					</div>
					<div class="panel-body">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" required>
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<!-- Change this to a button or input when using this as a form -->
							<button name="submit" type="submit" class="btn btn-lg btn-success btn-block">Login</button>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php
require_once BASEDIR.'footer.php';
?>