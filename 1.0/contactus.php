<?php
require_once("subheader.php");
?>
<!-- Begin page content -->
<div class="container col-lg-offset-4 col-lg-4">
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" method="post" action="contactus.php">
				<div class="form-group">
					<label for="name" class="col-lg-1 control-label">Department</label>
					<br><br>
					<div class="col-lg-12">
						<select class="form-control">
							<option>Support</option>
							<option>Sales</option>
							<option>Billing</option>
							<option>Administration</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-lg-1 control-label">Name</label>
					<br><br>
					<div class="col-lg-12">
						<input id="name" name="name" type="text" class="form-control" placeholder="Enter your name">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-lg-1 control-label">Email</label>
					<br><br>
					<div class="col-lg-12">
						<input id="email" name="email" type="text" class="form-control" placeholder="Enter your email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject" class="col-lg-1 control-label">Subject</label>
					<br><br>
					<div class="col-lg-12">
						<input id="subject" name="subject" type="text" class="form-control" placeholder="Enter your subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-lg-1 control-label">Message</label>
					<br><br>
					<div class="col-lg-12">
						<textarea id="message" name="message" class="form-control" rows="3" placeholder="Enter your message here"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-2">
						<button id="submit" name="submit" type="submit" class="btn btn-primary">Send Message</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once("footer.php");
?>