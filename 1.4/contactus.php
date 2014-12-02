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

if(isset($_POST['submit'])){
	$subject=secure_itext($_POST['subject']);
	$message=secure_itextarea($_POST['message']);
	$name=secure_itext($_POST['name']);
	$department=isnum($_POST['department']);
	switch($department){
		case 1:
			$email="support@uploadchi.com";
			break;
		case 2:
			$email="sales@uploadchi.com";
			break;
		case 3:
			$email="billing@uploadchi.com";
			break;
		case 4:
			$email="administrator@uploadchi.com";
			break;
	}
	@mail("$email", "$subject", "$message", "From: $name");
}
?>
<!-- Begin page content -->
<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo BASEDIR.'index.php'; ?>" title="Home">Home</a></li>
		<li class="active">Contact Us</li>
	</ol>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</div>
		<div class="panel-body">
			<div class="form-group col-lg-5 text-center">
				<img src="<?php echo IMAGES."contact.jpg"; ?>" alt="Contact Us" title="Contact Us" class="img-responsive img-thumbnail">
			</div>
			<form name="form_contactus" class="form-vertical" role="form" method="post" action="contactus.php">
				<div class="form-group col-lg-7">
					<label for="name" class="control-label">Department</label><br>
					<select name="department" class="form-control col-lg-12">
						<option value="1">Support</option>
						<option value="2">Sales</option>
						<option value="3">Billing</option>
						<option value="4">Administration</option>
					</select>
				</div>
				<div class="form-group col-lg-7">
					<label for="name" class="control-label">Name</label><br>
					<input id="name" name="name" type="text" class="form-control" placeholder="John Carter">
				</div>
				<div class="form-group col-lg-7">
					<label for="email" class="control-label">Email</label><br>
					<input id="email" name="email" type="text" class="form-control" placeholder="example@domain.com">
				</div>
				<div class="form-group col-lg-7">
					<label for="subject" class="control-label">Subject</label><br>
					<input id="subject" name="subject" type="text" class="form-control" placeholder="Enter your subject">
				</div>
				<div class="form-group col-lg-12">
					<label for="message" class="control-label">Message</label><br>
					<textarea id="message" name="message" class="form-control" rows="3" placeholder="Enter your message here"></textarea>
				</div>
				<div class="col-lg-6 col-lg-offset-3 text-center">
					<button id="submit" name="submit" type="submit" class="btn btn-primary">Send Message</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
require_once BASEDIR.'footer.php';
?>