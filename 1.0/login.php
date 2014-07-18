<?php
require_once("subheader.php");
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
						<input type="text" class="form-control" id="username" placeholder="Enter your username">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-lg-1 control-label">Password</label>
					<br><br>
					<div class="col-lg-12">
						<input type="password" class="form-control" id="password" placeholder="Enter your password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-3">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once("footer.php");
?>