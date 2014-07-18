<?php
require_once "subheader.php";

if(!iMEMBER){
	if(isset($_POST['submit'])){
		login($username=$_POST['username'], $password=$_POST['password'], $remember=$_POST['remember']);
	}
	?>
	<!-- Begin page content -->
	<div class="container col-lg-offset-4 col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Login</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="login.php">
					<div class="form-group">
						<label for="username" class="col-lg-1 control-label">Username</label>
						<br><br>
						<div class="col-lg-12">
							<input id="username" name="username" type="text" class="form-control" placeholder="Enter your username">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-lg-1 control-label">Password</label>
						<br><br>
						<div class="col-lg-12">
							<input id="password" name="password" type="password" class="form-control" placeholder="Enter your password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="1"> Remember me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-3">
							<button name="submit" type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
}else{
	redirect(BASEDIR."filemanager.php");
}
require_once BASEDIR."footer.php";
?>