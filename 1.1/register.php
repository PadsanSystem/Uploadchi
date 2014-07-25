<?php
require_once("subheader.php");
?>
<!-- Begin page content -->
<div class="container col-lg-offset-4 col-lg-4">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-plus"></span> Register</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" method="post" action="register.php" enctype="multipart/form-data">
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
						<input type="text" class="form-control" id="password" placeholder="Enter your password">
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-lg-1 control-label">Name</label>
					<br><br>
					<div class="col-lg-12">
						<input type="text" class="form-control" id="name" placeholder="Enter your name">
					</div>
				</div>
				<div class="form-group">
					<label for="family" class="col-lg-1 control-label">Family</label>
					<br><br>
					<div class="col-lg-12">
						<input type="text" class="form-control" id="family" placeholder="Enter your family">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-lg-1 control-label">Email</label>
					<br><br>
					<div class="col-lg-12">
						<input type="text" class="form-control" id="email" placeholder="Enter your email">
					</div>
				</div>
				<div class="form-group">
					<label for="avatar" class="col-lg-1 control-label">Avatar</label>
					<br><br>
					<div class="col-lg-12">
						<input id="avatar" name="avatar" type="file">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-3">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once("footer.php");
?>